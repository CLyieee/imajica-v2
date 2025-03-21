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
    </style>
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
                        Staff Management
                      </h5>
                    </div>
                    <div class="card-body pt-6">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <!-- 1. Delivery Address -->

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
                                      style="
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                      "
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
                            <!-- Personal Information -->
                            <div class="col-md-6">
                              <label class="form-label" for="firstName"
                                >First Name</label
                              >
                              <input
                                type="text"
                                id="firstName"
                                class="form-control"
                                placeholder="First Name"
                              />
                            </div>
                            <div class="col-md-6">
                              <label class="form-label" for="lastName"
                                >Last Name</label
                              >
                              <input
                                type="text"
                                id="lastName"
                                class="form-control"
                                placeholder="Last Name"
                              />
                            </div>

                            <!-- Contact Information -->
                            <div class="col-md-6">
                              <label class="form-label" for="email"
                                >Email Address</label
                              >
                              <input
                                type="email"
                                id="email"
                                class="form-control"
                                placeholder="Email Address"
                              />
                            </div>
                            <div class="col-md-6">
                              <label class="form-label" for="phone"
                                >Contact Number</label
                              >
                              <input
                                type="tel"
                                id="phone"
                                class="form-control"
                                placeholder="Contact Number"
                              />
                            </div>

                            <!-- Work Information -->
                            <div class="col-md-6">
                              <label class="form-label" for="position"
                                >Position</label
                              >
                              <select
                                class="select2 form-select"
                                id="position"
                                data-allow-clear="true"
                              >
                                <option value="">Select Position</option>
                                <option value="aesthetician">
                                  Aesthetician
                                </option>
                                <option value="branch_manager">
                                  Branch Manager
                                </option>
                                <option value="general_manager">
                                  General Manager
                                </option>
                                <option value="receptionist">
                                  Receptionist
                                </option>
                                <option value="therapist">Therapist</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label class="form-label" for="department"
                                >Department</label
                              >
                              <select
                                class="select2 form-select"
                                id="department"
                                data-allow-clear="true"
                              >
                                <option value="">Select Department</option>
                                <option value="management">Management</option>
                                <option value="operations">Operations</option>
                                <option value="services">Services</option>
                                <option value="admin">Administration</option>
                              </select>
                            </div>

                            <!-- Additional Details -->
                            <div class="col-md-6">
                              <label class="form-label" for="joinDate"
                                >Join Date</label
                              >
                              <input
                                type="date"
                                id="joinDate"
                                class="form-control flatpickr-basic"
                              />
                            </div>
                            <div class="col-md-6">
                              <label class="form-label" for="employmentType"
                                >Employment Type</label
                              >
                              <select
                                class="select2 form-select"
                                id="employmentType"
                                data-allow-clear="true"
                              >
                                <option value="">Select Type</option>
                                <option value="full_time">Full Time</option>
                                <option value="part_time">Part Time</option>
                                <option value="contract">Contract</option>
                              </select>
                            </div>

                            <div class="col-md-12">
                              <label class="form-label" for="branch"
                                >Branch Assignment</label
                              >
                              <select
                                class="select2 form-select"
                                id="branch"
                                data-allow-clear="true"
                              >
                                <option value="">Select Branch</option>
                                <option value="pasig">Pasig City Branch</option>
                                <option value="san_mateo">
                                  San Mateo Rizal Branch
                                </option>
                                <option value="cainta">
                                  Cainta Rizal Branch
                                </option>
                              </select>
                            </div>

                            <div class="col-12">
                              <label class="form-label" for="address"
                                >Residential Address</label
                              >
                              <textarea
                                name="address"
                                class="form-control"
                                id="address"
                                rows="4"
                                placeholder="Complete Address"
                              ></textarea>
                            </div>

                            <!-- Emergency Contact -->
                            <div class="col-md-6">
                              <label class="form-label" for="emergencyContact"
                                >Emergency Contact Name</label
                              >
                              <input
                                type="text"
                                id="emergencyContact"
                                class="form-control"
                                placeholder="Emergency Contact Person"
                              />
                            </div>
                            <div class="col-md-6">
                              <label class="form-label" for="emergencyPhone"
                                >Emergency Contact Number</label
                              >
                              <input
                                type="tel"
                                id="emergencyPhone"
                                class="form-control"
                                placeholder="Emergency Contact Number"
                              />
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                              <button
                                type="submit"
                                class="btn btn-primary me-1"
                              >
                                Add Staff
                              </button>
                              <button
                                type="reset"
                                class="btn btn-label-secondary"
                              >
                                Reset
                              </button>
                            </div>
                          </div>

                          <!-- 2. Delivery Type -->

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
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const imageUpload = document.getElementById("imageUpload");
        const imagePreview = document.getElementById("imagePreview");
        const firstName = document.getElementById("firstName");
        const lastName = document.getElementById("lastName");

        function getInitials(first, last) {
          return (
            ((first ? first[0] : "") + (last ? last[0] : "")).toUpperCase() ||
            "NA"
          );
        }

        function createInitialsAvatar(initials) {
          const canvas = document.createElement("canvas");
          const context = canvas.getContext("2d");
          canvas.width = 150;
          canvas.height = 150;

          // Draw background circle
          context.fillStyle = "#0a3622";
          context.beginPath();
          context.arc(75, 75, 75, 0, Math.PI * 2);
          context.fill();

          // Draw initials
          context.font = "bold 60px Arial";
          context.fillStyle = "#FFFFFF";
          context.textAlign = "center";
          context.textBaseline = "middle";
          context.fillText(initials, 75, 75);

          return canvas.toDataURL();
        }

        // Generate avatar when names change
        [firstName, lastName].forEach((input) => {
          input.addEventListener("input", function () {
            if (!imageUpload.files.length) {
              const initials = getInitials(firstName.value, lastName.value);
              imagePreview.src = createInitialsAvatar(initials);
            }
          });
        });

        // Handle photo upload
        imageUpload.addEventListener("change", function (e) {
          const file = e.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
          } else {
            const initials = getInitials(firstName.value, lastName.value);
            imagePreview.src = createInitialsAvatar(initials);
          }
        });

        // Set default avatar on page load
        imagePreview.src = createInitialsAvatar("NA");
      });
    </script>
  </body>

  <!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/form-layouts-sticky.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:27:42 GMT -->
</html>

<!-- beautify ignore:end -->
