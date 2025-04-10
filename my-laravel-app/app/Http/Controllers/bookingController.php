<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Branch;
use App\Models\Patient;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function index()
    {
        // Get all services for the booking form
        $services = Service::all();
        // Get all staff members
        $staffs = Staff::all();
        // Get all branches
        $branches = Branch::all();
        // Get all patients
        $patients = Patient::all();
        
        return view('page.booking', compact('services', 'staffs', 'branches', 'patients'));
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

        $newBooking = Booking::create($data);

        return redirect()->route('page.booking')->with('success', 'Booking created successfully');
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
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

        // Find the booking by booking_id
        $booking = Booking::where('booking_id', $request->booking_id)->first();
        
         if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found');
        }

        // Update the booking
        $booking->service_id = $request->service_id;
        $booking->status = $request->status;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->id = $request->id;
        $booking->branch_code = $request->branch_code;
        $booking->patient_id = $request->patient_id;
        $booking->useReward = $request->useReward;
        $booking->remarks = $request->remarks;
        $booking->save();

        return redirect()->back()->with('success', 'Booking updated successfully');
    }

    public function delete(Request $request)
    {
        // Validate the request
        $request->validate([
            'booking_id' => 'required',
        ]);

        // Find the booking by booking_id
        $booking = Booking::where('booking_id', $request->booking_id)->first();
        
        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found');
        }

        // Delete the booking
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully');
    }

    public function get_bookings()
    {
        try {
            // Get all bookings with related data
            $bookings = Booking::with(['service', 'patient', 'staff', 'branch'])->get();
            
            $formattedBookings = $bookings->map(function($booking) {
                $colorMap = [
                    'Pending' => '#6610f2', // purple
                    'Paid' => '#28c76f',    // green
                    'Cancelled' => '#ea5455', // red
                    'Completed' => '#28c76f', // green
                    'No Show' => '#ff9f43'   // orange
                ];
                
                // Get the default color if status doesn't match any in the map
                $color = $colorMap[$booking->status] ?? '#6610f2';
                
                // Format the booking data for FullCalendar
                return [
                    'id' => $booking->booking_id,
                    'title' => $booking->service ? $booking->service->service_name : 'Unknown Service',
                    'start' => $booking->start_date,
                    'allDay' => false,
                    'color' => $color,
                    'extendedProps' => [
                        'calendar' => strtolower($booking->status),
                        'description' => $booking->remarks ?? 'No description',
                        'staff' => $booking->staff ? $booking->staff->firstname . ' ' . $booking->staff->lastname : 'Unassigned',
                        'branch' => $booking->branch ? $booking->branch->branch_name : 'Unknown Branch',
                        'status' => $booking->status,
                        'patient_id' => $booking->patient_id,
                        'service_id' => $booking->service_id,
                        'useReward' => $booking->useReward,
                        'id' => $booking->id,  // staff ID
                        'branch_code' => $booking->branch_code
                    ]
                ];
            });
            
            Log::info('Bookings fetched successfully', ['count' => count($bookings)]);
            return response()->json($formattedBookings);
        } catch (\Exception $e) {
            Log::error('Error fetching bookings: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            return response()->json(['error' => 'Failed to fetch bookings: ' . $e->getMessage()], 500);
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
                    'title' => 'Book ' . $booking->booking_id,  // Changed to show simple booking number
                    'start' => $booking->start_date,
                    'end' => $booking->end_date,
                    'allDay' => false,
                    'extendedProps' => [
                        'calendar' => $statusColors[$booking->status] ?? 'Business',
                        'service_id' => $booking->service_id,
                        'status' => $booking->status,
                        'staff_id' => $booking->id,
                        'branch_code' => $booking->branch_code,
                        'patient_id' => $booking->patient_id,
                        'use_reward_points' => $booking->useReward,
                        'remarks' => $booking->remarks,
                        // Add full details for tooltip/modal
                        'patient_name' => $booking->patient->firstname . ' ' . $booking->patient->lastname,
                        'service_name' => $booking->service->service_name,
                        'staff_name' => $booking->staff ? $booking->staff->firstname . ' ' . $booking->staff->lastname : 'Unassigned',
                        'branch_name' => $booking->branch ? $booking->branch->branch_name : 'Unknown Branch'
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
