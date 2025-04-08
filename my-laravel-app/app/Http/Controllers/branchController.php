<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;
use Illuminate\Support\Facades\Validator;

class branchController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            'branch_code' => 'required',
            'branch_name' => 'required',
            'address' => 'required',
        ]);

        $newBranch = branch::create($data);
        
        return redirect(route('page.new-branch'));
    }


    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'branch_code' => 'required',
            'branch_name' => 'required',
            'address' => 'required',
        ]);

        // Find the branch by branch_code
        $branch = Branch::where('branch_code', $request->branch_code)->first();
        
         if (!$branch) {
            return redirect()->back()->with('error', 'Branch not found');
        }

        // Update the branch
        $branch->branch_name = $request->branch_name;
        $branch->address = $request->address;
        $branch->save();

        return redirect()->back()->with('success', 'Branch updated successfully');
    }

    public function delete(Request $request)
    {
        // Validate the request
        $request->validate([
            'branch_code' => 'required',
        ]);

        // Find the branch by branch_code
        $branch = Branch::where('branch_code', $request->branch_code)->first();
        
        if (!$branch) {
            return redirect()->back()->with('error', 'Branch not found');
        }

        // Delete the branch
        $branch->delete();

        return redirect()->back()->with('success', 'Branch deleted successfully');
    
    }

    public function getAllBranches()
    {
        try {
            $branches = Branch::all();
            return response()->json([
                'status' => true,
                'data' => $branches,
                'message' => 'Branches retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to retrieve branches: ' . $e->getMessage()
            ], 500);
        }
    }
}