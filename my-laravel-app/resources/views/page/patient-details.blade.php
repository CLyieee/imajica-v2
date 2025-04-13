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
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Personal Information</h5>
                                        <button class="btn btn-primary btn-sm edit-mode-toggle">Edit</button>
                                    </div>
                                    <div class="card-body">
                                        <form id="patient-info-form" method="POST" 
                                              action="{{ route('patient.update', ['id' => $patient->id]) }}" 
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            
                                            <!-- Patient Details -->
                                            <div class="patient-details mb-3">
                                                <div class="detail-item">
                                                    <span class="detail-label"><i class="ti tabler-user text-muted me-2"></i>Full Name:</span>
                                                    <div class="view-mode">
                                                        <span class="detail-value">{{ $patient->firstname }} {{ $patient->lastname }}</span>
                                                    </div>
                                                    <div class="edit-mode d-none">
                                                        <input type="text" class="form-control mb-2" name="firstname" value="{{ $patient->firstname }}" placeholder="First Name">
                                                        <input type="text" class="form-control" name="lastname" value="{{ $patient->lastname }}" placeholder="Last Name">
                                                    </div>
                                                </div>

                                                <div class="detail-item">
                                                    <span class="detail-label"><i class="ti tabler-mail text-muted me-2"></i>Email:</span>
                                                    <div class="view-mode">
                                                        <span class="detail-value">{{ $patient->email ?? 'N/A' }}</span>
                                                    </div>
                                                    <div class="edit-mode d-none">
                                                        <input type="email" class="form-control" name="email" value="{{ $patient->email }}" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="detail-item">
                                                    <span class="detail-label"><i class="ti tabler-phone text-muted me-2"></i>Contact:</span>
                                                    <div class="view-mode">
                                                        <span class="detail-value">{{ $patient->contact_number ?? 'N/A' }}</span>
                                                    </div>
                                                    <div class="edit-mode d-none">
                                                        <input type="text" class="form-control" name="contact_number" value="{{ $patient->contact_number }}" placeholder="Contact Number">
                                                    </div>
                                                </div>

                                                <div class="detail-item">
                                                    <span class="detail-label"><i class="ti tabler-map-pin text-muted me-2"></i>Address:</span>
                                                    <div class="view-mode">
                                                        <span class="detail-value">{{ $patient->address ?? 'N/A' }}</span>
                                                    </div>
                                                    <div class="edit-mode d-none">
                                                        <textarea class="form-control" name="address" rows="2" placeholder="Address">{{ $patient->address }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="detail-item">
                                                    <span class="detail-label"><i class="ti tabler-calendar text-muted me-2"></i>Birthdate:</span>
                                                    <div class="view-mode">
                                                        <span class="detail-value">{{ $patient->birthdate ?? 'N/A' }}</span>
                                                    </div>
                                                    <div class="edit-mode d-none">
                                                        <input type="date" class="form-control" name="birthdate" value="{{ $patient->birthdate }}">
                                                    </div>
                                                </div>

                                                <div class="detail-item">
                                                    <span class="detail-label"><i class="ti tabler-gender-binary text-muted me-2"></i>Gender:</span>
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

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const editButton = document.querySelector('.edit-mode-toggle');
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
                    
                    // Handle the form submission response
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        
                        fetch(form.action, {
                            method: 'POST',
                            body: new FormData(form)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Patient information updated successfully',
                                    icon: 'success'
                                }).then(() => {
                                    // Reload page to show updated information
                                    window.location.reload();
                                });
                            } else {
                                throw new Error(data.message || 'Error updating patient information');
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                title: 'Error!',
                                text: error.message,
                                icon: 'error'
                            });
                            // Reset button state
                            editButton.disabled = false;
                            editButton.textContent = 'Save';
                        });
                    });
                }
            });
        }
    });
});
</script>
</body>
</html>