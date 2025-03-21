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
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/flatpickr/flatpickr.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css"
    />

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/select2/select2.css"
    />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../../assets/js/config.js"></script>

    <!-- Add this CSS to the head section -->
    <style>
      .profile-upload-container {
        width: 200px;
        margin-bottom: 2rem;
      }

      .avatar-upload {
        position: relative;
        text-align: center;
      }

      .avatar-preview {
        width: 150px;
        height: 150px;
        position: relative;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #0a3622;
        box-shadow: 0 0 20px rgba(10, 54, 34, 0.15);
        margin: 0 auto;
      }

      .avatar-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .avatar-edit label {
        transition: all 0.3s ease;
      }

      .avatar-edit label:hover {
        background-color: #0a3622;
        border-color: #0a3622;
      }

      /* Add to your existing styles */
      .menu-item.active > .menu-link {
        background-color: rgba(10, 54, 34, 0.1) !important;
        color: #0a3622 !important;
      }

      .menu-sub .menu-item.active > .menu-link {
        background-color: rgba(10, 54, 34, 0.1) !important;
      }

      /* Add to your existing styles in new-patient.html */
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
        margin-top: 0.25rem;
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
        background-color: #0a3622;
      }

      .modal-xl {
        max-width: 1140px;
      }

      .modal-content {
        border-radius: 1rem;
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

      /* Add to your existing styles in new-patient.html */
      .menu-item.active > .menu-link {
        background-color: rgba(10, 54, 34, 0.1) !important;
        color: #0a3622 !important;
      }

      .menu-item.active.open > .menu-link {
        background-color: rgba(10, 54, 34, 0.1) !important;
        color: #0a3622 !important;
      }

      .menu-sub .menu-item.active > .menu-link {
        background-color: rgba(10, 54, 34, 0.1) !important;
        color: #0a3622 !important;
      }

      .menu-vertical .menu-item .menu-link:hover {
        background-color: rgba(10, 54, 34, 0.1) !important;
        color: #0a3622 !important;
      }

      .menu-sub .menu-item .menu-link:hover {
        background-color: rgba(10, 54, 34, 0.1) !important;
        color: #0a3622 !important;
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

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Sticky Actions -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div
                      class="card-header sticky-element d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row"
                      style="background-color: #0a3622"
                    >
                      <h5 class="card-title mb-sm-0 me-2 text-white">
                        Patient Information
                      </h5>
                    </div>
                    <div class="card-body pt-6">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <!-- Add this after the header and before the first form group -->
                          <div class="row g-6">
                            <div class="col-12 text-center mb-4">
                              <div class="profile-upload-container mx-auto">
                                <div class="avatar-upload">
                                  <div class="avatar-preview">
                                    <img
                                      id="imagePreview"
                                      src="../../assets/img/avatars/default-avatar.png"
                                      alt="Profile Preview"
                                      class="rounded-circle"
                                      style="width: 100%; height: 100%; object-fit: cover;"
                                    />
                                  </div>
                                  <div class="avatar-edit">
                                    <input
                                      type="file"
                                      id="imageUpload"
                                      accept=".png, .jpg, .jpeg"
                                      class="d-none"
                                    />
                                    <label
                                      for="imageUpload"
                                      class="btn btn-primary btn-sm mt-2"
                                    >
                                      <i class="ti tabler-upload me-1"></i
                                      >Upload Photo
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- 1. Delivery Address -->

                          <div class="row g-6">
                            <div class="col-md-6">
                              <label class="form-label" for="firstName">First Name</label>
                              <input type="text" id="firstName" class="form-control" placeholder="First Name" required />
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="lastName">Last Name</label>
                              <input type="text" id="lastName" class="form-control" placeholder="Last Name" required />
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="email">Email Address</label>
                              <input type="email" id="email" class="form-control" placeholder="Email Address" required />
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="phone">Contact Number</label>
                              <input type="tel" id="phone" class="form-control" placeholder="Contact Number" required />
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="birthDate">Date of Birth</label>
                              <input type="date" id="birthDate" class="form-control" required />
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="gender">Gender</label>
                              <select id="gender" class="form-select" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                              </select>
                            </div>

                            <div class="col-md-6">
                              <label class="form-label">Membership Tier</label>
                              <select class="select2 form-select" data-allow-clear="true" required>
                                <option value="">Select Membership Tier</option>
                                <option value="basic">Basic</option>
                                <option value="silver">Silver</option>
                                <option value="gold">Gold</option>
                                <option value="vip">VIP</option>
                              </select>
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="occupation">Occupation</label>
                              <input type="text" id="occupation" class="form-control" placeholder="Occupation" />
                            </div>

                            <div class="col-12">
                              <label class="form-label" for="address">Address</label>
                              <textarea name="address" class="form-control" id="address" rows="3" placeholder="Full Address" required></textarea>
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="emergencyContact">Emergency Contact Name</label>
                              <input type="text" id="emergencyContact" class="form-control" placeholder="Emergency Contact Name" />
                            </div>

                            <div class="col-md-6">
                              <label class="form-label" for="emergencyPhone">Emergency Contact Number</label>
                              <input type="tel" id="emergencyPhone" class="form-control" placeholder="Emergency Contact Number" />
                            </div>

                            <div class="col-12">
                              <label class="form-label" for="allergies">Allergies / Medical Concerns</label>
                              <textarea name="allergies" class="form-control" id="allergies" rows="3" 
                                placeholder="Please list any allergies, medical conditions, or concerns"></textarea>
                            </div>

                            <div class="col-12">
                              <label class="form-label" for="medications">Current Medications</label>
                              <textarea name="medications" class="form-control" id="medications" rows="2" 
                                placeholder="List any current medications"></textarea>
                            </div>

                            <div class="col-12">
                              <label class="form-label" for="adminNotes">Notes From Admin</label>
                              <textarea name="adminNotes" class="form-control" id="adminNotes" rows="3" 
                                placeholder="Administrative notes about the patient"></textarea>
                            </div>

                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required />
                                <label class="form-check-label" for="terms">
                                  I agree to the terms and conditions and privacy policy
                                </label>
                              </div>
                            </div>

                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Add Patient</button>
                              <button type="reset" class="btn btn-secondary">Reset Form</button>
                            </div>
                          </div>

                          

                          
                          </div>

                          <!-- 2. Delivery Type -->

                          <br />
                         
                          <br />

                          <!-- 4. Payment Method -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Sticky Actions -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column"
                >
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    Developed by
                    <a
                      href="https://intra-code.com/"
                      target="_blank"
                      class="footer-link"
                      >Intracode IT Solutions</a
                    >
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

    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <!-- Main JS -->

    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>
    <script src="../../assets/js/forms-pickers.js"></script>

    <!-- Add this JavaScript before the closing body tag -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const imageUpload = document.getElementById("imageUpload");
        const imagePreview = document.getElementById("imagePreview");
        const firstName = document.getElementById("firstName");
        const lastName = document.getElementById("lastName");

        function getInitials(first, last) {
          const firstInitial = first ? first[0] : '';
          const lastInitial = last ? last[0] : '';
          return (firstInitial + lastInitial).toUpperCase() || 'NA';
        }

        function createInitialsAvatar(initials) {
          const canvas = document.createElement("canvas");
          const context = canvas.getContext("2d");
          canvas.width = 150;
          canvas.height = 150;

          // Background circle
          context.fillStyle = "#0a3622"; // Your theme color
          context.beginPath();
          context.arc(75, 75, 75, 0, Math.PI * 2);
          context.fill();

          // Text
          context.font = "bold 60px Arial";
          context.fillStyle = "#FFFFFF";
          context.textAlign = "center";
          context.textBaseline = "middle";
          context.fillText(initials, 75, 75);

          return canvas.toDataURL();
        }

        // Update avatar when name changes
        [firstName, lastName].forEach(input => {
          input.addEventListener("input", function() {
            if (!imageUpload.files.length) {
              const initials = getInitials(firstName.value, lastName.value);
              imagePreview.src = createInitialsAvatar(initials);
            }
          });
        });

        // Handle image upload
        imageUpload.addEventListener("change", function(e) {
          const file = e.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
              imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
          } else {
            const initials = getInitials(firstName.value, lastName.value);
            imagePreview.src = createInitialsAvatar(initials);
          }
        });

        // Set default avatar on load
        imagePreview.src = createInitialsAvatar('NA');
      });
    </script>
    <button
      class="btn btn-sm btn-success view-patient"
      data-bs-toggle="modal"
      data-bs-target="#patientModal"
      data-name="Sofia Mendoza"
      data-contact="+63 917 123 4567"
      data-email="sofia.mendoza@email.com"
      data-address="123 Makati Avenue, Makati City"
      data-membership="Gold"
      data-points="750"
      data-joined="2023-01-15"
      data-medical="Allergic to certain essential oils, Sensitive skin, High blood pressure, Currently taking anticoagulants"
    >
      View
    </button>
    <script>
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
    <script>
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
        }
      });
    </script>
    <script>
      // Add to your existing script
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
        }
      });
    </script>
  </body>

  <!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/form-layouts-sticky.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:27:42 GMT -->
</html>

<!-- beautify ignore:end -->
