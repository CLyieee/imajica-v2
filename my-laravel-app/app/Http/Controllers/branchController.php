<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class branchController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            'branch_code' => 'required',
            'branch_name' => 'required',
            'address' => 'required',
        ]);

        $newBranch = branch::create($data);
        
        return redirect(route('page.new-branch'))->with('success', 'Branch added successfully!');
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

        return redirect()->route('page.branch-list')->with('success', 'Branch updated successfully');
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

    public function edit($branch_code)
    {
        try {
            Log::info('Attempting to find branch for editing', ['branch_code' => $branch_code]);
            
            $branch = branch::where('branch_code', $branch_code)->first();
            
            if (!$branch) {
                Log::warning('Branch not found for editing', ['branch_code' => $branch_code]);
                return redirect()->route('page.branch-list')
                    ->with('error', 'Branch not found with code: ' . $branch_code);
            }
            
            Log::info('Successfully found branch for editing', [
                'branch_code' => $branch_code, 
                'name' => $branch->branch_name
            ]);
            
            return view('page.edit-branch', compact('branch'));
        } catch (\Exception $e) {
            Log::error('Error finding branch for editing', [
                'branch_code' => $branch_code,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('page.branch-list')
                ->with('error', 'Error occurred while editing branch: ' . $e->getMessage());
        }
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