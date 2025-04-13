@extends('layouts.app')

<!DOCTYPE html>
<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default" 
  data-assets-path="../../assets/"
  data-template="vertical-menu-template"
  data-bs-theme="light"
>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Patient Details - Imajica Booking System</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- Add this before </head> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

    <style>
    .avatar-wrapper {
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 50%;
        border: 3px solid #FFFFFF;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar-preview {
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 50%;
        overflow: hidden;
    }

    .avatar-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .avatar-placeholder {
        width: 100%;
        height: 100%;
        background: #E6EEFF;
        border-radius: 50%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar-circle {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .avatar-silhouette {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .avatar-head {
        position: absolute;
        width: 60px;
        height: 60px;
        background: #1B3F8F;
        border-radius: 50%;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
    }

    .avatar-body {
        position: absolute;
        width: 90px;
        height: 45px;
        background: #1B3F8F;
        border-radius: 45px 45px 0 0;
        bottom: 10%;
        left: 50%;
        transform: translateX(-50%);
    }

    .initials {
        color: #FFFFFF;
        font-size: 3rem;
        font-weight: 600;
        position: relative;
        z-index: 2;
        text-transform: uppercase;
    }

    .patient-info-card {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        height: 100%;
    }

    .nav-tabs .nav-link {
        color: #566a7f;
        border: none;
        border-bottom: 2px solid transparent;
        padding: 0.5rem 1rem;
    }

    .nav-tabs .nav-link.active {
        color: #696cff;
        background: none;
        border-bottom: 2px solid #696cff;
    }

    .text-muted.small {
        font-size: 0.875rem;
        display: block;
        margin-bottom: 0.25rem;
    }

    .edit-mode {
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #696cff;
        box-shadow: 0 0 0 0.2rem rgba(105, 108, 255, 0.25);
    }

    .view-mode p {
        padding: 0.375rem 0;
        margin-bottom: 0;
    }

    .edit-mode-toggle {
        min-width: 60px;
    }

    .avatar-edit {
        text-align: center;
        margin-top: 1rem;
    }

    .avatar-edit label {
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .avatar-edit label:hover {
        background-color: #696cff;
        color: white;
    }

    .patient-details {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 1rem;
    }

    .detail-item {
        display: flex;
        flex-direction: column;
        margin-bottom: 1rem;
        padding: 0.5rem;
        border-bottom: 1px solid #dee2e6;
    }

    .detail-label {
        color: #666;
        font-weight: 500;
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .detail-value {
        color: #333;
        padding: 0.375rem 0;
    }

    .edit-mode .form-control {
        margin-bottom: 0.5rem;
    }

    .edit-mode.d-none {
        display: none !important;
    }

    .view-mode.d-none {
        display: none !important;
    }

    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0,0,0,0.125);
    }

    .card-title {
        color: #566a7f;
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('components.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
              

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Back Button -->
                        <div class="mb-4">
                            <a href="{{ route('page.patient-list') }}" class="btn btn-primary">
                                <i class="ti tabler-arrow-left me-1"></i>Back to Patient List
                            </a>
                        </div>
                    
                        <!-- Patient Header -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="d-flex flex-column align-items-center gap-3">
                                            <div class="avatar-wrapper">
                                                <div class="avatar-preview">
                                                    @if($patient->image_path && Storage::disk('public')->exists($patient->image_path))
                                                        <img id="imagePreview" 
                                                             src="{{ asset('storage/'.$patient->image_path) }}" 
                                                             alt="Profile Preview"
                                                             class="rounded-circle"
                                                             style="width: 100%; height: 100%; object-fit: cover;">
                                                    @else
                                                        <div class="avatar-placeholder">
                                                            <div class="avatar-circle">
                                                                <div class="avatar-silhouette">
                                                                    <div class="avatar-head"></div>
                                                                    <div class="avatar-body"></div>
                                                                </div>
                                                                <span class="initials">
                                                                    {{ strtoupper(substr($patient->firstname ?? '', 0, 1) . substr($patient->lastname ?? '', 0, 1)) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="mb-0">{{ $patient->firstname }} {{ $patient->lastname }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Tabs -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" data-tab="profile">Patient Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#allergies" data-tab="allergies">Allergies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#medications" data-tab="medications">Medications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#health-concerns" data-tab="health-concerns">Health Concerns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#prescriptions" data-tab="prescriptions">Prescriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#attachments" data-tab="attachments">Attachments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- After the navigation tabs, add tab content containers -->
                        <div class="tab-content">
                            <!-- Patient Profile Tab Content -->
                            <div class="tab-pane fade show active" id="profile">
                                <div class="row">
                                    <!-- Left Side - Personal Information in ONE CARD -->
                                    <div class="col-md-7 mb-4">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Personal Information</h5>
                                                <button class="btn btn-primary edit-mode-toggle">Edit</button>
                                            </div>
                                            <div class="card-body">
                                                <form id="patient-info-form" method="POST" 
                                                      action="{{ route('patient.update', ['id' => $patient->id]) }}" 
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    
                                                    <!-- Full Name -->
                                                    <div class="mb-3 border-bottom pb-3">
                                                        <div class="detail-label"><i class="ti tabler-user text-muted me-2"></i>Full Name:</div>
                                                        <div class="view-mode">
                                                            <span class="detail-value">{{ $patient->firstname }} {{ $patient->lastname }}</span>
                                                        </div>
                                                        <div class="edit-mode d-none">
                                                            <input type="text" class="form-control mb-2" name="firstname" value="{{ $patient->firstname }}" placeholder="First Name">
                                                            <input type="text" class="form-control" name="lastname" value="{{ $patient->lastname }}" placeholder="Last Name">
                                                        </div>
                                                    </div>

                                                    <!-- Email -->
                                                    <div class="mb-3 border-bottom pb-3">
                                                        <div class="detail-label"><i class="ti tabler-mail text-muted me-2"></i>Email:</div>
                                                        <div class="view-mode">
                                                            <span class="detail-value">{{ $patient->email ?? 'N/A' }}</span>
                                                        </div>
                                                        <div class="edit-mode d-none">
                                                            <input type="email" class="form-control" name="email" value="{{ $patient->email }}" placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <!-- Contact -->
                                                    <div class="mb-3 border-bottom pb-3">
                                                        <div class="detail-label"><i class="ti tabler-phone text-muted me-2"></i>Contact:</div>
                                                        <div class="view-mode">
                                                            <span class="detail-value">{{ $patient->contact_number ?? 'N/A' }}</span>
                                                        </div>
                                                        <div class="edit-mode d-none">
                                                            <input type="text" class="form-control" name="contact_number" value="{{ $patient->contact_number }}" placeholder="Contact Number">
                                                        </div>
                                                    </div>

                                                    <!-- Address -->
                                                    <div class="mb-3 border-bottom pb-3">
                                                        <div class="detail-label"><i class="ti tabler-map-pin text-muted me-2"></i>Address:</div>
                                                        <div class="view-mode">
                                                            <span class="detail-value">{{ $patient->address ?? 'N/A' }}</span>
                                                        </div>
                                                        <div class="edit-mode d-none">
                                                            <textarea class="form-control" name="address" rows="2" placeholder="Address">{{ $patient->address }}</textarea>
                                                        </div>
                                                    </div>

                                                    <!-- Birthdate -->
                                                    <div class="mb-3 border-bottom pb-3">
                                                        <div class="detail-label"><i class="ti tabler-calendar text-muted me-2"></i>Birthdate:</div>
                                                        <div class="view-mode">
                                                            <span class="detail-value">{{ $patient->birthdate ?? 'N/A' }}</span>
                                                        </div>
                                                        <div class="edit-mode d-none">
                                                            <input type="date" class="form-control" name="birthdate" value="{{ $patient->birthdate }}">
                                                        </div>
                                                    </div>

                                                    <!-- Gender -->
                                                    <div class="mb-3">
                                                        <div class="detail-label"><i class="ti tabler-gender-binary text-muted me-2"></i>Gender:</div>
                                                        <div class="view-mode">
                                                            <span class="detail-value">{{ $patient->gender ?? 'N/A' }}</span>
                                                        </div>
                                                        <div class="edit-mode d-none">
                                                            <select class="form-control" name="gender">
                                                                <option value="">Select Gender</option>
                                                                <option value="Male" {{ $patient->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                                <option value="Female" {{ $patient->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                                <option value="Other" {{ $patient->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Side Cards -->
                                    <div class="col-md-5">
                                        <!-- Appointments Section -->
                                        <div class="card mb-4">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="card-title mb-0">Appointment</h5>
                                                    <small class="text-muted">Today</small>
                                                </div>
                                                <button class="btn btn-primary btn-sm">Add appointment</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center py-3">
                                                    <img src="../../assets/img/icons/unicons/calendar.png" alt="No Appointments" class="mb-2" style="width: 80px;">
                                                    <p class="text-muted mb-0">No appointments to show today</p>
                                                    <a href="#" class="text-primary">See all</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Medical Records Section -->
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Medical Records</h5>
                                                <button class="btn btn-primary btn-sm">Add Record</button>
                                            </div>
                                            <div class="card-body">
                                                @if(isset($medicalRecords) && count($medicalRecords) > 0)
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Description</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($medicalRecords as $record)
                                                                <tr>
                                                                    <td>{{ $record->date }}</td>
                                                                    <td>{{ $record->description }}</td>
                                                                    <td>
                                                                        <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                            <i class="ti ti-download"></i>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                            <i class="ti ti-eye"></i>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                            <i class="ti ti-edit"></i>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-sm btn-text-danger rounded-pill delete-record" data-id="{{ $record->id ?? '' }}">
                                                                            <i class="ti ti-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @else
                                                    <div class="text-center py-3">
                                                        <img src="../../assets/img/icons/no-records.png" alt="No Records" class="mb-2" style="width: 80px;">
                                                        <p class="text-muted">No medical records available</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Allergies Tab Content -->
                            <div class="tab-pane fade" id="allergies">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Allergies</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addAllergyModal">Add Allergy</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Allergen</th>
                                                                <th>Reaction</th>
                                                                <th>Severity</th>
                                                                <th>Date Identified</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" class="text-center">No allergies recorded</td>
                                                            </tr>
                                                            <!-- Example row with actions that will show when data exists -->
                                                            <tr class="d-none">
                                                                <td>Penicillin</td>
                                                                <td>Rash</td>
                                                                <td>Moderate</td>
                                                                <td>2023-01-01</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-eye"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-edit"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-danger rounded-pill delete-record">
                                                                        <i class="ti ti-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Medications Tab Content -->
                            <div class="tab-pane fade" id="medications">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Current Medications</h5>
                                                <button class="btn btn-primary btn-sm">Add Medication</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Medication Name</th>
                                                                <th>Dosage</th>
                                                                <th>Frequency</th>
                                                                <th>Start Date</th>
                                                                <th>End Date</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="6" class="text-center">No medications recorded</td>
                                                            </tr>
                                                            <!-- Example row with actions that will show when data exists -->
                                                            <tr class="d-none">
                                                                <td>Lisinopril</td>
                                                                <td>10mg</td>
                                                                <td>Once daily</td>
                                                                <td>2023-01-15</td>
                                                                <td>2023-07-15</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-eye"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-edit"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-danger rounded-pill delete-record">
                                                                        <i class="ti ti-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Health Concerns Tab Content -->
                            <div class="tab-pane fade" id="health-concerns">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Health Concerns</h5>
                                                <button class="btn btn-primary btn-sm">Add Health Concern</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Concern</th>
                                                                <th>Date Reported</th>
                                                                <th>Status</th>
                                                                <th>Notes</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" class="text-center">No health concerns recorded</td>
                                                            </tr>
                                                            <!-- Example row with actions that will show when data exists -->
                                                            <tr class="d-none">
                                                                <td>Hypertension</td>
                                                                <td>2023-02-10</td>
                                                                <td>Active</td>
                                                                <td>Being monitored</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-eye"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-edit"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-danger rounded-pill delete-record">
                                                                        <i class="ti ti-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Prescriptions Tab Content -->
                            <div class="tab-pane fade" id="prescriptions">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Prescriptions</h5>
                                                <button class="btn btn-primary btn-sm">Add Prescription</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Prescription #</th>
                                                                <th>Date</th>
                                                                <th>Doctor</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" class="text-center">No prescriptions recorded</td>
                                                            </tr>
                                                            <!-- Example row with actions that will show when data exists -->
                                                            <tr class="d-none">
                                                                <td>RX2023001</td>
                                                                <td>2023-03-15</td>
                                                                <td>Dr. Smith</td>
                                                                <td>Filled</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-eye"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-edit"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-danger rounded-pill delete-record">
                                                                        <i class="ti ti-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Attachments Tab Content -->
                            <div class="tab-pane fade" id="attachments">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Attachments</h5>
                                                <button class="btn btn-primary btn-sm">Upload File</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>File Name</th>
                                                                <th>Type</th>
                                                                <th>Date Uploaded</th>
                                                                <th>Size</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="5" class="text-center">No attachments found</td>
                                                            </tr>
                                                            <!-- Example row with actions that will show when data exists -->
                                                            <tr class="d-none">
                                                                <td>MRI_Results.pdf</td>
                                                                <td>PDF</td>
                                                                <td>2023-04-20</td>
                                                                <td>2.4 MB</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-download"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-eye"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-secondary rounded-pill">
                                                                        <i class="ti ti-edit"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-sm btn-text-danger rounded-pill delete-record">
                                                                        <i class="ti ti-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    @include('components.footer')
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- MODALS -->
    <!-- Add Allergy Modal -->
    <div class="modal fade" id="addAllergyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Allergy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="allergen" class="form-label">Allergen</label>
                                <input type="text" id="allergen" name="allergen" class="form-control" placeholder="e.g., Penicillin, Peanuts" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="reaction" class="form-label">Reaction</label>
                                <input type="text" id="reaction" name="reaction" class="form-control" placeholder="e.g., Rash, Swelling" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="severity" class="form-label">Severity</label>
                                <select id="severity" name="severity" class="form-select" required>
                                    <option value="">Select severity</option>
                                    <option value="Mild">Mild</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="Severe">Severe</option>
                                    <option value="Life-threatening">Life-threatening</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="date_identified" class="form-label">Date Identified</label>
                                <input type="date" id="date_identified" name="date_identified" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="notes" class="form-label">Additional Notes</label>
                                <textarea id="notes" name="notes" class="form-control" rows="3" placeholder="Any additional information"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Medication Modal -->
    <div class="modal fade" id="addMedicationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Medication</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="medication_name" class="form-label">Medication Name</label>
                                <input type="text" id="medication_name" name="medication_name" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="dosage" class="form-label">Dosage</label>
                                <input type="text" id="dosage" name="dosage" class="form-control" placeholder="e.g., 10mg" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="frequency" class="form-label">Frequency</label>
                                <input type="text" id="frequency" name="frequency" class="form-control" placeholder="e.g., Once daily" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" id="start_date" name="start_date" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" id="end_date" name="end_date" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="medication_notes" class="form-label">Notes</label>
                                <textarea id="medication_notes" name="notes" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Health Concern Modal -->
    <div class="modal fade" id="addHealthConcernModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Health Concern</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="concern" class="form-label">Concern</label>
                                <input type="text" id="concern" name="concern" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="date_reported" class="form-label">Date Reported</label>
                                <input type="date" id="date_reported" name="date_reported" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="">Select status</option>
                                    <option value="Active">Active</option>
                                    <option value="Resolved">Resolved</option>
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Under observation">Under observation</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="concern_notes" class="form-label">Notes</label>
                                <textarea id="concern_notes" name="notes" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Prescription Modal -->
    <div class="modal fade" id="addPrescriptionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Prescription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="prescription_number" class="form-label">Prescription #</label>
                                <input type="text" id="prescription_number" name="prescription_number" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="prescription_date" class="form-label">Date</label>
                                <input type="date" id="prescription_date" name="date" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="doctor" class="form-label">Doctor</label>
                                <input type="text" id="doctor" name="doctor" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="prescription_status" class="form-label">Status</label>
                                <select id="prescription_status" name="status" class="form-select" required>
                                    <option value="">Select status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Filled">Filled</option>
                                    <option value="Refill required">Refill required</option>
                                    <option value="Expired">Expired</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="prescription_notes" class="form-label">Notes</label>
                                <textarea id="prescription_notes" name="notes" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Attachment Modal -->
    <div class="modal fade" id="addAttachmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="file" class="form-label">File</label>
                                <input type="file" id="file" name="file" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="file_type" class="form-label">Type</label>
                                <select id="file_type" name="file_type" class="form-select" required>
                                    <option value="">Select file type</option>
                                    <option value="Medical Report">Medical Report</option>
                                    <option value="Lab Result">Lab Result</option>
                                    <option value="X-Ray">X-Ray</option>
                                    <option value="MRI">MRI</option>
                                    <option value="CT Scan">CT Scan</option>
                                    <option value="Prescription">Prescription</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Appointment Modal -->
    <div class="modal fade" id="addAppointmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="appointment_date" class="form-label">Date</label>
                                <input type="date" id="appointment_date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="appointment_time" class="form-label">Time</label>
                                <input type="time" id="appointment_time" name="time" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="purpose" class="form-label">Purpose</label>
                                <input type="text" id="purpose" name="purpose" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="doctor_id" class="form-label">Doctor</label>
                                <select id="doctor_id" name="doctor_id" class="form-select" required>
                                    <option value="">Select doctor</option>
                                    <!-- Add options dynamically from database -->
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="appointment_notes" class="form-label">Notes</label>
                                <textarea id="appointment_notes" name="notes" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Medical Record Modal -->
    <div class="modal fade" id="addMedicalRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Medical Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="record_date" class="form-label">Date</label>
                                <input type="date" id="record_date" name="date" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="record_description" class="form-label">Description</label>
                                <input type="text" id="record_description" name="description" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="record_file" class="form-label">File (optional)</label>
                                <input type="file" id="record_file" name="file" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="record_notes" class="form-label">Notes</label>
                                <textarea id="record_notes" name="notes" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MODALS -->

    <!-- Core JS -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching functionality
    const tabLinks = document.querySelectorAll('.nav-tabs .nav-link');
    const tabContents = document.querySelectorAll('.tab-pane');
    
    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const tabId = this.getAttribute('href').substring(1);
            
            // Remove active class from all tabs
            tabLinks.forEach(tab => tab.classList.remove('active'));
            
            // Hide all tab contents
            tabContents.forEach(content => {
                content.classList.remove('show', 'active');
            });
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Show the corresponding tab content
            const activeContent = document.getElementById(tabId);
            activeContent.classList.add('show', 'active');
        });
    });
    
    // Existing edit mode code...
    const editButton = document.querySelector('.edit-mode-toggle');
    if (editButton) {
        const form = document.getElementById('patient-info-form');
        const viewModes = document.querySelectorAll('.view-mode');
        const editModes = document.querySelectorAll('.edit-mode');

        // Initial state
        let isEditing = false;

        editButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (!isEditing) {
                // Switch to Edit mode
                isEditing = true;
                editButton.textContent = 'Save';
                editButton.classList.replace('btn-primary', 'btn-success');
                
                // Show edit fields, hide view fields
                viewModes.forEach(el => el.classList.add('d-none'));
                editModes.forEach(el => el.classList.remove('d-none'));

            } else {
                // Save changes
                Swal.fire({
                    title: 'Save Changes?',
                    text: 'Do you want to save these changes?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the form
                        form.submit();
                        
                        // Show loading state
                        editButton.disabled = true;
                        editButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...';
                    }
                });
            }
        });
    }

    // Delete record confirmation
    document.querySelectorAll('.delete-record').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const recordId = this.getAttribute('data-id');
            
            Swal.fire({
                title: 'Delete Record?',
                text: 'This action cannot be undone. Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Here you would typically make an AJAX call to delete the record
                    // For now, just show a success message
                    Swal.fire(
                        'Deleted!',
                        'The record has been deleted.',
                        'success'
                    );
                }
            });
        });
    });

    // Add modal triggers for all remaining "Add" buttons (not needed for Allergies anymore)
    // Medications
    const medicationsSection = document.getElementById('medications');
    if (medicationsSection) {
        const addMedicationBtn = medicationsSection.querySelector('.card-header button.btn-primary');
        if (addMedicationBtn) {
            addMedicationBtn.setAttribute('data-bs-toggle', 'modal');
            addMedicationBtn.setAttribute('data-bs-target', '#addMedicationModal');
        }
    }
    
    // Health Concerns
    const healthConcernsSection = document.getElementById('health-concerns');
    if (healthConcernsSection) {
        const addHealthConcernBtn = healthConcernsSection.querySelector('.card-header button.btn-primary');
        if (addHealthConcernBtn) {
            addHealthConcernBtn.setAttribute('data-bs-toggle', 'modal');
            addHealthConcernBtn.setAttribute('data-bs-target', '#addHealthConcernModal');
        }
    }
    
    // Prescriptions
    const prescriptionsSection = document.getElementById('prescriptions');
    if (prescriptionsSection) {
        const addPrescriptionBtn = prescriptionsSection.querySelector('.card-header button.btn-primary');
        if (addPrescriptionBtn) {
            addPrescriptionBtn.setAttribute('data-bs-toggle', 'modal');
            addPrescriptionBtn.setAttribute('data-bs-target', '#addPrescriptionModal');
        }
    }
    
    // Attachments
    const attachmentsSection = document.getElementById('attachments');
    if (attachmentsSection) {
        const addAttachmentBtn = attachmentsSection.querySelector('.card-header button.btn-primary');
        if (addAttachmentBtn) {
            addAttachmentBtn.setAttribute('data-bs-toggle', 'modal');
            addAttachmentBtn.setAttribute('data-bs-target', '#addAttachmentModal');
        }
    }
    
    // Appointment
    const appointmentBtn = document.querySelector('.card-header button.btn-primary.btn-sm');
    if (appointmentBtn && appointmentBtn.textContent.includes('Add appointment')) {
        appointmentBtn.setAttribute('data-bs-toggle', 'modal');
        appointmentBtn.setAttribute('data-bs-target', '#addAppointmentModal');
    }
    
    // Medical Record
    const medicalRecordBtn = document.querySelector('.card-header button.btn-primary.btn-sm:nth-of-type(2)');
    if (medicalRecordBtn && medicalRecordBtn.textContent.includes('Add Record')) {
        medicalRecordBtn.setAttribute('data-bs-toggle', 'modal');
        medicalRecordBtn.setAttribute('data-bs-target', '#addMedicalRecordModal');
    }
});
</script>
</body>
</html>