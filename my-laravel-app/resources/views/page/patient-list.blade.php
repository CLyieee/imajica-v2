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
              <div class="row g-4">
                <!-- Search and Filter Section -->
                <div class="card search-section">
                  <div class="px-4 py-3">
                    <div class="row g-3 align-items-center">
                      <div class="col-md-8">
                        <div class="input-group">
                          <span class="input-group-text"
                            ><i class="ti tabler-search"></i
                          ></span>
                          <input
                            type="text"
                            class="form-control"
                            id="searchPatient"
                            placeholder="Search patient name..."
                          />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <span class="badge bg-label-primary p-2">
                          Total Patient: <span id="totalResults">0</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Patient Card -->
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-start mb-3">
                        <div class="avatar avatar-lg me-3">
                          <img
                            src="../../assets/img/avatars/1.png"
                            alt="Patient Avatar"
                            class="rounded-circle"
                          />
                        </div>
                        <div>
                          <h5 class="mb-1">Sophia Mendoza</h5>
                          <span class="badge bg-label-success">Bronze</span>
                        </div>
                      </div>

                      <div class="patient-info mb-3">
                        <div class="d-flex align-items-center mb-2">
                          <i class="ti tabler-phone text-muted me-2"></i>
                          <span>+63 917 123 4567</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <i class="ti tabler-mail text-muted me-2"></i>
                          <span>sophia.mendoza@email.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="ti tabler-map-pin text-muted me-2"></i>
                          <span>123 Makati Ave, Makati City</span>
                        </div>
                      </div>

                      <!-- Replace the existing action buttons with text-only buttons -->
                      <div class="d-flex gap-2">
                        <button
                          class="btn btn-success btn-sm flex-grow-1 view-patient"
                          data-bs-toggle="modal"
                          data-bs-target="#patientModal"
                          data-name="Sophia Mendoza"
                          data-contact="+63 917 123 4567"
                          data-email="sophia.mendoza@email.com"
                          data-address="123 Makati Ave, Makati City"
                          data-membership="Bronze"
                          data-points="150"
                          data-joined="2023-05-15"
                          data-birth-date="1990-03-15"
                          data-gender="Female"
                          data-occupation="Software Engineer"
                        >
                          View
                        </button>
                        <button class="btn btn-info btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Repeat similar cards for other patients -->
                <!-- Isabella Santos Card -->
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-start mb-3">
                        <div class="avatar avatar-lg me-3">
                          <img
                            src="../../assets/img/avatars/2.png"
                            alt="Patient Avatar"
                            class="rounded-circle"
                          />
                        </div>
                        <div>
                          <h5 class="mb-1">Isabella Santos</h5>
                          <span class="badge bg-label-warning">Silver</span>
                        </div>
                      </div>

                      <div class="patient-info mb-3">
                        <div class="d-flex align-items-center mb-2">
                          <i class="ti tabler-phone text-muted me-2"></i>
                          <span>+63 918 234 5678</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <i class="ti tabler-mail text-muted me-2"></i>
                          <span>isabella.santos@email.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="ti tabler-map-pin text-muted me-2"></i>
                          <span>456 BGC, Taguig City</span>
                        </div>
                      </div>

                      <div class="d-flex gap-2">
                        <button
                          class="btn btn-success btn-sm flex-grow-1 view-patient"
                          data-bs-toggle="modal"
                          data-bs-target="#patientModal"
                          data-name="Isabella Santos"
                          data-contact="+63 918 234 5678"
                          data-email="isabella.santos@email.com"
                          data-address="456 BGC, Taguig City"
                          data-membership="Silver"
                          data-points="350"
                          data-joined="2023-03-20"
                        >
                          View
                        </button>
                        <button class="btn btn-info btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add this CSS -->
            <style>
              .card {
                transition: transform 0.2s ease-in-out,
                  box-shadow 0.2s ease-in-out;
              }

              .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
              }

              .avatar.avatar-lg {
                width: 48px;
                height: 48px;
              }

              .patient-info {
                font-size: 0.875rem;
              }

              .card .btn-sm {
                padding: 0.25rem 0.5rem;
              }

              .card .btn-sm i {
                font-size: 1rem;
              }

              .search-section {
                background-color: #fff;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
              }

              .input-group-text {
                background-color: #fff;
                border-right: none;
              }

              #searchPatient {
                border-left: none;
              }

              #searchPatient:focus {
                box-shadow: none;
                border-color: #dee2e6;
              }

              .badge {
                font-size: 0.875rem;
              }

              #totalResults {
                font-weight: 600;
              }

              #membershipFilter {
                border-radius: 0.375rem;
              }

              .badge.bg-label-primary {
                font-size: 0.875rem;
                padding: 0.5rem 1rem;
              }

              #totalResults {
                font-weight: 600;
                margin-left: 0.25rem;
              }
            </style>
          </div>

          <!-- Content wrapper -->

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

    <!-- Replace the existing patient modal with this enhanced version -->
    <div class="modal fade" id="patientModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <!-- Changed to modal-xl -->
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
                    <span
                      class="badge bg-label-success"
                      id="modalMembershipBadge"
                    ></span>
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

              <!-- Membership Details Column -->
              <div class="col-md-6">
                <div class="patient-detail-card h-100">
                  <h6 class="text-primary mb-3">Membership Details</h6>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-award"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Tier</small>
                      <span id="modalMembership" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-points"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Points</small>
                      <span id="modalPoints" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="patient-info-item mb-0">
                    <div class="patient-info-icon">
                      <i class="ti tabler-calendar"></i>
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
                    <div class="alert alert-info-custom mb-0">
                      <div class="d-flex align-items-start">
                        <i
                          class="ti tabler-alert-circle fs-5 me-2 text-primary"
                        ></i>
                        <div class="w-100">
                          <h6 class="alert-heading mb-2">
                            Allergies & Medical Concerns
                          </h6>
                          <div
                            id="medicalConcernsText"
                            class="medical-concerns-list"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add this CSS to your existing styles -->
    <style>
      .patient-profile-wrapper {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #0a3622;
        box-shadow: 0 4px 15px rgba(10, 54, 34, 0.2);
        transition: transform 0.3s ease;
      }

      .patient-profile-wrapper:hover {
        transform: scale(1.05);
      }

      .patient-profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
        background-color: #0a3622;
      }

      .patient-profile-image:hover {
        transform: scale(1.1);
      }

      /* Update existing modal header styling */
      .modal-header {
        background: linear-gradient(
          135deg,
          #0a3622 0%,
          #1a5c3c 100%
        ) !important;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        padding: 1.5rem;
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

      .medical-concerns-content {
        background-color: #f8f9fa;
        border-radius: 0.75rem;
        padding: 1rem;
      }

      .medical-concern-item {
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(10, 54, 34, 0.1);
      }

      .medical-concern-item:last-child {
        border-bottom: none;
      }

      .medical-concern-item i {
        font-size: 0.75rem;
      }

      /* Add these styles to your existing CSS */
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
        margin-top: 0.25rem;
      }
    </style>

    <!-- Update the JavaScript event handler -->
    <script>
      // Add this function to create initials avatar
      function createInitialsAvatar(name) {
        const canvas = document.createElement("canvas");
        const context = canvas.getContext("2d");
        canvas.width = 120;
        canvas.height = 120;

        // Draw circle background
        context.fillStyle = "#0a3622";
        context.beginPath();
        context.arc(60, 60, 60, 0, Math.PI * 2);
        context.fill();

        // Get initials
        const initials = name
          .split(" ")
          .map((word) => word[0])
          .join("")
          .toUpperCase();

        // Draw text
        context.font = "bold 48px Arial";
        context.fillStyle = "#FFFFFF";
        context.textAlign = "center";
        context.textBaseline = "middle";
        context.fillText(initials, 60, 60);

        return canvas.toDataURL();
      }

      // Update the view patient click handler
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".view-patient").forEach((button) => {
          button.addEventListener("click", function () {
            const name = this.dataset.name;
            const profileImage = document.getElementById("modalProfileImage");

            // Handle profile image
            if (this.dataset.profileImage) {
              profileImage.src = this.dataset.profileImage;
            } else {
              profileImage.src = createInitialsAvatar(name);
            }

            // Update modal content
            document.getElementById("modalPatientName").textContent = name;
            document.getElementById("modalpatientNameProfile").textContent =
              name;
            document.getElementById("modalMembershipBadge").textContent =
              this.dataset.membership;
            document.getElementById("modalContact").textContent =
              this.dataset.contact;
            document.getElementById("modalEmail").textContent =
              this.dataset.email;
            document.getElementById("modalAddress").textContent =
              this.dataset.address;
            document.getElementById("modalMembership").textContent =
              this.dataset.membership;
            document.getElementById("modalPoints").textContent =
              this.dataset.points;
            document.getElementById("modalJoined").textContent =
              this.dataset.joined;

            // Handle medical concerns - single implementation
            const medicalConcerns = this.dataset.medicalConcerns;
            const modalMedicalConcerns = document.getElementById(
              "modalMedicalConcerns"
            );

            if (medicalConcerns) {
              const concernsList = medicalConcerns
                .split(",")
                .map(
                  (concern) =>
                    `<div class="medical-concern-item">
                <i class="ti tabler-point text-primary me-2"></i>
                ${concern.trim()}
              </div>`
                )
                .join("");

              modalMedicalConcerns.innerHTML = concernsList;
            } else {
              modalMedicalConcerns.innerHTML =
                '<div class="text-muted">No allergies or medical concerns reported.</div>';
            }
          });
        });
      });
    </script>

    <!-- Update the CSS -->
    <style>
      .modal-xl {
        max-width: 1140px;
      }

      .patient-detail-card {
        background: #fff;
        border-radius: 0.75rem;
        padding: 1.25rem;
        height: 100%;
        box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
      }

      .patient-profile-wrapper {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #0a3622;
        box-shadow: 0 4px 15px rgba(10, 54, 34, 0.2);
        margin-bottom: 1rem;
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

      .modal-content {
        border-radius: 1rem;
      }

      .table-sm td,
      .table-sm th {
        padding: 0.5rem;
        font-size: 0.875rem;
      }

      .medical-concerns-content {
        background-color: #f8f9fa;
        border-radius: 0.75rem;
        padding: 1rem;
      }

      .medical-concern-item {
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(10, 54, 34, 0.1);
      }

      .medical-concern-item:last-child {
        border-bottom: none;
      }

      .medical-concern-item i {
        font-size: 0.75rem;
      }
    </style>

    <script>
      // Add this script to both patient-list.html and new-patient.html
      document.addEventListener("DOMContentLoaded", function () {
        // Get current page filename
        const currentPage = window.location.pathname.split("/").pop();

        // Remove active class from all menu items
        document.querySelectorAll(".menu-item").forEach((item) => {
          item.classList.remove("active");
        });

        // Set active state based on current page
        if (currentPage === "patient-list.html") {
          document
            .querySelector('a[href="patient-list.html"]')
            .parentElement.classList.add("active");
        } else if (currentPage === "new-patient.html") {
          document
            .querySelector('a[href="new-patient.html"]')
            .parentElement.classList.add("active");
        }
      });
    </script>

    <script>
      // Add this script to both files
      document.addEventListener("DOMContentLoaded", function () {
        // Get current page filename
        const currentPage = window.location.pathname.split("/").pop();

        // Remove active class from all menu items
        document.querySelectorAll(".menu-item").forEach((item) => {
          item.classList.remove("active");
        });

        // Add active class based on current page
        if (currentPage === "new-patient.html") {
          document.getElementById("newPatientMenuItem").classList.add("active");
          document
            .querySelector('a[href="new-patient.html"]')
            .parentElement.parentElement.parentElement.classList.add(
              "active",
              "open"
            );
        } else if (currentPage === "patient-list.html") {
          document
            .getElementById("patientListMenuItem")
            .classList.add("active");
          document
            .querySelector('a[href="patient-list.html"]')
            .parentElement.parentElement.parentElement.classList.add(
              "active",
              "open"
            );
        }
      });
    </script>

    <!-- Add this updated JavaScript after your existing modal HTML -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".view-patient").forEach((button) => {
          button.addEventListener("click", function () {
            const modalContent = `
            <div class="row g-3">
              <!-- Profile and Personal Info Column -->
              <div class="col-md-6">
                <div class="patient-detail-card h-100">
                  <div class="text-center mb-3">
                    <div class="patient-profile-wrapper mx-auto">
                      <img 
                        id="modalProfileImage"
                        src="${
                          this.dataset.profileImage ||
                          createInitialsAvatar(this.dataset.name)
                        }" 
                        alt="Patient Profile" 
                        class="patient-profile-image"
                      >
                    </div>
                    <h5 class="mt-3 mb-1">${this.dataset.name}</h5>
                    <span class="badge bg-label-${getMembershipColor(
                      this.dataset.membership
                    )}">${this.dataset.membership}</span>
                  </div>
                  
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-phone"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Contact</small>
                      <span class="fw-semibold">${this.dataset.contact}</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-mail"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Email</small>
                      <span class="fw-semibold">${this.dataset.email}</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-calendar"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Date of Birth</small>
                      <span class="fw-semibold">${
                        this.dataset.birthDate || "Not provided"
                      }</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-user"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Gender</small>
                      <span class="fw-semibold">${
                        this.dataset.gender || "Not specified"
                      }</span>
                    </div>
                  </div>

                  <div class="patient-info-item mb-0">
                    <div class="patient-info-icon">
                      <i class="ti tabler-map-pin"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Address</small>
                      <span class="fw-semibold">${this.dataset.address}</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Membership and Additional Details Column -->
              <div class="col-md-6">
                <div class="patient-detail-card h-100">
                  <h6 class="text-primary mb-3">Membership & Additional Details</h6>
                  
                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-briefcase"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Occupation</small>
                      <span class="fw-semibold">${
                        this.dataset.occupation || "Not provided"
                      }</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-award"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Membership Tier</small>
                      <span class="fw-semibold">${
                        this.dataset.membership
                      }</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-points"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Points</small>
                      <span class="fw-semibold">${this.dataset.points}</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-calendar-check"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Member Since</small>
                      <span class="fw-semibold">${this.dataset.joined}</span>
                    </div>
                  </div>

                  <div class="patient-info-item">
                    <div class="patient-info-icon">
                      <i class="ti tabler-emergency"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Emergency Contact</small>
                      <span class="fw-semibold">${
                        this.dataset.emergencyContact || "Not provided"
                      }</span>
                      <br>
                      <span class="text-muted">${
                        this.dataset.emergencyPhone || "No phone provided"
                      }</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Medical Information Section -->
              <div class="col-12">
                <div class="patient-detail-card">
                  <h6 class="text-primary d-flex align-items-center mb-3">
                    <i class="ti tabler-stethoscope me-2"></i>
                    Medical Information
                  </h6>
                  
                  <div class="medical-concerns-content">
                    <div class="alert alert-info-custom mb-3">
                      <div class="d-flex align-items-start">
                        <i class="ti tabler-alert-circle fs-5 me-2 text-primary"></i>
                        <div>
                          <h6 class="alert-heading mb-1">Allergies & Medical Concerns</h6>
                          <div class="medical-concerns-list" id="medicalConcernsList">
                            ${formatMedicalConcerns(
                              this.dataset.medicalConcerns
                            )}
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="alert alert-info-custom mb-3">
                      <div class="d-flex align-items-start">
                        <i class="ti tabler-medicine fs-5 me-2 text-primary"></i>
                        <div>
                          <h6 class="alert-heading mb-1">Current Medications</h6>
                          <p class="mb-0">${
                            this.dataset.medications ||
                            "No current medications listed"
                          }</p>
                        </div>
                      </div>
                    </div>

                    <div class="alert alert-info-custom mb-0">
                      <div class="d-flex align-items-start">
                        <i class="ti tabler-notes fs-5 me-2 text-primary"></i>
                        <div>
                          <h6 class="alert-heading mb-1">Administrative Notes</h6>
                          <p class="mb-0">${
                            this.dataset.adminNotes || "No administrative notes"
                          }</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;

            // Update modal content
            document.querySelector("#patientModal .modal-body").innerHTML =
              modalContent;
            document.querySelector("#modalPatientName").textContent =
              this.dataset.name;
          });
        });
      });

      // Helper function to determine membership badge color
      function getMembershipColor(membership) {
        const colors = {
          Bronze: "success",
          Silver: "warning",
          Gold: "primary",
          VIP: "danger",
        };
        return colors[membership] || "secondary";
      }

      // Helper function to format medical concerns
      function formatMedicalConcerns(concerns) {
        if (!concerns)
          return '<p class="mb-0">No medical concerns reported</p>';

        return concerns
          .split(",")
          .map(
            (concern) => `
        <div class="medical-concern-item">
          <i class="ti tabler-point text-primary me-2"></i>
          ${concern.trim()}
        </div>
      `
          )
          .join("");
      }
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("searchPatient");
        const patientCards = document.querySelectorAll(".col-md-6.col-lg-4");
        const totalResults = document.getElementById("totalResults");

        function filterPatients() {
          const searchTerm = searchInput.value.toLowerCase();
          let visibleCount = 0;

          patientCards.forEach((card) => {
            const patientName = card
              .querySelector("h5")
              .textContent.toLowerCase();

            // Only check if name matches search term
            if (patientName.includes(searchTerm)) {
              card.style.display = "";
              visibleCount++;
            } else {
              card.style.display = "none";
            }
          });

          // Update total results count
          totalResults.textContent = visibleCount;
        }

        // Add event listener for search input
        searchInput.addEventListener("input", filterPatients);

        // Initial count
        filterPatients();
      });
    </script>
  </body>
</html>
