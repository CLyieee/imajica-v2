<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
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

    public function update(Request $request, $id)
    {
        try {
            $patient = Patient::findOrFail($id);
            
            $validated = $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'nullable|email|max:255',
                'contact_number' => 'nullable|string|max:20',
                'gender' => 'nullable|string',
                'birthdate' => 'nullable|date',
                'occupation' => 'nullable|string',
                'address' => 'nullable|string',
                'emergency_contact_name' => 'nullable|string',
                'emergency_contact_number' => 'nullable|string',
                'medical_concerns' => 'nullable|string',
                'current_medications' => 'nullable|string',
                'note_from_admin' => 'nullable|string'
            ]);

            $patient->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Patient updated successfully',
                'patient' => $patient->fresh()
            ]);

        } catch (\Exception $e) {
            \Log::error('Patient update error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to update patient: ' . $e->getMessage()
            ], 500);
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
        $patient = patient::findOrFail($id);
        $medications = \App\Models\PatientMedication::where('patient_id', $id)->get();
        $allergies = \App\Models\PatientAllergy::where('patient_id', $id)->get();
        $healthConcerns = \App\Models\PatientHealthConcern::where('patient_id', $id)->get();
        $prescriptions = \App\Models\Prescription::where('patient_id', $id)->get();
        $attachments = \App\Models\PatientAttachment::where('patient_id', $id)->get();
        
        return view('page.patient-details', compact('patient', 'medications', 'allergies', 'healthConcerns', 'prescriptions', 'attachments'));
    }

    public function addAllergy(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'allergen' => 'required|string|max:255',
                'severity' => 'required|string|in:Mild,Moderate,Severe',
                'reaction' => 'required|string',
                'date_identified' => 'required|date'
               
            ]);

            // Create a new record in the allergies table
            $allergy = \App\Models\PatientAllergy::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Allergy added successfully',
                'data' => $allergy
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding allergy: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addMedication(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'medication_name' => 'required|string|max:255',
                'dosage' => 'required|string|max:100',
                'frequency' => 'required|string|max:100',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date|after_or_equal:start_date',
             
            ]);

            $medication = \App\Models\PatientMedication::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Medication added successfully',
                'data' => $medication
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding medication: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addHealthConcern(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'concern' => 'required|string|max:255',
                'date_reported' => 'required|date',
                'status' => 'required|string|in:Active,Resolved,Ongoing'
               
            ]);

            $healthConcern = \App\Models\PatientHealthConcern::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Health concern added successfully',
                'data' => $healthConcern
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding health concern: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addPrescription(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'prescription_number' => 'required|string|max:255',
                'date' => 'required|date',
                'doctor' => 'required|string|max:100',
                'status' => 'required|string|in:Pending,Filled,Refill required,Expired',
            ]);

            $prescription = \App\Models\Prescription::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Prescription added successfully',
                'data' => $prescription
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding prescription: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addAttachment(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'file' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:10240', // Max 10MB
                'file_type' => 'required|string|in:Medical Report,Lab Result,X-Ray,MRI,CT Scan,Prescription,Other',
                'description' => 'nullable|string|max:500'
            ]);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();
                
                // Store file in public/patient_attachments directory
                $filepath = $file->storeAs('patient_attachments', $filename, 'public');
                
                // Create attachment record
                $attachment = \App\Models\PatientAttachment::create([
                    'patient_id' => $request->patient_id,
                    'filename' => $filename,
                    'filepath' => $filepath,
                    'file_type' => $request->file_type,
                    'filesize' => $file->getSize(),
                    'description' => $request->description
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'File uploaded successfully',
                    'data' => $attachment
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'No file was uploaded'
            ], 400);

        } catch (\Exception $e) {
            \Log::error('Error uploading attachment: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error uploading file: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addAppointment(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'appointment_date' => 'required|date',
                'appointment_time' => 'required',
                'duration' => 'required|integer|min:15',
                'purpose' => 'required|string|max:255',
                'staff_id' => 'nullable|exists:staff,staff_id',
                'notes' => 'nullable|string',
                'status' => 'required|string|in:Scheduled,Completed,Cancelled,No-Show'
            ]);

            $appointment = \App\Models\Appointment::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Appointment added successfully',
                'data' => $appointment
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding appointment: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addMedicalRecord(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,patient_id',
                'record_type' => 'required|string|max:255',
                'record_date' => 'required|date',
                'description' => 'required|string',
                'staff_id' => 'nullable|exists:staff,staff_id',
                'file' => 'nullable|file|max:10240' // Max 10MB
            ]);

            // Handle file upload if present
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('medical_records', $fileName, 'public');
                $validatedData['file_path'] = $filePath;
                $validatedData['file_name'] = $fileName;
                unset($validatedData['file']); // Remove the file from the data array
            }

            $medicalRecord = \App\Models\MedicalRecord::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Medical record added successfully',
                'data' => $medicalRecord
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error adding medical record: ' . $e->getMessage()
            ], 500);
        }
    }

    // Allergy CRUD
    public function getAllergy($id)
    {
        try {
            $allergy = \App\Models\PatientAllergy::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $allergy
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving allergy: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateAllergy(Request $request, $id)
    {
        try {
            $allergy = \App\Models\PatientAllergy::findOrFail($id);
            
            $validatedData = $request->validate([
                'allergen' => 'required|string|max:255',
                'severity' => 'required|string|in:Mild,Moderate,Severe',
                'reaction' => 'required|string',
                'date_identified' => 'required|date'
            ]);

            $allergy->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Allergy updated successfully',
                'data' => $allergy
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating allergy: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteAllergy($id)
    {
        try {
            $allergy = \App\Models\PatientAllergy::findOrFail($id);
            $allergy->delete();

            return response()->json([
                'success' => true,
                'message' => 'Allergy deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting allergy: ' . $e->getMessage()
            ], 500);
        }
    }

    // Medication CRUD
    public function getMedication($id)
    {
        try {
            $medication = \App\Models\PatientMedication::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $medication
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving medication: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateMedication(Request $request, $id)
    {
        try {
            $medication = \App\Models\PatientMedication::findOrFail($id);
            
            $validatedData = $request->validate([
                'medication_name' => 'required|string|max:255',
                'dosage' => 'required|string|max:100',
                'frequency' => 'required|string|max:100',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date|after_or_equal:start_date'
            ]);

            $medication->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Medication updated successfully',
                'data' => $medication
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating medication: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteMedication($id)
    {
        try {
            $medication = \App\Models\PatientMedication::findOrFail($id);
            $medication->delete();

            return response()->json([
                'success' => true,
                'message' => 'Medication deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting medication: ' . $e->getMessage()
            ], 500);
        }
    }

    // Health Concern CRUD
    public function getHealthConcern($id)
    {
        try {
            $healthConcern = \App\Models\PatientHealthConcern::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $healthConcern
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving health concern: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateHealthConcern(Request $request, $id)
    {
        try {
            $healthConcern = \App\Models\PatientHealthConcern::findOrFail($id);
            
            $validatedData = $request->validate([
                'concern' => 'required|string|max:255',
                'date_reported' => 'required|date',
                'status' => 'required|string|in:Active,Resolved,Ongoing,Under observation'
            ]);

            $healthConcern->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Health concern updated successfully',
                'data' => $healthConcern
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating health concern: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteHealthConcern($id)
    {
        try {
            $healthConcern = \App\Models\PatientHealthConcern::findOrFail($id);
            $healthConcern->delete();

            return response()->json([
                'success' => true,
                'message' => 'Health concern deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting health concern: ' . $e->getMessage()
            ], 500);
        }
    }

    // Attachment CRUD
    public function getAttachment($id)
    {
        try {
            $attachment = \App\Models\PatientAttachment::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $attachment
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving attachment: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateAttachment(Request $request, $id)
    {
        try {
            $attachment = \App\Models\PatientAttachment::findOrFail($id);
            
            $validatedData = $request->validate([
                'file_type' => 'required|string|in:Medical Report,Lab Result,X-Ray,MRI,CT Scan,Prescription,Other',
                'description' => 'nullable|string|max:500',
                'file' => 'nullable|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:10240'
            ]);

            if ($request->hasFile('file')) {
                // Delete old file
                Storage::disk('public')->delete($attachment->filepath);
                
                // Store new file
                $file = $request->file('file');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filepath = $file->storeAs('patient_attachments', $filename, 'public');
                
                $validatedData['filename'] = $filename;
                $validatedData['filepath'] = $filepath;
                $validatedData['filesize'] = $file->getSize();
            }

            $attachment->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Attachment updated successfully',
                'data' => $attachment
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating attachment: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteAttachment($id)
    {
        try {
            $attachment = \App\Models\PatientAttachment::findOrFail($id);
            
            // Delete file from storage
            Storage::disk('public')->delete($attachment->filepath);
            
            // Delete record from database
            $attachment->delete();

            return response()->json([
                'success' => true,
                'message' => 'Attachment deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting attachment: ' . $e->getMessage()
            ], 500);
        }
    }
}
