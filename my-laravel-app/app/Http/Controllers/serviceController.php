<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\Branch;


class serviceController extends Controller
{
   public function create(Request $request) {
        try {
            $data = $request->validate([
                'service_name' => 'required',
                'service_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'branch_code' => 'required',
                'description' => 'required',
                'duration' => 'required|numeric',
                'service_category' => 'required',
                'service_cost' => 'required|numeric',
                'loyalty_pts' => 'required|numeric',
            ]);

            // Handle image upload
            if ($request->hasFile('service_image')) {
                $image = $request->file('service_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/services'), $imageName);
                $data['service_image'] = 'uploads/services/' . $imageName;
            }

            $service = service::create($data);

            if ($request->ajax()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Service created successfully',
                    'data' => $service
                ]);
            }

            return redirect()->route('page.services-list')->with('success', 'Service created successfully');

        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to create service: ' . $e->getMessage()
                ], 500);
            }
            return redirect()->back()->with('error', 'Failed to create service: ' . $e->getMessage());
        }
    }

public function update(Request $request) {
    // For debugging
    Log::info('Update service request method:', ['method' => $request->method()]);
    Log::info('Update service request data:', $request->all());

    // Validate the basic fields
    $validatedData = $request->validate([
        'service_name' => 'required',
        'branch_code' => 'required',
        'description' => 'required',
        'duration' => 'required',
        'service_category' => 'required',
        'service_cost' => 'required',
        'loyalty_pts' => 'required',
    ]);

    // Find the service by ID
    $service = service::find($request->input('service_id'));
    if (!$service) {
        return redirect()->back()->with('error', 'Service not found');
    }

    // Handle image upload if a new image is provided
    if ($request->hasFile('service_image')) {
        $validator = Validator::make($request->all(), [
            'service_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Delete old image if it exists
        if ($service->service_image && file_exists(public_path($service->service_image))) {
            unlink(public_path($service->service_image));
        }

        // Upload new image
        $image = $request->file('service_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/services'), $imageName);
        $service->service_image = 'uploads/services/' . $imageName;
    }

    // Update service details
    $service->service_name = $request->service_name;
    $service->branch_code = $request->branch_code;
    $service->description = $request->description;
    $service->duration = $request->duration;
    $service->service_category = $request->service_category;
    $service->service_cost = $request->service_cost;
    $service->loyalty_pts = $request->loyalty_pts;
    $service->save();

    return redirect()->route('page.services-list')->with('success', 'Service updated successfully');
}


public function delete(Request $request)
{
    // Validate the request
    $request->validate([
        'id' => 'required',
    ]);

    // Find the service by service_id
    $service = service::where('service_id', $request->id)->first();

    if (!$service) {
        if ($request->ajax()) {
            return response()->json([
                'success' => false, 
                'message' => 'Service not found'
            ], 404);
        }
        return redirect()->back()->with('error', 'Service not found');
    }

    // Delete the service
    $service->delete();

    // If it's an AJAX request, return a JSON response
    if ($request->ajax()) {
        return response()->json([
            'success' => true, 
            'message' => 'Service deleted successfully'
        ]);
    }

    // For non-AJAX requests, redirect back with success message
    return redirect()->back()->with('success', 'Service deleted successfully');
}



    public function getServices()
    {
        $services = service::with('branch')->get();
        return view('page.services-list', compact('services'));
    }

 public function edit($service_id)
{
    // Get the service by service_id
    $service = service::findOrFail($service_id);
    
    // Get all branches for the branch select dropdown
    $branches = Branch::all();
    
    // Return the edit view with service data
    return view('page.edit-service', compact('service', 'branches'));
}

}
