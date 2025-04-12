<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\tier;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class patientController extends Controller
{
    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact_number' => 'required|string|max:20',
                'birthdate' => 'required|date',
                'gender' => 'required|in:male,female',
                'patient_tier_id' => 'required|exists:tiers,patient_tier_id',
                'occupation' => 'nullable|string|max:255',
                'address' => 'required|string',
                'emergency_contact_name' => 'nullable|string|max:255',
                'emergency_contact_number' => 'nullable|string|max:20',
                'medical_concerns' => 'nullable|string',
                'current_medications' => 'nullable|string',
                'note_from_admin' => 'nullable|string',
                'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            // Handle image upload
            if ($request->hasFile('image_path')) {
                $image = $request->file('image_path');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('patient_images'), $imageName);
                $validatedData['image_path'] = 'patient_images/' . $imageName;
            } else {
                // If no image uploaded, set to null or a default image path
                $validatedData['image_path'] = null;
            }

            $patient = Patient::create($validatedData);

            return redirect()->back()->with('success', 'Patient created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error creating patient: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request)
    {
        try {
            // Validate the form data
            $data = $request->validate([
                'image_path' => 'nullable',
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'contact_number' => 'required|string|max:20',
                'birthdate' => 'required|date',
                'gender' => 'required|string',
                'patient_tier_id' => 'required|numeric|exists:tiers,patient_tier_id',
                'occupation' => 'nullable|string|max:255',
                'address' => 'required|string',
                'emergency_contact_name' => 'nullable|string|max:255',
                'emergency_contact_number' => 'nullable|string|max:20',
                'medical_concerns' => 'nullable|string',
                'current_medications' => 'nullable|string',
                'note_from_admin' => 'nullable|string',
            ]);

            $patient = Patient::where('patient_id', $request->patient_id)->first();
            if (!$patient) {
                return response()->json(['error' => 'Patient not found'], 404);
            }

            // Initialize data array without the image_path
            $patientData = $request->except('image_path', '_token', '_method', 'patient_id');
            
            // Handle image upload if present
            if ($request->hasFile('image_path')) {
                $patientData['image_path'] = $request->file('image_path')->store('patients', 'public');
            }

            // Update patient data
            $patient->update($patientData);

            // Check if request is AJAX
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Patient updated successfully',
                    'patient' => $patient
                ]);
            }

            // For regular form submission
            return redirect()->back()->with('success', 'Patient updated successfully');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
            
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $patient = Patient::findOrFail($id);
            
            // Delete any associated files/images if needed
            if ($patient->image_path) {
                Storage::delete('public/' . $patient->image_path);
            }
            
            // Delete the patient
            $patient->delete();
            
            // Return JSON response for AJAX requests
            if (request()->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Patient deleted successfully'
                ]);
            }
            
            // Return redirect for regular form submission
            return redirect()->route('page.patient-list')
                ->with('success', 'Patient deleted successfully');
                
        } catch (\Exception $e) {
            Log::error('Error deleting patient', [
                'patient_id' => $id,
                'error' => $e->getMessage()
            ]);
            
            if (request()->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete patient: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->route('page.patient-list')
                ->with('error', 'Failed to delete patient: ' . $e->getMessage());
        }
    }
    
    public function index()
    {
        $tiers = tier::all();
        return view('page.new-patient', compact('tiers'));
    }


    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('page.patient-details', compact('patient'));
    }
}
