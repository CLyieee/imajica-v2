<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use Illuminate\Support\Facades\Validator;

class supplierController extends Controller
{
    public function add_supplier(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'supplier_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contactNumber' => 'required|string|max:20',
            'supplier_type' => 'required|string|max:100',
            'address' => 'required|string',
            'product_offered' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create new supplier
            $supplier = supplier::create([
                'supplier_name' => $request->supplier_name,
                'email' => $request->email,
                'contactNumber' => $request->contactNumber,
                'supplier_type' => $request->supplier_type,
                'address' => $request->address,
                'product_offered' => $request->product_offered,
                'notes' => $request->notes,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Supplier created successfully',
                'data' => $supplier
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create supplier',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_suppliers()
    {
        try {
            $suppliers = supplier::all();
            return response()->json([
                'status' => true,
                'data' => $suppliers
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve suppliers',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_supplier($id)
    {
        try {
            $supplier = supplier::find($id);
            
            if (!$supplier) {
                return response()->json([
                    'status' => false,
                    'message' => 'Supplier not found'
                ], 404);
            }

            return response()->json([
                'status' => true,
                'data' => $supplier
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve supplier',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update_supplier(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'supplier_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contactNumber' => 'required|string|max:20',
            'supplier_type' => 'required|string|max:100',
            'address' => 'required|string',
            'product_offered' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $supplier = supplier::find($id);
            
            if (!$supplier) {
                return response()->json([
                    'status' => false,
                    'message' => 'Supplier not found'
                ], 404);
            }

            $supplier->update([
                'supplier_name' => $request->supplier_name,
                'email' => $request->email,
                'contactNumber' => $request->contactNumber,
                'supplier_type' => $request->supplier_type,
                'address' => $request->address,
                'product_offered' => $request->product_offered,
                'notes' => $request->notes,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Supplier updated successfully',
                'data' => $supplier
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update supplier',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete_supplier($id)
    {
        try {
            $supplier = supplier::find($id);
            
            if (!$supplier) {
                return response()->json([
                    'status' => false,
                    'message' => 'Supplier not found'
                ], 404);
            }

            $supplier->delete();

            return response()->json([
                'status' => true,
                'message' => 'Supplier deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete supplier',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
