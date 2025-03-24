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
                      <!-- Profile Header -->
                      <div class="d-flex align-items-start mb-3">
                        <div class="avatar avatar-lg me-3">
                          <img src="../../assets/img/avatars/default-avatar.png" alt="Patient Avatar" class="rounded-circle" />
                        </div>
                        <div class="flex-grow-1">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-1">ABEGAIL MERCANO</h5>
                            <span class="badge bg-label-success">Female</span>
                          </div>
                          <small class="text-muted">Patient ID: #12345</small>
                        </div>
                      </div>

                      <!-- Patient Info -->
                      <div class="patient-info mb-4">
                        <div class="info-item d-flex align-items-center mb-2">
                          <div class="info-icon me-2">
                            <i class="ti tabler-phone"></i>
                          </div>
                          <div class="info-content">
                            <small class="text-muted d-block">Contact</small>
                            <span class="fw-semibold">+639634193019</span>
                          </div>
                        </div>
                        
                        <div class="info-item d-flex align-items-center mb-2">
                          <div class="info-icon me-2">
                            <i class="ti tabler-mail"></i>
                          </div>
                          <div class="info-content">
                            <small class="text-muted d-block">Email</small>
                            <span class="fw-semibold">amercano@gmail.com</span>
                          </div>
                        </div>

                        <div class="info-item d-flex align-items-center mb-2">
                          <div class="info-icon me-2">
                            <i class="ti tabler-clock"></i>
                          </div>
                          <div class="info-content">
                            <small class="text-muted d-block">Sessions</small>
                            <span class="fw-semibold">Remaining: 3</span>
                          </div>
                        </div>

                        <div class="info-item d-flex align-items-center">
                          <div class="info-icon me-2">
                            <i class="ti tabler-cash"></i>
                          </div>
                          <div class="info-content">
                            <small class="text-muted d-block">Balance</small>
                            <span class="fw-semibold">₱4,499.00</span>
                          </div>
                        </div>
                      </div>

                      <!-- Action Buttons -->
                      <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm flex-grow-1">View Details</button>
                        <button class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>

                >

            <!-- Add this CSS -->
            <style>
              .card {
                transition: transform 0.2s ease-in-out,
                  box-shadow 0.2s ease-in-out;
                border: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
              }

              .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
              }

              .avatar.avatar-lg {
                width: 48px;
                height: 48px;
              }

              .info-icon {
                width: 32px;
                height: 32px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: rgba(10, 54, 34, 0.1);
                border-radius: 8px;
                color: #0a3622;
              }

              .info-content {
                flex: 1;
              }

              .badge {
                padding: 0.35em 0.65em;
                font-size: 0.75em;
              }

              .btn-sm {
                padding: 0.4rem 0.8rem;
                font-size: 0.875rem;
              }

              .btn-outline-danger {
                border-width: 1px;
              }

              .patient-info {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding-bottom: 1rem;
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

    <!-- Update the JavaScript event handler -->
    <script>
      // Add this function to create initials avatar
      function createInitialsAvatar(name) {
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.width = 120;
        canvas.height = 120;

        // Draw circle with light blue background
        context.fillStyle = '#E6EEFF';  // Light blue background
        context.beginPath();
        context.arc(60, 60, 60, 0, Math.PI * 2);
        context.fill();

        // Draw silhouette
        context.fillStyle = '#1B3F8F';  // Darker blue for silhouette
        
        // Draw head
        context.beginPath();
        context.arc(60, 50, 25, 0, Math.PI * 2);
        context.fill();

        // Draw body
        context.beginPath();
        context.arc(60, 115, 40, Math.PI * 1.1, Math.PI * 1.9);
        context.fill();

        return canvas.toDataURL();
      }

      // Update the profile image display logic
      function updateProfileImage(imageElement, patientName, profileImageUrl = null) {
        if (profileImageUrl && profileImageUrl !== 'default-avatar.png') {
          imageElement.src = profileImageUrl;
        } else {
          imageElement.src = createInitialsAvatar(patientName);
        }
      }

      // Update where profile images are displayed
      document.addEventListener('DOMContentLoaded', function() {
        // For patient cards
        const patientCards = document.querySelectorAll('.card');
        patientCards.forEach(card => {
          const nameElement = card.querySelector('h5');
          const avatarImage = card.querySelector('.avatar img');
          if (nameElement && avatarImage) {
            updateProfileImage(avatarImage, nameElement.textContent);
          }
        });

        // For modal view
        const viewButtons = document.querySelectorAll('.btn-primary');
        viewButtons.forEach(button => {
          button.addEventListener('click', function() {
            const patientName = this.closest('.card').querySelector('h5').textContent;
            const modalProfileImage = document.getElementById('modalProfileImage');
            updateProfileImage(modalProfileImage, patientName);
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
