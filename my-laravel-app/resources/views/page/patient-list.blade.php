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
    <link rel="icon" type="image/x-icon" href="logo.png" />

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
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div
              class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
            >
              <a
                class="nav-item nav-link px-0 me-xl-6"
                href="javascript:void(0)"
              >
                <i class="icon-base ti tabler-menu-2 icon-md"></i>
              </a>
            </div>

            <div
              class="navbar-nav-right d-flex align-items-center justify-content-end"
              id="navbar-collapse"
            >
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                  <a
                    class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                    href="javascript:void(0);"
                  >
                    <span
                      class="d-inline-block text-body-secondary fw-normal"
                      id="autocomplete"
                    ></span>
                  </a>
                </div>
              </div>

              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                    id="nav-theme"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <i
                      class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"
                    ></i>
                    <span class="d-none ms-2" id="nav-theme-text"
                      >Toggle theme</span
                    >
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="nav-theme-text"
                  >
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center active"
                        data-bs-theme-value="light"
                        aria-pressed="false"
                      >
                        <span
                          ><i
                            class="icon-base ti tabler-sun icon-22px me-3"
                            data-icon="sun"
                          ></i
                          >Light</span
                        >
                      </button>
                    </li>
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center"
                        data-bs-theme-value="dark"
                        aria-pressed="true"
                      >
                        <span
                          ><i
                            class="icon-base ti tabler-moon-stars icon-22px me-3"
                            data-icon="moon-stars"
                          ></i
                          >Dark</span
                        >
                      </button>
                    </li>
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center"
                        data-bs-theme-value="system"
                        aria-pressed="false"
                      >
                        <span
                          ><i
                            class="icon-base ti tabler-device-desktop-analytics icon-22px me-3"
                            data-icon="device-desktop-analytics"
                          ></i
                          >System</span
                        >
                      </button>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->

                <!-- Quick links -->

                <!-- Notification -->

                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <div class="avatar avatar-online">
                      <img
                        src="../../assets/img/avatars/1.png"
                        alt
                        class="rounded-circle"
                      />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item mt-0"
                        href="pages-account-settings-account.html"
                      >
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img
                                src="../../assets/img/avatars/1.png"
                                alt
                                class="rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Rommel Lacap</h6>
                            <small class="text-body-secondary">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="icon-base ti tabler-user me-3 icon-md"></i
                        ><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="icon-base ti tabler-settings me-3 icon-md"></i
                        ><span class="align-middle">Settings</span>
                      </a>
                    </li>

                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>

                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                        <a
                          class="btn btn-sm btn-danger d-flex"
                          href="#"
                          target="_blank"
                        >
                          <small class="align-middle">Logout</small>
                          <i
                            class="icon-base ti tabler-logout ms-2 icon-14px"
                          ></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <!-- Branch Filter -->
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="card-title mb-0">Branch List</h5>
                  <a href="{{ route('page.new-branch') }}" class="btn btn-primary">
                    <i class="ti tabler-plus me-1"></i> Add New Branch
                  </a>
                </div>


                <!-- Success/Error Messages -->
                <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table class="table table-striped">
                    <thead class="table-light">
                      <tr>
                        <th>Profile</th>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Birth Date</th>
                        <th>Contact Number</th>
                        <th></th>
                        <th></th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($patients as $patient)
                      <tr>
                        <td>
                          <div class="avatar">
                            @if($patient->image_path)
                              <img src="{{ asset('storage/'.$patient->image_path) }}" alt="Avatar" class="rounded-circle">
                            @else
                              <span class="avatar-initial rounded-circle bg-label-success">
                                {{ strtoupper(substr($patient->firstname ?? '', 0, 1) . substr($patient->lastname ?? '', 0, 1)) }}
                              </span>
                            @endif
                          </div>
                        </td>
                        <td>{{ $patient->firstname }} {{ $patient->lastname }}</td>
                        <td>{{ $patient->email ?? $patient->patient_name }}</td>
                        <td>{{ $patient->gender ?? 'N/A' }}</td>
                        <td>{{ $patient->birthdate ?? 'N/A' }}</td>
                        <td>{{ $patient->contact_number ?? 'N/A' }}</td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="d-inline-block">
                            <button type="button" class="btn btn-sm btn-icon btn-primary view-patient"
                              data-bs-toggle="modal"
                              data-bs-target="#patientModal"
                              data-id="{{ $patient->patient_id }}"
                              data-name="{{ $patient->firstname }} {{ $patient->lastname }}"
                              data-email="{{ $patient->email ?? '' }}"
                              data-contact="{{ $patient->contact_number ?? '' }}"
                              data-gender="{{ $patient->gender ?? '' }}"
                              data-birthdate="{{ $patient->birthdate ?? '' }}"
                              data-address="{{ $patient->address ?? '' }}"
                              data-occupation="{{ $patient->occupation ?? '' }}"
                              data-emergency-contact="{{ $patient->emergency_contact_name ?? '' }}"
                              data-emergency-number="{{ $patient->emergency_contact_number ?? '' }}"
                              data-patient-tier="{{ $patient->patient_tier_id ?? '' }}"
                              data-joined="{{ $patient->created_at ? $patient->created_at->format('Y-m-d') : '' }}"
                              @if($patient->image_path) 
                                data-profile-image="{{ asset('storage/'.$patient->image_path) }}" 
                              @endif
                              data-medical-concerns="{{ $patient->medical_concerns ?? '' }}"
                              data-medications="{{ $patient->current_medications ?? '' }}"
                              data-admin-notes="{{ $patient->note_from_admin ?? '' }}">
                              <i class="ti tabler-eye"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-info edit-patient"
                              data-bs-toggle="modal"
                              data-bs-target="#editPatientModal"
                              data-id="{{ $patient->patient_id }}">
                              <i class="ti tabler-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-danger delete-patient" 
                              data-id="{{ $patient->patient_id }}"
                              data-name="{{ $patient->firstname }} {{ $patient->lastname }}">
                              <i class="ti tabler-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @if(count($patients) == 0)
                      <tr>
                        <td colspan="9" class="text-center">No patients found</td>
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


    <!-- Patient Modal -->
    <div class="modal fade" id="patientModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0">
          <div class="modal-header bg-primary text-white border-0">
            <h5 class="modal-title text-white fs-4">
              <i class="ti tabler-user me-2"></i>
              <span id="modalPatientName" class="text-white"></span>
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
                        alt="Patient Profile"
                        class="patient-profile-image"
                        id="modalProfileImage"
                      />
                    </div>
                    <h5 class="mt-3 mb-1" id="modalPatientNameProfile"></h5>
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
                      <i class="ti tabler-calendar"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Date of Birth</small>
                      <span id="modalBirthdate" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-gender-binary"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Gender</small>
                      <span id="modalGender" class="fw-semibold"></span>
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
                  <h6 class="text-primary mb-3">Additional Information</h6>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-briefcase"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Occupation</small>
                      <span id="modalOccupation" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-emergency"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Emergency Contact</small>
                      <span id="modalEmergencyContact" class="fw-semibold"></span>
                      <small id="modalEmergencyNumber" class="text-muted d-block mt-1"></small>
                    </div>
                  </div>
                  <div class="patient-info-item mb-0">
                    <div class="patient-info-icon">
                      <i class="ti tabler-calendar-check"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Member Since</small>
                      <span id="modalJoined" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Medical Concerns Section -->
              <div class="col-12 mt-3">
                <div class="patient-detail-card">
                  <h6 class="text-primary d-flex align-items-center mb-3">
                    <i class="ti tabler-stethoscope me-2"></i>
                    Medical Information
                  </h6>
                  <div class="medical-concerns-content">
                    <div class="alert alert-info-custom mb-3">
                      <div class="d-flex align-items-start">
                        <i class="ti tabler-alert-circle fs-5 me-2 text-primary"></i>
                        <div class="w-100">
                          <h6 class="alert-heading mb-2">Allergies & Medical Concerns</h6>
                          <div id="modalMedicalConcerns" class="medical-concerns-list"></div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="alert alert-info-custom mb-0">
                      <div class="d-flex align-items-start">
                        <i class="ti tabler-medicine fs-5 me-2 text-primary"></i>
                        <div class="w-100">
                          <h6 class="alert-heading mb-2">Current Medications</h6>
                          <div id="modalMedications" class="medical-concerns-list"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Admin Notes Section -->
              <div class="col-12 mt-3">
                <div class="patient-detail-card">
                  <h6 class="text-primary d-flex align-items-center mb-3">
                    <i class="ti tabler-notes me-2"></i>
                    Administrative Notes
                  </h6>
                  <p id="modalAdminNotes" class="mb-0 text-muted"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="editPatientLink" class="btn btn-info" data-bs-dismiss="modal">
              <i class="ti tabler-edit me-1"></i> Edit Patient
            </button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Patient Modal -->
    <div class="modal fade" id="editPatientModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <form id="editPatientForm" method="POST" action="{{ route('patient.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="patient_id" id="edit_patient_id">
            
            <div class="modal-header bg-info">
              <h5 class="modal-title text-white">
                <i class="ti tabler-edit me-1"></i> Edit Patient
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
                         class="patient-profile-image" alt="Patient Profile">
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
                
                <!-- Personal Details -->
                <div class="col-md-6">
                  <label for="edit_birthdate" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" id="edit_birthdate" name="birthdate" required>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_gender" class="form-label">Gender</label>
                  <select class="form-select" id="edit_gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_occupation" class="form-label">Occupation</label>
                  <input type="text" class="form-control" id="edit_occupation" name="occupation">
                </div>
                
                <div class="col-md-6">
                  <label for="edit_patient_tier_id" class="form-label">Membership Tier</label>
                  <select class="form-select" id="edit_patient_tier_id" name="patient_tier_id" required>
                    <option value="">Select Tier</option>
                    @foreach($tiers as $tier)
                      <option value="{{ $tier->patient_tier_id }}">{{ $tier->tier_name }}</option>
                    @endforeach
                  </select>
                </div>
                
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
                
                <!-- Medical Information Section -->
                <div class="col-12 mt-3">
                  <h6 class="fw-semibold">Medical Information</h6>
                  <hr class="mt-0">
                </div>
                
                <div class="col-md-6">
                  <label for="edit_medical_concerns" class="form-label">Allergies & Medical Concerns</label>
                  <textarea class="form-control" id="edit_medical_concerns" name="medical_concerns" rows="3"></textarea>
                  <small class="text-muted">Separate each concern with a comma</small>
                </div>
                
                <div class="col-md-6">
                  <label for="edit_current_medications" class="form-label">Current Medications</label>
                  <textarea class="form-control" id="edit_current_medications" name="current_medications" rows="3"></textarea>
                  <small class="text-muted">Separate each medication with a comma</small>
                </div>
                
                <!-- Administrative Notes -->
                <div class="col-12 mt-3">
                  <h6 class="fw-semibold">Administrative Notes</h6>
                  <hr class="mt-0">
                </div>
                
                <div class="col-12">
                  <label for="edit_note_from_admin" class="form-label">Notes</label>
                  <textarea class="form-control" id="edit_note_from_admin" name="note_from_admin" rows="3"></textarea>
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
    <div class="modal fade" id="deletePatientModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title text-white">Confirm Delete</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete <span id="deletePatientName" class="fw-bold"></span>? This action cannot be undone.</p>
          </div>
          <div class="modal-footer">
            <form id="deletePatientForm" action="" method="POST">
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
      
      .medical-concerns-content {
        background-color: #f8f9fa;
        border-radius: 0.75rem;
        padding: 1rem;
      }
      
      .alert-info-custom {
        background-color: rgba(10, 54, 34, 0.05);
        border: 1px solid rgba(10, 54, 34, 0.1);
        border-radius: 0.75rem;
      }
      
      .medical-concerns-list {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
      }
      
      .medical-concern-item {
        display: flex;
        align-items: start;
        padding: 0.5rem;
        background: white;
        border-radius: 0.5rem;
        border: 1px solid rgba(10, 54, 34, 0.1);
      }
      
      .medical-concern-item i {
        color: #0a3622;
        margin-right: 0.5rem;
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

    <!-- JavaScript for patient modals -->

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


      // Format list items for medical concerns and medications
      function formatListItems(items) {
        if (!items || items.trim() === '')
          return '<p class="text-muted mb-0">None reported</p>';

        return items
          .split(",")
          .map(item => 
            `<div class="medical-concern-item">
              <i class="ti tabler-point text-primary"></i>
              ${item.trim()}
            </div>`
          )
          .join("");
      }

      // Handle patient actions
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

        // View patient details
        const viewButtons = document.querySelectorAll(".view-patient");
        viewButtons.forEach(button => {
          button.addEventListener("click", function() {
            const data = this.dataset;
            
            // Store patient ID for edit button
            document.getElementById("editPatientLink").setAttribute('data-id', data.id);
            
            // Set profile image
            const profileImage = document.getElementById("modalProfileImage");
            profileImage.src = data.profileImage || createInitialsAvatar(data.name);
            
            // Basic information
            document.getElementById("modalPatientName").textContent = data.name || '';
            document.getElementById("modalPatientNameProfile").textContent = data.name || '';
            document.getElementById("modalContact").textContent = data.contact || 'Not provided';
            document.getElementById("modalEmail").textContent = data.email || 'Not provided';
            document.getElementById("modalBirthdate").textContent = data.birthdate || 'Not provided';
            document.getElementById("modalGender").textContent = data.gender || 'Not specified';
            document.getElementById("modalAddress").textContent = data.address || 'Not provided';
            
            // Additional information
            document.getElementById("modalOccupation").textContent = data.occupation || 'Not provided';
            document.getElementById("modalEmergencyContact").textContent = data.emergencyContact || 'Not provided';
            document.getElementById("modalEmergencyNumber").textContent = data.emergencyNumber || '';
            document.getElementById("modalJoined").textContent = data.joined || 'Not available';
            
            // Medical information
            document.getElementById("modalMedicalConcerns").innerHTML = formatListItems(data.medicalConcerns);
            document.getElementById("modalMedications").innerHTML = formatListItems(data.medications);
            
            // Admin notes
            const adminNotes = document.getElementById("modalAdminNotes");
            if (data.adminNotes && data.adminNotes.trim()) {
              adminNotes.textContent = data.adminNotes;
              adminNotes.classList.remove('text-muted');
            } else {
              adminNotes.textContent = 'No administrative notes available';
              adminNotes.classList.add('text-muted');
            }
          });
        });
        
        // Edit patient button click
        document.getElementById('editPatientLink').addEventListener('click', function() {
          const patientId = this.getAttribute('data-id');
          // Open the edit modal programmatically after the view modal is dismissed
          $('#patientModal').on('hidden.bs.modal', function () {
            // Populate the edit form
            populateEditForm(patientId);
            // Show the edit modal
            $('#editPatientModal').modal('show');
            // Remove the event to prevent multiple bindings
            $('#patientModal').off('hidden.bs.modal');
          });
        });
        
        // Direct edit button click
        const editButtons = document.querySelectorAll(".edit-patient");
        editButtons.forEach(button => {
          button.addEventListener("click", function() {
            const patientId = this.dataset.id;
            populateEditForm(patientId);
          });
        });

        // Function to populate edit form with patient data
        function populateEditForm(patientId) {
          // Find the view button for this patient to get data
          const viewButton = document.querySelector(`.view-patient[data-id="${patientId}"]`);
          if (!viewButton) return;
          
          const data = viewButton.dataset;
          
          // Set form action and patient ID
          document.getElementById('edit_patient_id').value = patientId;
          
          // Set image preview
          const previewImage = document.getElementById('edit_preview_image');
          previewImage.src = data.profileImage || createInitialsAvatar(data.name);
          
          // Fill form fields with patient data
          document.getElementById('edit_firstname').value = data.name.split(' ')[0] || '';
          document.getElementById('edit_lastname').value = data.name.split(' ').slice(1).join(' ') || '';
          document.getElementById('edit_email').value = data.email || '';
          document.getElementById('edit_contact_number').value = data.contact || '';
          document.getElementById('edit_birthdate').value = data.birthdate || '';
          document.getElementById('edit_gender').value = data.gender || '';
          document.getElementById('edit_occupation').value = data.occupation || '';
          document.getElementById('edit_address').value = data.address || '';
          document.getElementById('edit_emergency_contact_name').value = data.emergencyContact || '';
          document.getElementById('edit_emergency_contact_number').value = data.emergencyNumber || '';
          document.getElementById('edit_medical_concerns').value = data.medicalConcerns || '';
          document.getElementById('edit_current_medications').value = data.medications || '';
          document.getElementById('edit_note_from_admin').value = data.adminNotes || '';
          
          // Set patient tier if available
          if (data.patientTier) {
            document.getElementById('edit_patient_tier_id').value = data.patientTier;
          }
        }
        
        // Delete patient confirmation
        const deleteButtons = document.querySelectorAll(".delete-patient");
        const deleteModal = new bootstrap.Modal(document.getElementById('deletePatientModal'));
        
        deleteButtons.forEach(button => {
          button.addEventListener("click", function() {
            const patientId = this.dataset.id;
            const patientName = this.dataset.name;
            
            document.getElementById("deletePatientName").textContent = patientName;
            document.getElementById("deletePatientForm").action = `/patient/${patientId}`;
            
            deleteModal.show();
          });
        });

      });
    </script>

    <!-- Add this script -->
    <script>
    function confirmDelete() {
      if (confirm('Are you sure you want to delete this patient? This action cannot be undone.')) {
        // Add your delete logic here
        console.log('Patient deleted');
      }
    }
    </script>
  </body>
</html>