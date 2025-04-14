<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\booking;
use App\Models\service;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('bookings')
            ->join('staff', 'bookings.staff_id', '=', 'staff.id')
            ->join('services', 'bookings.service_id', '=', 'services.service_id')
            ->select(
                'staff.id as staff_id',
                'staff.firstname',
                'staff.lastname',
                DB::raw('COUNT(DISTINCT bookings.booking_id) as service_count'),
                DB::raw('COUNT(DISTINCT bookings.patient_id) as client_count'),
                DB::raw('SUM(CASE WHEN bookings.status = "Completed" THEN services.service_cost ELSE 0 END) as total_service_sales'),
                DB::raw('SUM(CASE WHEN bookings.status = "Completed" THEN 
                    (services.service_cost + COALESCE(bookings.product_amount, 0)) 
                    ELSE 0 END) as total_sales')
            )
            ->where('bookings.status', '=', 'Completed')
            ->groupBy('staff.id', 'staff.firstname', 'staff.lastname')
            ->get();

        return view('page.employee-sales', compact('employees'));
    }

    private function getMonthlySales()
    {
        $currentMonth = now()->month;
        return booking::whereMonth('start_date', $currentMonth)
            ->leftJoin('services', 'bookings.service_id', '=', 'services.service_id')
            ->sum('services.service_cost');
    }

    public function create()
    {
        // Logic to show the form for creating a new transaction
    }

    public function store(Request $request)
    {
        // Logic to save a new transaction
    }

    public function edit($id)
    {
        // Logic to show the form for editing a transaction
    }

    public function update(Request $request, $id)
    {
        // Logic to update a transaction
    }

    public function destroy($id)
    {
        // Logic to delete a transaction
    }
}
