<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\Validator;

class serviceController extends Controller
{
    public function add_service(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|max:255',
            'branch_code' => 'required|exists:branches,branch_code',
            'description' => 'nullable|string',
            'duration' => 'required|integer',
            'service_category' => 'required|string|max:100',
            'service_cost' => 'required|numeric',
            'loyalty_pts' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create new service
            $service = service::create([
                'service_name' => $request->service_name,
                'branch_code' => $request->branch_code,
                'description' => $request->description,
                'duration' => $request->duration,
                'service_category' => $request->service_category,
                'service_cost' => $request->service_cost,
                'loyalty_pts' => $request->loyalty_pts ?? 0,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Service created successfully',
                'data' => $service
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create service',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_services()
    {
        try {
            $services = service::all();
            return response()->json([
                'status' => true,
                'data' => $services
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve services',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_services_by_branch($branch_code)
    {
        try {
            $services = service::where('branch_code', $branch_code)->get();
            return response()->json([
                'status' => true,
                'data' => $services
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve services',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_service($id)
    {
        try {
            $service = service::find($id);
            
            if (!$service) {
                return response()->json([
                    'status' => false,
                    'message' => 'Service not found'
                ], 404);
            }

            return response()->json([
                'status' => true,
                'data' => $service
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve service',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update_service(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|max:255',
            'branch_code' => 'required|exists:branches,branch_code',
            'description' => 'nullable|string',
            'duration' => 'required|integer',
            'service_category' => 'required|string|max:100',
            'service_cost' => 'required|numeric',
            'loyalty_pts' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $service = service::find($id);
            
            if (!$service) {
                return response()->json([
                    'status' => false,
                    'message' => 'Service not found'
                ], 404);
            }

            $service->update([
                'service_name' => $request->service_name,
                'branch_code' => $request->branch_code,
                'description' => $request->description,
                'duration' => $request->duration,
                'service_category' => $request->service_category,
                'service_cost' => $request->service_cost,
                'loyalty_pts' => $request->loyalty_pts ?? 0,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Service updated successfully',
                'data' => $service
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update service',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete_service($id)
    {
        try {
            $service = service::find($id);
            
            if (!$service) {
                return response()->json([
                    'status' => false,
                    'message' => 'Service not found'
                ], 404);
            }

            $service->delete();

            return response()->json([
                'status' => true,
                'message' => 'Service deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete service',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
