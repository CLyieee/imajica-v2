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
            // Log the raw request data for debugging
            Log::info('Patient creation request data', [
                'all_data' => $request->all(),
                'file' => $request->hasFile('image_path') ? 'Image file present' : 'No image file'
            ]);
            
            // Validate the form data with less strict requirements
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

            // Initialize data array without the image_path
            $patientData = $request->except('image_path', '_token', '_method');
            
            // Handle image upload if present
            if ($request->hasFile('image_path')) {
                $patientData['image_path'] = $request->file('image_path')->store('patients', 'public');
                $patientData['created_at'] = now();
$patientData['updated_at'] = now();
            }
            
            // Create the patient record
            $newPatient = Patient::create($patientData);
            
            // Log success for debugging
            Log::info('Patient created successfully', ['patient_id' => $newPatient->id]);
            
            return redirect()->route('page.new-patient')->with('success', 'Patient added successfully!');
        } catch (ValidationException $e) {
            // For validation errors, get the detailed error messages
            $errors = $e->validator->errors()->all();
            $errorMsg = implode(', ', $errors);
            
            Log::error('Validation error when creating patient', [
                'errors' => $errors,
                'data' => $request->all()
            ]);
            
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Validation error: ' . $errorMsg);
        } catch (\Exception $e) {
            // For other errors
            Log::error('Error creating patient', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data' => $request->all()
            ]);
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Error creating patient: ' . $e->getMessage());
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
