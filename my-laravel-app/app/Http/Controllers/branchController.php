<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;
use Illuminate\Support\Facades\Validator;

class branchController extends Controller
{
    public function add_branch(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'branch_code' => 'required|string|max:20|unique:branches,branch_code',
            'branch_name' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create new branch
            $branch = branch::create([
                'branch_code' => $request->branch_code,
                'branch_name' => $request->branch_name,
                'address' => $request->address,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Branch created successfully',
                'data' => $branch
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create branch',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_branches()
    {
        try {
            $branches = branch::all();
            return response()->json([
                'status' => true,
                'data' => $branches
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve branches',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function get_branch($branch_code)
    {
        try {
            $branch = branch::find($branch_code);
            
            if (!$branch) {
                return response()->json([
                    'status' => false,
                    'message' => 'Branch not found'
                ], 404);
            }

            return response()->json([
                'status' => true,
                'data' => $branch
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve branch',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update_branch(Request $request, $branch_code)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'branch_name' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $branch = branch::find($branch_code);
            
            if (!$branch) {
                return response()->json([
                    'status' => false,
                    'message' => 'Branch not found'
                ], 404);
            }

            $branch->update([
                'branch_name' => $request->branch_name,
                'address' => $request->address,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Branch updated successfully',
                'data' => $branch
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update branch',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function delete_branch($branch_code)
    {
        try {
            $branch = branch::find($branch_code);
            
            if (!$branch) {
                return response()->json([
                    'status' => false,
                    'message' => 'Branch not found'
                ], 404);
            }

            // Check if branch has associated services before deleting
            if ($branch->service()->count() > 0) {
                return response()->json([
                    'status' => false,
                    'message' => 'Cannot delete branch with associated services'
                ], 400);
            }

            $branch->delete();

            return response()->json([
                'status' => true,
                'message' => 'Branch deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete branch',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
