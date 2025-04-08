<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\Validator;

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
    // Log::info('Update service request data:', $request->all());
    
    $data = $request->validate([
        'id' => 'required|exists:services,id',
        'service_name' => 'required',
        'branch_code' => 'required',
        'description' => 'required',
        'duration' => 'required',
        'service_category' => 'required',
        'service_cost' => 'required',
        'loyalty_pts' => 'required',
    ]);

    $service = service::find($request->id);
    if (!$service) {
        return redirect()->back()->with('error', 'Service not found');
    }

    $service->service_name = $request->service_name;
    $service->branch_code = $request->branch_code;
    $service->description = $request->description;
    $service->duration = $request->duration;
    $service->service_category = $request->service_category;
    $service->service_cost = $request->service_cost;
    $service->loyalty_pts = $request->loyalty_pts;
    $service->save();

    return redirect()->back()->with('success', 'Service updated successfully');
}


public function delete(Request $request)
    {
        // Validate the request
        $request->validate([
            'id' => 'required',
        ]);

        // Find the branch by branch_code
        $service = service::where('id', $request->id)->first();
        
        if (!$service) {
            return redirect()->back()->with('error', 'Branch not found');
        }

        // Delete the branch
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully');
    }



    public function getServices()
    {
        $services = service::with('branch')->get();
        return view('page.services-list', compact('services'));
    }


}
