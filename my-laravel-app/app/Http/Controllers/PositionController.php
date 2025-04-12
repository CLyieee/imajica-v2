<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\positionModel;
use Illuminate\Support\Facades\Log;

class PositionController extends Controller
{
    public function create(Request $request)
    {
        try {
            Log::info('Incoming position data:', $request->all());
            
            $validatedData = $request->validate([
                'position_name' => 'required|string|max:255',
                'department_code' => 'required|exists:departments,department_code',
                'description' => 'required|string',
                'status' => 'nullable|boolean',
            ]);

            // Generate a position_id
            $lastPosition = positionModel::orderBy('position_id', 'desc')->first();
            $nextId = $lastPosition ? $lastPosition->position_id + 1 : 1;
            
            $validatedData['position_id'] = $nextId;
            $validatedData['status'] = $request->has('status');

            Log::info('Creating position with data:', $validatedData);
            
            $position = positionModel::create($validatedData);

            // Return JSON response if request wants JSON
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Position created successfully',
                    'data' => $position
                ], 201);
            }

            // Otherwise redirect back to position list with success message
            return redirect()->route('page.position-list')
                            ->with('success', 'Position created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error:', ['errors' => $e->errors()]);
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error creating position:', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'Error creating position: ' . $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'position_name' => 'required|string|max:255',
                'department_code' => 'required|exists:departments,department_code',
                'description' => 'required|string',
                'status' => 'nullable|boolean',
                'position_id' => 'required|exists:position,position_id'
            ]);

            $position = positionModel::findOrFail($request->position_id);
            $validatedData['status'] = $request->has('status');
            $position->update($validatedData);

            return redirect(route('page.position-list'))
                ->with('success', 'Position updated successfully!');
                
        } catch (\Exception $e) {
            Log::error('Error updating position: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Error updating position: ' . $e->getMessage());
        }
    }

    public function delete(Request $request) {
        try {
            $request->validate([
                'position_id' => 'required|exists:position,position_id',
            ]);

            $position = positionModel::where('position_id', $request->position_id)->first();
            
            if (!$position) {
                Log::error('Position not found for deletion', ['position_id' => $request->position_id]);
                return redirect()->back()->with('error', 'Position not found');
            }

            try {
                $position->delete();
                Log::info('Position deleted successfully', ['position_id' => $request->position_id]);
                
                if ($request->wantsJson()) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Position deleted successfully'
                    ]);
                }
                
                return redirect()->route('page.position-list')->with('success', 'Position deleted successfully');

            } catch (\Exception $e) {
                Log::error('Error deleting position', [
                    'position_id' => $request->position_id,
                    'error' => $e->getMessage()
                ]);
                throw $e;
            }

        } catch (\Exception $e) {
            Log::error('Error in delete method', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->wantsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to delete position: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to delete position: ' . $e->getMessage());
        }
    }

    public function getAll()
    {
        try {
            $positions = positionModel::all();
            return response()->json([
                'status' => true,
                'data' => $positions,
                'message' => 'Positions retrieved successfully'
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching positions: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Error fetching positions'
            ], 500);
        }
    }
}
