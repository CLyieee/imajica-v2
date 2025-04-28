<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\service;
use App\Models\staff;
use App\Models\branch;
use App\Models\patient;
use Illuminate\Support\Facades\Log;

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
            'start_date' => 'required',
            'end_date' => 'required',
            'id' => 'required',
            'branch_code' => 'required',
            'patient_id' => 'required',
            'useReward' => 'required',
            'remarks' => 'required',
        ]);

        // Create the booking
        $newBooking = booking::create($data);
        
        // Get the service and patient for points calculation
        $service = service::find($data['service_id']);
        $patient = patient::find($data['patient_id']);
        
        if ($service && $patient) {
            // Handle points system based on booking status
            if ($data['status'] == 'Paid') {
                // Calculate points to be awarded based on service cost
                $serviceCost = $service->service_cost;
                $pointsToAdd = 0;
                
                // 10 points per 1000 cost, 20 points per 2000 cost, 
                // 50 points per 3000 and 50 points per 5000
                if ($serviceCost >= 5000) {
                    $pointsToAdd = 50;
                } elseif ($serviceCost >= 3000) {
                    $pointsToAdd = 50;
                } elseif ($serviceCost >= 2000) {
                    $pointsToAdd = 20;
                } elseif ($serviceCost >= 1000) {
                    $pointsToAdd = 10;
                }
                
                // Add points to patient's account
                $patient->points += $pointsToAdd;
                
                // Add service cost to patient's total_cost
                $patient->total_cost += $serviceCost;
                
                $patient->save();
                
                Log::info("Added {$pointsToAdd} points to Patient ID: {$patient->patient_id}. New total: {$patient->points}");
                Log::info("Added {$serviceCost} to total_cost for Patient ID: {$patient->patient_id}. New total cost: {$patient->total_cost}");
            }
            
            // If using reward points as payment
            if ($data['useReward']) {
                $serviceCost = $service->service_cost;
                
                // Convert points to monetary value (assuming 1 point = $1 for simplicity)
                $pointValue = 1;
                $maxPointsToUse = $serviceCost / $pointValue;
                
                if ($patient->points >= $maxPointsToUse) {
                    // Patient has enough points to cover the full cost
                    $patient->points -= $maxPointsToUse;
                    Log::info("Used {$maxPointsToUse} points for full payment. Patient ID: {$patient->patient_id}, Remaining points: {$patient->points}");
                } else {
                    // Use all available points and deduct the balance
                    $coveredAmount = $patient->points * $pointValue;
                    $remainingCost = $serviceCost - $coveredAmount;
                    
                    // Check if patient has enough balance
                    if ($patient->balance >= $remainingCost) {
                        $patient->balance -= $remainingCost;
                        Log::info("Used {$patient->points} points and deducted \${$remainingCost} from balance. Patient ID: {$patient->patient_id}");
                        $patient->points = 0;
                    } else {
                        // Not enough points or balance - this should be handled according to business logic
                        // For now, we'll just log it as an insufficient funds situation
                        Log::warning("Insufficient funds for Patient ID: {$patient->patient_id}. Required: \${$remainingCost}, Available balance: \${$patient->balance}");
                    }
                }
                
                $patient->save();
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
            // Validate the request
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
                'booking_id' => 'required|exists:bookings,booking_id'
            ]);

            // Find the booking by booking_id
            $booking = Booking::findOrFail($request->booking_id);
            
            try {
                // Update the booking with validated data
                $booking->update($validatedData);

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
                Log::error('Error saving booking: ' . $e->getMessage());
                if($request->wantsJson()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Failed to save booking: ' . $e->getMessage()
                    ], 500);
                }
                return redirect()->back()
                    ->with('error', 'Failed to save booking: ' . $e->getMessage());
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error: ', $e->errors());
            return response()->json([
                'status' => false,
                'message' => 'The given data was invalid.',
                'errors' => $e->errors()
            ], 422);
            
        } catch (\Exception $e) {
            Log::error('Error updating booking: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Error updating booking: ' . $e->getMessage()
            ], 500);
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
}
