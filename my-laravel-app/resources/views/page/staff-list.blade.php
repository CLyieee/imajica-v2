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
            <!-- Replace the existing table section with this card-based layout -->
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
                            id="searchStaff"
                            placeholder="Search staff name..."
                          />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <span class="badge bg-label-primary p-2">
                          Total Staff: <span id="totalResults">5</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Staff Cards -->
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-start mb-3">
                        <div class="avatar avatar-lg me-3">
                          <img
                            src="../../assets/img/avatars/1.png"
                            alt="Staff Avatar"
                            class="rounded-circle"
                          />
                        </div>
                        <div>
                          <h5 class="mb-1">John Smith</h5>
                          <span class="badge bg-label-primary">Doctor</span>
                        </div>
                      </div>

                      <div class="staff-info mb-3">
                        <div class="d-flex align-items-center mb-2">
                          <i class="ti tabler-phone text-muted me-2"></i>
                          <span>+63 917 123 4567</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <i class="ti tabler-mail text-muted me-2"></i>
                          <span>john.smith@email.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="ti tabler-map-pin text-muted me-2"></i>
                          <span>Pasig City Branch</span>
                        </div>
                      </div>

                      <div class="d-flex gap-2">
                        <button
                          class="btn btn-success btn-sm flex-grow-1 view-staff"
                          data-bs-toggle="modal"
                          data-bs-target="#staffModal"
                          data-name="John Smith"
                          data-role="Doctor"
                          data-contact="+63 917 123 4567"
                          data-email="john.smith@email.com"
                          data-branch="Pasig City Branch"
                          data-joined="2023-01-15"
                          data-specialization="General Medicine"
                          data-certifications="Board Certified in Internal Medicine, Advanced Cardiac Life Support"
                          data-notes="Excellent team player with outstanding patient care records."
                        >
                          View
                        </button>
                        <button class="btn btn-info btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Add more staff cards following the same structure -->
                <!-- Additional staff members... -->
              </div>
            </div>

            <!-- Staff View Modal -->
            <div
              class="modal fade"
              id="staffModal"
              tabindex="-1"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content border-0">
                  <div class="modal-header text-white border-0">
                    <h5 class="modal-title text-white fs-4">
                      <i class="ti tabler-user me-2"></i>
                      <span id="modalStaffName"></span>
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
                        <div class="staff-detail-card h-100">
                          <div class="text-center mb-3">
                            <div class="staff-profile-wrapper mx-auto">
                              <img
                                src="../../assets/img/avatars/1.png"
                                alt="Staff Profile"
                                class="staff-profile-image"
                                id="modalProfileImage"
                              />
                            </div>
                            <h5
                              class="mt-3 mb-1"
                              id="modalStaffNameProfile"
                            ></h5>
                            <span
                              class="badge bg-label-primary"
                              id="modalRoleBadge"
                            ></span>
                          </div>

                          <div class="staff-info-item">
                            <div class="staff-info-icon">
                              <i class="ti tabler-phone"></i>
                            </div>
                            <div>
                              <span class="text-muted">Contact:</span>
                              <span
                                class="fw-semibold"
                                id="modalContact"
                              ></span>
                            </div>
                          </div>

                          <div class="staff-info-item">
                            <div class="staff-info-icon">
                              <i class="ti tabler-mail"></i>
                            </div>
                            <div>
                              <span class="text-muted">Email:</span>
                              <span class="fw-semibold" id="modalEmail"></span>
                            </div>
                          </div>

                          <div class="staff-info-item mb-0">
                            <div class="staff-info-icon">
                              <i class="ti tabler-map-pin"></i>
                            </div>
                            <div>
                              <span class="text-muted">Branch:</span>
                              <span class="fw-semibold" id="modalBranch"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Professional Details Column -->
                      <div class="col-md-6">
                        <div class="staff-detail-card h-100">
                          <h6 class="text-primary mb-3">
                            Professional Details
                          </h6>

                          <div class="staff-info-item">
                            <div class="staff-info-icon">
                              <i class="ti tabler-briefcase"></i>
                            </div>
                            <div>
                              <strong class="text-dark d-block mb-1"
                                >Role</strong
                              >
                              <span
                                class="text-secondary"
                                id="modalRole"
                              ></span>
                            </div>
                          </div>

                          <div class="staff-info-item">
                            <div class="staff-info-icon">
                              <i class="ti tabler-certificate"></i>
                            </div>
                            <div>
                              <strong class="text-dark d-block mb-1"
                                >Specialization</strong
                              >
                              <span
                                class="text-secondary"
                                id="modalSpecialization"
                              ></span>
                            </div>
                          </div>

                          <div class="staff-info-item">
                            <div class="staff-info-icon">
                              <i class="ti tabler-calendar"></i>
                            </div>
                            <div>
                              <strong class="text-dark d-block mb-1"
                                >Joined Date</strong
                              >
                              <span
                                class="text-secondary"
                                id="modalJoined"
                              ></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Additional Information Section -->
                      <div class="col-12">
                        <div class="staff-detail-card">
                          <h6
                            class="text-primary d-flex align-items-center mb-3"
                          >
                            <i class="ti tabler-file-text me-2"></i>
                            Additional Information
                          </h6>

                          <div class="additional-info-content">
                            <div class="alert alert-info-custom mb-3">
                              <div class="d-flex align-items-start">
                                <i
                                  class="ti tabler-certificate-2 fs-5 me-2 text-primary"
                                ></i>
                                <div>
                                  <h6 class="alert-heading mb-1">
                                    Certifications
                                  </h6>
                                  <div id="modalCertifications"></div>
                                </div>
                              </div>
                            </div>

                            <div class="alert alert-info-custom mb-0">
                              <div class="d-flex align-items-start">
                                <i
                                  class="ti tabler-notes fs-5 me-2 text-primary"
                                ></i>
                                <div>
                                  <h6 class="alert-heading mb-1">Notes</h6>
                                  <p class="mb-0" id="modalNotes"></p>
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

            <!-- Add necessary styles -->
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

              .staff-info {
                font-size: 0.875rem;
              }

              .search-section {
                background-color: #fff;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
              }

              .input-group-text {
                background-color: #fff;
                border-right: none;
              }

              #searchStaff {
                border-left: none;
              }

              #searchStaff:focus {
                box-shadow: none;
                border-color: #dee2e6;
              }
              .modal-xl {
                max-width: 1140px;
              }

              .staff-detail-card {
                background: #fff;
                border-radius: 0.75rem;
                padding: 1.25rem;
                height: 100%;
                box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
              }

              .staff-profile-wrapper {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                overflow: hidden;
                border: 3px solid #0a3622;
                box-shadow: 0 4px 15px rgba(10, 54, 34, 0.2);
                margin-bottom: 1rem;
              }

              .staff-profile-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
              }

              .staff-info-item {
                display: flex;
                align-items: center;
                gap: 1rem;
                margin-bottom: 1rem;
                padding: 0.75rem;
                border-radius: 0.5rem;
                background-color: rgba(10, 54, 34, 0.03);
              }

              .staff-info-icon {
                width: 32px;
                height: 32px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #e7efe9;
                color: #0a3622;
                border-radius: 0.5rem;
                flex-shrink: 0;
              }

              .staff-info-content {
                flex: 1;
              }

              .staff-info-label {
                font-size: 0.75rem;
                color: #6c757d;
                margin-bottom: 0.25rem;
                display: block;
              }

              .staff-info-value {
                color: #2c3e50;
                font-weight: 500;
              }

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

              .modal-content {
                border-radius: 1rem;
              }
              .alert-info-custom {
                background-color: rgba(10, 54, 34, 0.05);
                border: none;
                border-radius: 0.75rem;
              }

              .staff-cert-item {
                margin-bottom: 0.5rem;
                display: flex;
                align-items: center;
              }

              .text-muted {
                margin-right: 0.5rem;
              }

              .fw-semibold {
                font-weight: 600;
              }
            </style>

            <!-- Add necessary scripts -->
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                const searchInput = document.getElementById("searchStaff");
                const staffCards =
                  document.querySelectorAll(".col-md-6.col-lg-4");
                const totalResults = document.getElementById("totalResults");

                function filterStaff() {
                  const searchTerm = searchInput.value.toLowerCase();
                  let visibleCount = 0;

                  staffCards.forEach((card) => {
                    const staffName = card
                      .querySelector("h5")
                      .textContent.toLowerCase();
                    if (staffName.includes(searchTerm)) {
                      card.style.display = "";
                      visibleCount++;
                    } else {
                      card.style.display = "none";
                    }
                  });

                  totalResults.textContent = visibleCount;
                }

                searchInput.addEventListener("input", filterStaff);
                filterStaff();
              });

              // View staff modal handler
              document.querySelectorAll(".view-staff").forEach((button) => {
                button.addEventListener("click", function () {
                  document.getElementById("modalStaffName").textContent =
                    this.dataset.name;

                  const modalContent = `
      <div class="row g-3">
        <div class="col-md-6">
          <div class="staff-detail-card">
            <div class="text-center mb-3">
              <div class="staff-profile-wrapper mx-auto">
                <img src="../../assets/img/avatars/1.png" alt="Staff Profile" class="staff-profile-image">
              </div>
              <h5 class="mt-3 mb-1">${this.dataset.name}</h5>
              <span class="badge bg-label-primary">${this.dataset.role}</span>
            </div>
            <div class="staff-info-item">
              <small class="text-muted d-block">Contact</small>
              <span class="fw-semibold">${this.dataset.contact}</span>
            </div>
            <div class="staff-info-item">
              <small class="text-muted d-block">Email</small>
              <span class="fw-semibold">${this.dataset.email}</span>
            </div>
            <div class="staff-info-item">
              <small class="text-muted d-block">Branch</small>
              <span class="fw-semibold">${this.dataset.branch}</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="staff-detail-card">
            <h6 class="text-primary mb-3">Professional Details</h6>
            <div class="staff-info-item">
              <small class="text-muted d-block">Role</small>
              <span class="fw-semibold">${this.dataset.role}</span>
            </div>
            <div class="staff-info-item">
              <small class="text-muted d-block">Specialization</small>
              <span class="fw-semibold">${this.dataset.specialization}</span>
            </div>
            <div class="staff-info-item">
              <small class="text-muted d-block">Joined Date</small>
              <span class="fw-semibold">${this.dataset.joined}</span>
            </div>
          </div>
        </div>
      </div>
    `;

                  document.querySelector("#staffModal .modal-body").innerHTML =
                    modalContent;
                });
              });
            </script>
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".view-staff").forEach((button) => {
                  button.addEventListener("click", function () {
                    // Update modal content
                    document.getElementById("modalStaffName").textContent =
                      this.dataset.name;
                    document.getElementById(
                      "modalStaffNameProfile"
                    ).textContent = this.dataset.name;
                    document.getElementById("modalRoleBadge").textContent =
                      this.dataset.role;
                    document.getElementById("modalContact").textContent =
                      this.dataset.contact;
                    document.getElementById("modalEmail").textContent =
                      this.dataset.email;
                    document.getElementById("modalBranch").textContent =
                      this.dataset.branch;
                    document.getElementById("modalRole").textContent =
                      this.dataset.role;
                    document.getElementById("modalSpecialization").textContent =
                      this.dataset.specialization;
                    document.getElementById("modalJoined").textContent =
                      this.dataset.joined;
                  });
                });
              });
            </script>
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".view-staff").forEach((button) => {
                  button.addEventListener("click", function () {
                    const name = this.dataset.name;

                    // Update modal content
                    document.getElementById("modalStaffName").textContent =
                      name;
                    document.getElementById(
                      "modalStaffNameProfile"
                    ).textContent = name;
                    document.getElementById("modalRoleBadge").textContent =
                      this.dataset.role;
                    document.getElementById("modalContact").textContent =
                      this.dataset.contact;
                    document.getElementById("modalEmail").textContent =
                      this.dataset.email;
                    document.getElementById("modalBranch").textContent =
                      this.dataset.branch;
                    document.getElementById("modalRole").textContent =
                      this.dataset.role;
                    document.getElementById("modalSpecialization").textContent =
                      this.dataset.specialization;
                    document.getElementById("modalJoined").textContent =
                      this.dataset.joined;

                    // Handle certifications
                    const certifications = this.dataset.certifications;
                    const certDiv = document.getElementById(
                      "modalCertifications"
                    );
                    if (certifications) {
                      const certList = certifications
                        .split(",")
                        .map(
                          (cert) => `<div class="staff-cert-item">
            <i class="ti tabler-point text-primary me-2"></i>
            ${cert.trim()}
          </div>`
                        )
                        .join("");
                      certDiv.innerHTML = certList;
                    } else {
                      certDiv.innerHTML =
                        '<p class="mb-0">No certifications listed</p>';
                    }

                    // Handle notes
                    document.getElementById("modalNotes").textContent =
                      this.dataset.notes || "No additional notes";
                  });
                });
              });
            </script>
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".view-staff").forEach((button) => {
                  button.addEventListener("click", function () {
                    // Update modal content
                    document.getElementById("modalStaffName").textContent =
                      this.dataset.name;
                    document.getElementById(
                      "modalStaffNameProfile"
                    ).textContent = this.dataset.name;
                    document.getElementById("modalRoleBadge").textContent =
                      this.dataset.role;
                    document.getElementById("modalContact").textContent =
                      this.dataset.contact;
                    document.getElementById("modalEmail").textContent =
                      this.dataset.email;
                    document.getElementById("modalBranch").textContent =
                      this.dataset.branch;
                    document.getElementById("modalRole").textContent =
                      this.dataset.role;
                    document.getElementById("modalSpecialization").textContent =
                      this.dataset.specialization;
                    document.getElementById("modalJoined").textContent =
                      this.dataset.joined;

                    // Handle certifications
                    const certifications = this.dataset.certifications;
                    const certDiv = document.getElementById(
                      "modalCertifications"
                    );
                    if (certifications) {
                      const certList = certifications
                        .split(",")
                        .map(
                          (cert) => `<div class="staff-cert-item">
                          <i class="ti tabler-point text-primary me-2"></i>
                          ${cert.trim()}
                        </div>`
                        )
                        .join("");
                      certDiv.innerHTML = certList;
                    } else {
                      certDiv.innerHTML =
                        '<p class="mb-0">No certifications listed</p>';
                    }

                    // Handle notes
                    document.getElementById("modalNotes").textContent =
                      this.dataset.notes || "No additional notes";
                  });
                });
              });
            </script>
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
        var table = $("#servicesTable").DataTable();

        // Update total employees count
        function updateTotalEmployees() {
          var visibleRows = table.page.info().recordsDisplay;
          $(".card-title span").text(visibleRows);
        }

        // Update count on filter change
        $("#branchFilter").on("change", function () {
          var selectedBranch = $(this).val();
          table.column(2).search(selectedBranch).draw();
          updateTotalEmployees();
        });

        // Initial count
        updateTotalEmployees();
      });
    </script>
  </body>
</html>

<!-- beautify ignore:end -->
