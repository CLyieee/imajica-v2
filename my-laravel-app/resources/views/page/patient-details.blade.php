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
                    
                        <!-- Patient Header -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar-wrapper">
                                        @if($patient->image_path)
                                            <img src="{{ asset('storage/'.$patient->image_path) }}" alt="Avatar" class="rounded-circle">
                                        @else
                                            <div class="avatar-placeholder">
                                                <span class="initials">
                                                    {{ strtoupper(substr($patient->firstname ?? '', 0, 1) . substr($patient->lastname ?? '', 0, 1)) }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <h3 class="mb-0">{{ $patient->firstname }} {{ $patient->lastname }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Tabs -->
                        <div class="row mt-4">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Patient Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Allergies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Medications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Health Concerns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Prescriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Attachments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Main Content Cards -->
                        <div class="row">
                            <!-- Personal Information -->
                            <div class="col-md-7 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Personal Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="fw-bold">Address:</label>
                                                <p class="mb-3">Lopez, Quezon, Philippines</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="fw-bold">Contact Number:</label>
                                                <p class="mb-3">0932232232</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="fw-bold">Date of Birth:</label>
                                                <p class="mb-3">Aug. 2, 1991</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="fw-bold">Gender:</label>
                                                <p class="mb-3">Female</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="fw-bold">Date Registered:</label>
                                                <p class="mb-3">Dec. 14, 2024</p>
                                            </div>

                                            <!-- Emergency Contact -->
                                            <div class="col-12">
                                                <h6 class="fw-bold mt-2 mb-3">EMERGENCY CONTACT</h6>
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <label class="fw-bold">Name:</label>
                                                        <p class="mb-3">{{ $patient->emergency_contact_name ?? '-' }}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="fw-bold">Relationship:</label>
                                                        <p class="mb-3">{{ $patient->emergency_contact_relationship ?? '-' }}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="fw-bold">Contact No:</label>
                                                        <p class="mb-3">{{ $patient->emergency_contact_number ?? '-' }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Referral -->
                                            <div class="col-12">
                                                <h6 class="fw-bold mt-2 mb-3">REFERRAL</h6>
                                                <p class="mb-0">{{ $patient->referral ?? '-' }}</p>
                                            </div>
                                        </div>
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

    <!-- Core JS -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>
</body>
</html>