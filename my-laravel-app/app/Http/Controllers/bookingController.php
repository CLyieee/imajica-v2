<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\service;
use App\Models\staff;
use App\Models\branch;
use App\Models\patient;
use Illuminate\Support\Facades\Log;
use App\Models\PatientPointsHistory;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = booking::with(['patient', 'service', 'staff', 'branch'])->get();
        $services = service::all();
        $staffs = staff::all();
        $branches = branch::all();
        $patients = patient::all();

        return view('page.booking', compact('bookings', 'services', 'staffs', 'branches', 'patients'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required',
            'status' => 'required',
            'payment' => 'nullable',
            'start_date' => 'required',
            'end_date' => 'required',
            'id' => 'required',
            'branch_code' => 'required',
            'patient_id' => 'required',
            'useReward' => 'required',
            'remarks' => 'required',
            'coupon_code' => 'nullable|exists:coupons,coupon_code',
            'discount_type' => 'nullable|in:fixed,percentage',
            'discount_value' => 'nullable|numeric',
        ]);

        // Get the service and patient for calculations
        $service = service::find($data['service_id']);
        $patient = patient::find($data['patient_id']);
        
        if (!$service || !$patient) {
            return redirect()->route('page.booking')
                ->with('error', 'Invalid service or patient selected.');
        }

        $servicePrice = $service->service_cost;
        $discount = 0;
        
        // Apply coupon discount if provided
        if (!empty($data['coupon_code']) && !empty($data['discount_type']) && !empty($data['discount_value'])) {
            if ($data['discount_type'] === 'percentage') {
                $discount = ($servicePrice * $data['discount_value']) / 100;
            } else {
                $discount = $data['discount_value'];
            }
            
            // Log the applied discount
            Log::info("Applied coupon discount: Code: {$data['coupon_code']}, Type: {$data['discount_type']}, Value: {$data['discount_value']}, Amount: {$discount}");
        }
        
        $afterCoupon = max(0, $servicePrice - $discount);
        
        // Initialize variables for tracking changes
        $usedPoints = 0;
        
        // We no longer use balance, so skip directly to points
        $afterBalance = $afterCoupon;
        
        // Apply reward points if selected
        $afterReward = $afterBalance;
        if ($data['useReward'] == '1' && $patient->points > 0) {
            // Assuming 1 point = 1 in monetary value
            $usedPoints = min($patient->points, $afterBalance);
            $afterReward = $afterBalance - $usedPoints;
        }
        
        // Set final price
        $totalPrice = $afterReward;
        
        // Store original values in the booking record
        $data['price'] = $servicePrice; // Original service price
        $data['payment'] = $totalPrice; // Final amount to pay
        
        // Create the booking record
        $newBooking = booking::create($data);
        
        // Update patient's points if used
        if ($usedPoints > 0) {
            $patient->points -= $usedPoints;
            Log::info("Deducted {$usedPoints} points from patient ID: {$patient->patient_id}. New points: {$patient->points}");
        }
        
        // Add points if this is a paid booking
        if ($data['status'] == 'Paid') {
            // Calculate points to be awarded based on service cost
            $pointsToAdd = 0;
            
            // 10 points per 1000 cost, 20 points per 2000 cost, 
            // 50 points per 3000 and 50 points per 5000
            if ($servicePrice >= 5000) {
                $pointsToAdd = 50;
            } elseif ($servicePrice >= 3000) {
                $pointsToAdd = 50;
            } elseif ($servicePrice >= 2000) {
                $pointsToAdd = 20;
            } elseif ($servicePrice >= 1000) {
                $pointsToAdd = 10;
            }
            
            // Add points and update total cost
            $patient->points += $pointsToAdd;
            $patient->total_cost += $servicePrice;
            
            Log::info("Added {$pointsToAdd} points to Patient ID: {$patient->patient_id}. New total: {$patient->points}");
            Log::info("Added {$servicePrice} to total_cost for Patient ID: {$patient->patient_id}. New total cost: {$patient->total_cost}");
        }
        
        // Save patient changes
        $patient->save();

        // After successfully creating the booking, handle referrer points if applicable
        if ($request->has('referrer_id') && $request->has('is_first_time') && $request->has('add_points')) {
            $referrerId = $request->input('referrer_id');
            $patientId = $request->input('patient_id');
            
            // Make sure referrer and patient are different people
            if ($referrerId != $patientId && !empty($referrerId)) {
                // Add 100 points to referrer
                $referrer = Patient::find($referrerId);
                if ($referrer) {
                    $referrer->reward_points += 100;
                    $referrer->save();
                    
                    // Log points transaction for referrer
                    PatientPointsHistory::create([
                        'patient_id' => $referrerId,
                        'points' => 100,
                        'transaction_type' => 'earned',
                        'description' => 'Received points for referring a new patient'
                    ]);
                }
                
                // Add 100 points to referred patient (new patient)
                $patient = Patient::find($patientId);
                if ($patient) {
                    $patient->reward_points += 100;
                    $patient->save();
                    
                    // Log points transaction for referred patient
                    PatientPointsHistory::create([
                        'patient_id' => $patientId,
                        'points' => 100,
                        'transaction_type' => 'earned',
                        'description' => 'Received points for being referred by another patient'
                    ]);
                }
            }
        }

        if($request->wantsJson()) {
            return response()->json([
                'status' => true,
                'message' => 'Booking created successfully',
                'booking' => $newBooking
            ]);
        }

        return redirect()->route('page.booking')
            ->with('success', 'Booking created successfully');
    }

    public function update(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'service_id' => 'required|exists:services,service_id',
                'status' => 'required|in:Pending,Paid,Cancelled,Completed,No Show',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'id' => 'required|exists:staff,id',
                'branch_code' => 'required|exists:branches,branch_code',
                'patient_id' => 'required|exists:patients,patient_id',
                'useReward' => 'required|boolean',
                'remarks' => 'required|string',
                'booking_id' => 'required|exists:bookings,booking_id',
                'coupon_code' => 'nullable|exists:coupons,coupon_code',
                'discount_type' => 'nullable|in:fixed,percentage',
                'discount_value' => 'nullable|numeric',
            ]);

            // Find existing booking to track changes
            $booking = booking::findOrFail($request->booking_id);
            $oldPatientId = $booking->patient_id;
            $oldUseReward = $booking->useReward;
            
            // Get the service and patient for calculations
            $service = service::find($validatedData['service_id']);
            $patient = patient::find($validatedData['patient_id']);
            
            if (!$service || !$patient) {
                throw new \Exception('Invalid service or patient selected.');
            }

            $servicePrice = $service->service_cost;
            $discount = 0;
            
            // Apply coupon discount if provided
            if (!empty($validatedData['coupon_code']) && !empty($validatedData['discount_type']) && !empty($validatedData['discount_value'])) {
                if ($validatedData['discount_type'] === 'percentage') {
                    $discount = ($servicePrice * $validatedData['discount_value']) / 100;
                } else {
                    $discount = $validatedData['discount_value'];
                }
                
                // Log the applied discount
                Log::info("Updated booking with coupon discount: Code: {$validatedData['coupon_code']}, Type: {$validatedData['discount_type']}, Value: {$validatedData['discount_value']}, Amount: {$discount}");
            }
            
            $afterCoupon = max(0, $servicePrice - $discount);
            
            // Initialize variables for tracking changes
            $usedPoints = 0;
            
            // We no longer use balance, so skip directly to points
            $afterBalance = $afterCoupon;
            
            // Apply reward points if selected
            $afterReward = $afterBalance;
            if ($validatedData['useReward'] == '1' && $patient->points > 0) {
                // Assuming 1 point = 1 in monetary value
                $usedPoints = min($patient->points, $afterBalance);
                $afterReward = $afterBalance - $usedPoints;
            }
            
            // Set final price
            $totalPrice = $afterReward;
            
            // Store original values in the booking record
            $validatedData['price'] = $servicePrice; // Original service price
            $validatedData['payment'] = $totalPrice; // Final amount to pay
            
            // If this is the same patient, refund previous points/balance from the old booking
            if ($oldPatientId == $validatedData['patient_id']) {
                // If they previously used points, give them back
                if ($oldUseReward && $booking->useReward) {
                    // Calculate used points in old booking (simplified)
                    $oldUsedPoints = min($patient->points, $booking->price - $booking->payment);
                    if ($oldUsedPoints > 0) {
                        $patient->points += $oldUsedPoints;
                        Log::info("Refunded {$oldUsedPoints} points to patient ID: {$patient->patient_id} from previous booking. New points: {$patient->points}");
                    }
                }
            }
            
            // Update patient's points if used
            if ($usedPoints > 0) {
                $patient->points -= $usedPoints;
                Log::info("Deducted {$usedPoints} points from patient ID: {$patient->patient_id}. New points: {$patient->points}");
            }
            
            // Update the booking with new data
            $booking->update($validatedData);
            
            // Handle status change for points
            if ($booking->status != 'Paid' && $validatedData['status'] == 'Paid') {
                // Calculate points to be awarded based on service cost
                $pointsToAdd = 0;
                
                // 10 points per 1000 cost, 20 points per 2000 cost, 
                // 50 points per 3000 and 50 points per 5000
                if ($servicePrice >= 5000) {
                    $pointsToAdd = 50;
                } elseif ($servicePrice >= 3000) {
                    $pointsToAdd = 50;
                } elseif ($servicePrice >= 2000) {
                    $pointsToAdd = 20;
                } elseif ($servicePrice >= 1000) {
                    $pointsToAdd = 10;
                }
                
                // Add points and update total cost
                $patient->points += $pointsToAdd;
                $patient->total_cost += $servicePrice;
                
                Log::info("Added {$pointsToAdd} points to Patient ID: {$patient->patient_id}. New total: {$patient->points}");
                Log::info("Added {$servicePrice} to total_cost for Patient ID: {$patient->patient_id}. New total cost: {$patient->total_cost}");
            }
            
            // Save patient changes
            $patient->save();

            // After successfully updating the booking, handle referrer points if applicable
            if ($request->has('referrer_id') && $request->has('is_first_time') && $request->has('add_points')) {
                $referrerId = $request->input('referrer_id');
                $patientId = $request->input('patient_id');
                
                // Make sure referrer and patient are different people
                if ($referrerId != $patientId && !empty($referrerId)) {
                    // Check if points have already been added for this booking
                    $existingReferrerPoints = PatientPointsHistory::where('patient_id', $referrerId)
                        ->where('description', 'LIKE', '%Received points for referring%')
                        ->where('related_id', $validatedData['booking_id'])
                        ->exists();
                        
                    $existingPatientPoints = PatientPointsHistory::where('patient_id', $patientId)
                        ->where('description', 'LIKE', '%Received points for being referred%')
                        ->where('related_id', $validatedData['booking_id'])
                        ->exists();
                    
                    // Only add points if they haven't been added before
                    if (!$existingReferrerPoints && !$existingPatientPoints) {
                        // Add 100 points to referrer
                        $referrer = Patient::find($referrerId);
                        if ($referrer) {
                            $referrer->reward_points += 100;
                            $referrer->save();
                            
                            // Log points transaction for referrer
                            PatientPointsHistory::create([
                                'patient_id' => $referrerId,
                                'points' => 100,
                                'transaction_type' => 'earned',
                                'description' => 'Received points for referring a new patient',
                                'related_id' => $validatedData['booking_id']
                            ]);
                        }
                        
                        // Add 100 points to referred patient (new patient)
                        $patient = Patient::find($patientId);
                        if ($patient) {
                            $patient->reward_points += 100;
                            $patient->save();
                            
                            // Log points transaction for referred patient
                            PatientPointsHistory::create([
                                'patient_id' => $patientId,
                                'points' => 100,
                                'transaction_type' => 'earned',
                                'description' => 'Received points for being referred by another patient',
                                'related_id' => $validatedData['booking_id']
                            ]);
                        }
                    }
                }
            }

            if($request->wantsJson()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Booking updated successfully',
                    'booking' => $booking,
                    'redirect' => route('page.booking')
                ]);
            }

            return redirect()->route('page.booking')
                ->with('success', 'Booking updated successfully');

        } catch (\Exception $e) {
            Log::error('Error updating booking: ' . $e->getMessage());
            
            if($request->wantsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error updating booking: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->back()
                ->with('error', 'Error updating booking: ' . $e->getMessage());
        }
    }

    public function delete(Request $request)
    {
        try {
            // Validate booking ID
            $validatedData = $request->validate([
                'booking_id' => 'required|exists:bookings,booking_id'
            ]);

            $booking = Booking::findOrFail($validatedData['booking_id']);
            $booking->delete();

            if ($request->wantsJson()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Booking deleted successfully'
                ]);
            }

            return redirect()->route('page.booking')
                ->with('success', 'Booking deleted successfully');

        } catch (\Exception $e) {
            Log::error('Error deleting booking: ' . $e->getMessage());
            
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error deleting booking: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Error deleting booking: ' . $e->getMessage());
        }
    }

    public function getCalendarBookings()
    {
        try {
            $bookings = Booking::with(['service', 'patient', 'staff', 'branch'])->get();
            
            $events = $bookings->map(function($booking) {
                $statusColors = [
                    'Pending' => 'Business',
                    'Paid' => 'Personal', 
                    'Cancelled' => 'Holiday',
                    'Completed' => 'Family',
                    'No Show' => 'ETC'
                ];

                return [
                    'id' => $booking->booking_id,
                    'title' => 'Book ' . $booking-> booking_id,
                      
                    'start' => $booking->start_date,
                    
                    'allDay' => false,
                    'extendedProps' => [
                        'calendar' => $statusColors[$booking->status] ?? 'Business',
                        'status' => $booking->status,
                        'service_id' => $booking->service_id,
                        'staff_id' => $booking->id,
                        'branch_code' => $booking->branch_code,
                        'patient_id' => $booking->patient_id,
                        'use_reward_points' => $booking->useReward,
                        'remarks' => $booking->remarks,
                        'end_date' => $booking->end_date,
                        
                        'description' => "Service: " . ($booking->service ? $booking->service->service_name : 'N/A') . "\n" .
                                       "Staff: " . ($booking->staff ? $booking->staff->firstname . ' ' . $booking->staff->lastname : 'Unassigned') . "\n" .
                                       "Branch: " . ($booking->branch ? $booking->branch->branch_name : 'N/A') . "\n" .
                                       "Status: " . $booking->status,
                        
                        'patient_name' => $booking->patient ? $booking->patient->firstname . ' ' . $booking->patient->lastname : 'No Patient',
                        'service_name' => $booking->service ? $booking->service->service_name : 'No Service',
                        'staff_name' => $booking->staff ? $booking->staff->firstname . ' ' . $booking->staff->lastname : 'Unassigned',
                        'branch_name' => $booking->branch ? $booking->branch->branch_name : 'No Branch'
                    ]
                ];
            });
            
            return response()->json($events);
        } catch (\Exception $e) {
            Log::error('Error fetching calendar bookings: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Check if a patient is making their first booking
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkFirstTimePatient(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,patient_id'
        ]);

        // Count patient's existing bookings
        $bookingCount = Booking::where('patient_id', $validated['patient_id'])->count();
        
        // Return true if this is their first booking
        return response()->json([
            'is_first_time' => ($bookingCount === 0),
            'booking_count' => $bookingCount
        ]);
    }
}
