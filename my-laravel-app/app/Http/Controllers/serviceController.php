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
        $data = $request->validate([
            'service_name' => 'required',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'branch_code' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'service_category' => 'required',
            'service_cost' => 'required',
            'loyalty_pts' => 'required',
        ]);

        // Handle image upload
        if ($request->hasFile('service_image')) {
            $image = $request->file('service_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $imageName);
            $data['service_image'] = 'uploads/services/' . $imageName;
        }

        $newService = service::create($data);

        return redirect(route('page.new-services'))->with('success', 'Service created successfully');
    }

public function update(Request $request) {
    // For debugging - log the incoming data
    Log::info('Update service request data:', $request->all());

    $data = $request->validate([
        'service_id' => 'required|exists:services,service_id',
        'service_name' => 'required',
        'branch_code' => 'required',
        'description' => 'required',
        'duration' => 'required',
        'service_category' => 'required',
        'service_cost' => 'required',
        'loyalty_pts' => 'required',
        'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $service = service::where('service_id', $request->service_id)->first();
    if (!$service) {
        return redirect()->back()->with('error', 'Service not found');
    }

    // Handle image upload if a new image is provided
    if ($request->hasFile('service_image')) {
        $image = $request->file('service_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/services'), $imageName);
        
        // Delete the old image if it exists
        if($service->service_image && file_exists(public_path($service->service_image))) {
            unlink(public_path($service->service_image));
        }
        
        $service->service_image = 'uploads/services/' . $imageName;
    }

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
            return redirect()->back()->with('error', 'Service not found');
        }

        // Delete the image file if it exists
        if($service->service_image && file_exists(public_path($service->service_image))) {
            unlink(public_path($service->service_image));
        }

        // Delete the service
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully');
    }

    public function getServices()
    {
        $services = service::with('branch')->get();
        $branches = Branch::all();
        return view('page.services-list', compact('services', 'branches'));
    }

    public function edit($id)
    {
        try {
            Log::info('Attempting to find service for editing', ['id' => $id]);
            
            $service = service::where('service_id', $id)->firstOrFail();
            $branches = Branch::all();
            
            if (!$service) {
                Log::warning('Service not found for editing', ['id' => $id]);
                return redirect()->route('page.services-list')
                    ->with('error', 'Service not found with ID: ' . $id);
            }
            
            Log::info('Successfully found service for editing', [
                'id' => $id, 
                'name' => $service->service_name
            ]);
            
            return view('page.edit-service', compact('service', 'branches'));
        } catch (\Exception $e) {
            Log::error('Error finding service for editing', [
                'id' => $id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('page.services-list')
                ->with('error', 'Error occurred while editing service: ' . $e->getMessage());
        }
    }

}
