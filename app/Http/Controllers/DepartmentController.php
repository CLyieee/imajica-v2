<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        // Get all staff members for the department head dropdown
        $staff = Staff::all();
        
        // Get all departments for the parent department dropdown
        $departments = Department::all();
        
        return view('page.new-department', compact('staff', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string|max:255',
            'department_code' => 'required|string|max:50|unique:departments',
            'department_head' => 'required',
            'status' => 'required|in:active,inactive',
            'description' => 'required|string',
            'parent_department' => 'nullable|exists:departments,id'
        ]);

        try {
            Department::create([
                'department_name' => $request->department_name,
                'department_code' => $request->department_code,
                'department_head' => $request->department_head,
                'parent_department' => $request->parent_department,
                'status' => $request->status,
                'description' => $request->description
            ]);

            return redirect()->back()->with('success', 'Department created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating department: ' . $e->getMessage())->withInput();
        }
    }
} 