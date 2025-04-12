@extends('layouts.app')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Patient Details</h5>
                    <a href="{{ route('page.patient-list') }}" class="btn btn-secondary">
                        <i class="ti tabler-arrow-left me-1"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Patient Avatar -->
                        <div class="col-12 text-center mb-4">
                            <div class="avatar-wrapper mx-auto">
                                @if($patient->image_path)
                                    <img src="{{ asset('storage/'.$patient->image_path) }}" alt="Avatar" class="rounded-circle avatar-img">
                                @else
                                    <div class="avatar-placeholder">
                                        <span class="initials">
                                            {{ strtoupper(substr($patient->firstname ?? '', 0, 1) . substr($patient->lastname ?? '', 0, 1)) }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <h3 class="mt-3">{{ $patient->firstname }} {{ $patient->lastname }}</h3>
                        </div>

                        <!-- Patient Information -->
                        <div class="col-md-6">
                            <div class="patient-info-card">
                                <h5 class="mb-3">Personal Information</h5>
                                <div class="mb-3">
                                    <label class="fw-bold">Email:</label>
                                    <p>{{ $patient->email ?? 'Not provided' }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Contact Number:</label>
                                    <p>{{ $patient->contact_number ?? 'Not provided' }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Gender:</label>
                                    <p>{{ $patient->gender ?? 'Not provided' }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Birthdate:</label>
                                    <p>{{ $patient->birthdate ?? 'Not provided' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Medical Information -->
                        <div class="col-md-6">
                            <div class="patient-info-card">
                                <h5 class="mb-3">Medical Information</h5>
                                @if($patient->current_medications)
                                <div class="mb-3">
                                    <label class="fw-bold">Current Medications:</label>
                                    <p>{{ $patient->current_medications }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.avatar-wrapper {
    width: 150px;
    height: 150px;
    overflow: hidden;
    border-radius: 50%;
    border: 3px solid #FFFFFF;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.patient-info-card {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 1.5rem;
    height: 100%;
}

.avatar-placeholder {
    width: 100%;
    height: 100%;
    background: #E6EEFF;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.initials {
    font-size: 3rem;
    font-weight: 600;
    color: #1B3F8F;
}
</style>