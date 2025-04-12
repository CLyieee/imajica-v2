@extends('layouts.app')
@extends('layouts.layout-collapsed-menu-dark')
@extends('layouts.layout-container-dark')
@extends('layouts.layout-content-navbar-and-sidebar-dark')
@extends('layouts.layout-without-navbar-dark')
@extends('layouts.layout-content-navbar-dark')
@extends('layouts.layout-fluid-dark')
@extends('layouts.layout-without-menu-dark')

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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Imajica Booking System</title>

    <meta name="description" content="Imajica Booking System" />

    <meta name="keywords" content="Imajica Booking System" />
    <meta property="og:title" content="Imajica Booking System" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="Imajica Booking System" />
    <meta
      property="og:image"
      content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png"
    />
    <meta property="og:description" content="Imajica Booking System." />
    <meta property="og:site_name" content="Pixinvent" />
    <link rel="canonical" href="Imajica Booking System" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset(path:'logo/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/node-waves/node-waves.css"
    />

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/pickr/pickr-themes.css"
    />

    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    />

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/select2/select2.css"
    />

    <!-- Page CSS -->

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/flatpickr/flatpickr.css"
    />
    <!-- Row Group CSS -->
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css"
    />
    <!-- Form Validation -->
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/%40form-validation/form-validation.css"
    />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('components.sidebar')
        <!-- / Menu -->

        <div class="menu-mobile-toggler d-xl-none rounded-1">
          <a
            href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1"
          >
            <i class="ti tabler-menu icon-base"></i>
            <i class="ti tabler-chevron-right icon-base"></i>
          </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">


          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <!-- Branch Filter -->
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="card-title mb-0">Staff List</h5>
                  <a href="{{ route('page.new-staff') }}" class="btn btn-primary">
                    <i class="ti tabler-plus me-1"></i> Add New Staff
                  </a>
                </div>


                <!-- Success/Error Messages -->
                <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table class="table table-striped" id="staffTable">
                    <thead class="table-light">
                      <tr>
                        <th class="text-center">Profile</th>
                        <th class="text-center">Staff Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Position</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Contact Number</th>
                        <th class="text-center">Branch</th>
                        <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($staffs as $staff)
                      <tr>
                        <td>
                          <div class="avatar">
                            @if($staff->image_path)
                              <img src="{{ asset('storage/'.$staff->image_path) }}" alt="Avatar" class="rounded-circle">
                            @else
                              <span class="avatar-initial rounded-circle bg-label-success">
                                {{ strtoupper(substr($staff->firstname ?? '', 0, 1) . substr($staff->lastname ?? '', 0, 1)) }}
                              </span>
                            @endif
                          </div>
                        </td>
                        <td>{{ $staff->firstname }} {{ $staff->lastname }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->position ? $staff->position->position_name : $staff->position_id }}</td>
                        <td>{{ $staff->department ? $staff->department->department_name : $staff->department_code }}</td>
                        <td>{{ $staff->contact_number }}</td>
                        <td>
                          @if($staff->branch_code)
                            {{ $staff->branch ? $staff->branch->branch_name : $staff->branch_code }}
                          @else
                            N/A
                          @endif
                        </td>
                        <td>
                          <div class="d-inline-block">
                            <button type="button" class="btn btn-sm btn-success view-staff"
                              data-bs-toggle="modal"
                              data-bs-target="#staffModal"
                              data-id="{{ $staff->id }}"
                              data-name="{{ $staff->firstname }} {{ $staff->lastname }}"
                              data-email="{{ $staff->email }}"
                              data-contact="{{ $staff->contact_number }}"
                              data-position="{{ $staff->position }}"
                              data-department="{{ $staff->department }}"
                              data-join-date="{{ $staff->join_date }}"
                              data-employment-type="{{ $staff->employment_type }}"
                              data-branch="{{ $staff->branch_code }}"
                              data-address="{{ $staff->address }}"
                              data-emergency-contact="{{ $staff->emergency_contact_name }}"
                              data-emergency-number="{{ $staff->emergency_contact_number }}"
                              @if($staff->image_path) 
                                data-profile-image="{{ asset('storage/'.$staff->image_path) }}" 
                              @endif>
                              <i class="ti tabler-eye me-1"></i> View
                            </button>
                            <button type="button" class="btn btn-sm btn-info edit-staff"
                              data-bs-toggle="modal"
                              data-bs-target="#editStaffModal"
                              data-id="{{ $staff->id }}">
                              <i class="ti tabler-edit me-1"></i> Edit
                            </button>
                            <button type="button" class="btn btn-sm btn-danger delete-staff" 
                              data-id="{{ $staff->id }}"
                              data-name="{{ $staff->firstname }} {{ $staff->lastname }}">
                              <i class="ti tabler-trash me-1"></i> Delete
                            </button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @if(count($staffs) == 0)
                      <tr>
                        <td colspan="8" class="text-center">No staff found</td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
                  <br />
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    © <script>document.write(new Date().getFullYear());</script>
                    Developed by <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>

          </div>
          <!-- Content wrapper -->
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
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>

    <script src="../../assets/vendor/libs/popper/popper.js"></script>

    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/%40algolia/autocomplete-js.js"></script>

    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>

    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/cleave-zen/cleave-zen.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->

    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Form Validation -->
    <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>
    <script>
      $(document).ready(function () {
        $("#servicesTable").DataTable();
      });
    </script>


    <!-- Staff Modal -->
    <div class="modal fade" id="staffModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0">
          <div class="modal-header bg-primary text-white border-0">
            <h5 class="modal-title text-white fs-4">
              <i class="ti tabler-user me-2"></i>
              <span id="modalStaffName" class="text-white"></span>
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body p-4">
            <div class="row g-3">
              <!-- Profile and Personal Info Column -->
              <div class="col-md-6">
                <div class="patient-detail-card h-100">
                  <!-- Profile Section -->
                  <div class="text-center mb-3">
                    <div class="patient-profile-wrapper mx-auto">
                      <img
                        src="../../assets/img/avatars/default-avatar.png"
                        alt="Staff Profile"
                        class="patient-profile-image"
                        id="modalProfileImage"
                      />
                    </div>
                    <h5 class="mt-3 mb-1" id="modalStaffNameProfile"></h5>
                    <p class="text-muted mb-0" id="modalPosition"></p>
                  </div>
                  <!-- Personal Info -->
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-phone"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Contact</small>
                      <span id="modalContact" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-mail"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Email</small>
                      <span id="modalEmail" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-briefcase"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Department</small>
                      <span id="modalDepartment" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-building"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Branch</small>
                      <span id="modalBranch" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item mb-0">
                    <div class="patient-info-icon">
                      <i class="ti tabler-map-pin"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Address</small>
                      <span id="modalAddress" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Additional Information Column -->
              <div class="col-md-6">
                <div class="patient-detail-card h-100">
                  <h6 class="text-primary mb-3">Employment Information</h6>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-calendar"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Join Date</small>
                      <span id="modalJoinDate" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-id"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Employment Type</small>
                      <span id="modalEmploymentType" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item mb-0">
                    <div class="patient-info-icon">
                      <i class="ti tabler-emergency"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Emergency Contact</small>
                      <span id="modalEmergencyContact" class="fw-semibold"></span>
                      <small id="modalEmergencyNumber" class="text-muted d-block mt-1"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="editStaffLink" class="btn btn-info" data-bs-dismiss="modal">
              <i class="ti tabler-edit me-1"></i> Edit Staff
            </button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Staff Modal -->
    <div class="modal fade" id="editStaffModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <form id="editStaffForm" method="POST" action="{{ route('staff.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="staff_id" id="edit_staff_id">
            
            <div class="modal-header bg-info">
              <h5 class="modal-title text-white">
                <i class="ti tabler-edit me-1"></i> Edit Staff
              </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <div class="row g-3">
                <!-- Personal Information Section -->
                <div class="col-12">
                  <h6 class="fw-semibold">Personal Information</h6>
                  <hr class="mt-0">
                </div>
                
                <!-- Profile Image -->
                <div class="col-12 text-center mb-3">
                  <div class="patient-profile-wrapper mx-auto position-relative">
                    <img id="edit_preview_image" src="../../assets/img/avatars/default-avatar.png" 
                         class="patient-profile-image" alt="Staff Profile">
                    <div class="profile-image-overlay">
                      <label for="edit_image_path" class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2">
                        <i class="ti tabler-camera"></i>
                      </label>
                      <input type="file" name="image_path" id="edit_image_path" class="d-none" accept="image/*">
                    </div>
                  </div>
                </div>
                
                <!-- Name Fields -->
                <div class="col-md-6">
                  <label for="edit_firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                </div>
                
                <!-- Contact Fields -->
                <div class="col-md-6">
                  <label for="edit_email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="edit_email" name="email" required>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_contact_number" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" id="edit_contact_number" name="contact_number" required>
                </div>
                
                <!-- Employment Details -->
                <div class="col-md-6">
                  <label for="edit_position" class="form-label">Position</label>
                  <input type="text" class="form-control" id="edit_position" name="position" required>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_department" class="form-label">Department</label>
                  <input type="text" class="form-control" id="edit_department" name="department" required>
                </div>

                <div class="col-md-6">
                  <label for="edit_join_date" class="form-label">Join Date</label>
                  <input type="date" class="form-control" id="edit_join_date" name="join_date" required>
                </div>

                <div class="col-md-6">
                  <label for="edit_employment_type" class="form-label">Employment Type</label>
                  <select class="form-select" id="edit_employment_type" name="employment_type" required>
                    <option value="">Select Type</option>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                    <option value="Freelance">Freelance</option>
                  </select>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_branch_code" class="form-label">Branch</label>
                  <select class="form-select" id="edit_branch_code" name="branch_code" required>
                    <option value="">Select Branch</option>
                    @foreach($branches as $branch)
                      <option value="{{ $branch->branch_code }}">{{ $branch->branch_name }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="col-md-6"></div>
                
                <div class="col-12">
                  <label for="edit_address" class="form-label">Address</label>
                  <textarea class="form-control" id="edit_address" name="address" rows="2" required></textarea>
                </div>
                
                <!-- Emergency Contact Section -->
                <div class="col-12 mt-3">
                  <h6 class="fw-semibold">Emergency Contact</h6>
                  <hr class="mt-0">
                </div>
                
                <div class="col-md-6">
                  <label for="edit_emergency_contact_name" class="form-label">Contact Name</label>
                  <input type="text" class="form-control" id="edit_emergency_contact_name" name="emergency_contact_name">
                </div>
                
                <div class="col-md-6">
                  <label for="edit_emergency_contact_number" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" id="edit_emergency_contact_number" name="emergency_contact_number">
                </div>
              </div>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-info">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteStaffModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title text-white">Confirm Delete</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete <span id="deleteStaffName" class="fw-bold"></span>? This action cannot be undone.</p>
          </div>
          <div class="modal-footer">
            <form id="deleteStaffForm" action="" method="POST">
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Clean modal styles -->
    <style>
      .avatar {
        width: 38px;
        height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }
      
      .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      
      .avatar-initial {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 500;
        font-size: 0.875rem;
      }
      
      .rounded-circle {
        border-radius: 50% !important;
      }
      
      .modal-header {
        background: linear-gradient(135deg, #0a3622 0%, #1a5c3c 100%) !important;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
      }
      
      .patient-profile-wrapper {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #0a3622;
        box-shadow: 0 4px 15px rgba(10, 54, 34, 0.2);
        margin: 0 auto 1rem;
      }
      
      .patient-profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      
      .patient-detail-card {
        background: #fff;
        border-radius: 0.75rem;
        padding: 1.25rem;
        height: 100%;
        box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
      }
      
      .patient-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
      }
      
      .patient-info-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e7efe9;
        color: #0a3622;
        border-radius: 0.5rem;
        margin-right: 0.75rem;
      }
      
      /* Profile image edit overlay */
      .profile-image-overlay {
        position: relative;
        width: 100%;
        height: 100%;
      }
      
      .patient-profile-wrapper:hover .patient-profile-image {
        opacity: 0.7;
      }
      
      /* Form styling */
      .modal-lg {
        max-width: 900px;
      }
      
      .form-label {
        font-weight: 500;
      }
      
      .modal-body hr {
        opacity: 0.1;
      }
    </style>

    <!-- JavaScript for staff modals -->
    <script>
      // Create initials avatar when no image is available
      function createInitialsAvatar(name) {
        if (!name) return '';
        
        const canvas = document.createElement("canvas");
        const context = canvas.getContext("2d");
        canvas.width = 120;
        canvas.height = 120;

        context.fillStyle = "#0a3622";

        context.beginPath();
        context.arc(60, 60, 60, 0, Math.PI * 2);
        context.fill();

        const initials = name
          .split(" ")
          .map(word => word[0])
          .join("")
          .toUpperCase();

        context.font = "bold 48px Arial";
        context.fillStyle = "#FFFFFF";
        context.textAlign = "center";
        context.textBaseline = "middle";
        context.fillText(initials, 60, 60);

        return canvas.toDataURL();
      }

      // Handle staff actions
      document.addEventListener("DOMContentLoaded", function() {
        // Image preview for edit form
        document.getElementById('edit_image_path').addEventListener('change', function(e) {
          if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
              document.getElementById('edit_preview_image').src = e.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
          }
        });

        // View staff details
        const viewButtons = document.querySelectorAll(".view-staff");
        viewButtons.forEach(button => {
          button.addEventListener("click", function() {
            const data = this.dataset;
            
            // Store staff ID for edit button
            document.getElementById("editStaffLink").setAttribute('data-id', data.id);
            
            // Set profile image
            const profileImage = document.getElementById("modalProfileImage");
            profileImage.src = data.profileImage || createInitialsAvatar(data.name);
            
            // Basic information
            document.getElementById("modalStaffName").textContent = data.name || '';
            document.getElementById("modalStaffNameProfile").textContent = data.name || '';
            document.getElementById("modalPosition").textContent = data.position || '';
            document.getElementById("modalContact").textContent = data.contact || 'Not provided';
            document.getElementById("modalEmail").textContent = data.email || 'Not provided';
            document.getElementById("modalDepartment").textContent = data.department || 'Not specified';
            document.getElementById("modalAddress").textContent = data.address || 'Not provided';
            
            // Employment information
            document.getElementById("modalJoinDate").textContent = data.joinDate || 'Not provided';
            document.getElementById("modalEmploymentType").textContent = data.employmentType || 'Not specified';
            document.getElementById("modalBranch").textContent = getBranchName(data.branch) || 'Not assigned';
            
            // Emergency contact
            document.getElementById("modalEmergencyContact").textContent = data.emergencyContact || 'Not provided';
            document.getElementById("modalEmergencyNumber").textContent = data.emergencyNumber || '';
          });
        });
        
        // Get branch name from branch code
        function getBranchName(branchCode) {
          const branchSelect = document.getElementById('edit_branch_code');
          for (let i = 0; i < branchSelect.options.length; i++) {
            if (branchSelect.options[i].value === branchCode) {
              return branchSelect.options[i].text;
            }
          }
          return null;
        }
        
        // Edit staff button click
        document.getElementById('editStaffLink').addEventListener('click', function() {
          const staffId = this.getAttribute('data-id');
          // Open the edit modal programmatically after the view modal is dismissed
          $('#staffModal').on('hidden.bs.modal', function () {
            // Populate the edit form
            populateEditForm(staffId);
            // Show the edit modal
            $('#editStaffModal').modal('show');
            // Remove the event to prevent multiple bindings
            $('#staffModal').off('hidden.bs.modal');
          });
        });
        
        // Direct edit button click
        const editButtons = document.querySelectorAll(".edit-staff");
        editButtons.forEach(button => {
          button.addEventListener("click", function() {
            const staffId = this.dataset.id;
            populateEditForm(staffId);
          });
        });

        // Function to populate edit form with staff data
        function populateEditForm(staffId) {
          // Find the view button for this staff to get data
          const viewButton = document.querySelector(`.view-staff[data-id="${staffId}"]`);
          if (!viewButton) return;
          
          const data = viewButton.dataset;
          
          // Set form action and staff ID
          document.getElementById('edit_staff_id').value = staffId;
          
          // Set image preview
          const previewImage = document.getElementById('edit_preview_image');
          previewImage.src = data.profileImage || createInitialsAvatar(data.name);
          
          // Fill form fields with staff data
          document.getElementById('edit_firstname').value = data.name.split(' ')[0] || '';
          document.getElementById('edit_lastname').value = data.name.split(' ').slice(1).join(' ') || '';
          document.getElementById('edit_email').value = data.email || '';
          document.getElementById('edit_contact_number').value = data.contact || '';
          document.getElementById('edit_position').value = data.position || '';
          document.getElementById('edit_department').value = data.department || '';
          document.getElementById('edit_join_date').value = data.joinDate || '';
          document.getElementById('edit_employment_type').value = data.employmentType || '';
          document.getElementById('edit_branch_code').value = data.branch || '';
          document.getElementById('edit_address').value = data.address || '';
          document.getElementById('edit_emergency_contact_name').value = data.emergencyContact || '';
          document.getElementById('edit_emergency_contact_number').value = data.emergencyNumber || '';
        }
        
        // Delete staff confirmation
        const deleteButtons = document.querySelectorAll(".delete-staff");
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteStaffModal'));
        
        deleteButtons.forEach(button => {
          button.addEventListener("click", function() {
            const staffId = this.dataset.id;
            const staffName = this.dataset.name;
            
            document.getElementById("deleteStaffName").textContent = staffName;
            document.getElementById("deleteStaffForm").action = `/staff/${staffId}`;
            
            deleteModal.show();
          });
        });
      });
    </script>

    <!-- Update this script to handle staff deletion instead of patient deletion -->
    <script>
    function confirmDelete() {
      if (confirm('Are you sure you want to delete this staff? This action cannot be undone.')) {
        // Add your delete logic here
        console.log('Staff deleted');
      }
    }
    </script>
    <script>
      $document.ready(function () {
        $('#staffTable').DataTable();
      })
    </script>
  </body>
</html>

<!-- beautify ignore:end -->
