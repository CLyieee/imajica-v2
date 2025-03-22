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

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="../../assets/js/config.js"></script>
    <script>
      const serviceRoutes = {
          add: "{{ route('add.service') }}",
          getAll: "{{ route('get.services') }}",
          getByBranch: "{{ route('get.services.by.branch', ['branch_code' => '__BRANCH_CODE__']) }}",
          get: "{{ route('get.service', ['id' => '__ID__']) }}",
          update: "{{ route('update.service', ['id' => '__ID__']) }}",
          delete: "{{ route('delete.service', ['id' => '__ID__']) }}"
      };
      
      const branchRoutes = {
          getAll: "{{ route('get.branches') }}"
      };
    </script>
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
                      style="background-color: #0A3622;"
                    >
                      <h5 class="card-title mb-sm-0 me-2 text-white">
                        Services Management
                      </h5>
                    </div>
                    <div class="card-body pt-6">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <!-- 1. Delivery Address -->
                          <form id="addServiceForm">
                            @csrf
                            <div class="row g-6">
                              <div class="col-md-6">
                                <label class="form-label" for="service_name">Services Name</label>
                                <input
                                  type="text"
                                  id="service_name"
                                  name="service_name"
                                  class="form-control"
                                  placeholder="Services Name"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Branch</label>
                                <select
                                  class="select2 form-select branch-select"
                                  name="branch_code"
                                  id="branch_code"
                                  data-allow-clear="true"
                                  required
                                >
                                  <option value="">Select Branch</option>
                                  <!-- Branch options will be loaded dynamically -->
                                </select>
                              </div>

                              <div class="col-12">
                                <label class="form-label" for="description">Description</label>
                                <textarea
                                  name="description"
                                  class="form-control"
                                  id="description"
                                  rows="4"
                                  placeholder="Service Description"
                                ></textarea>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="duration">Duration</label>
                                <input
                                  type="number"
                                  id="duration"
                                  name="duration"
                                  class="form-control"
                                  placeholder="In Minutes"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Service Category</label>
                                <select
                                  class="select2 form-select"
                                  name="service_category"
                                  id="service_category"
                                  data-allow-clear="true"
                                  required
                                >
                                  <option value="">Select Service Category</option>
                                  <option value="Facials">Facials</option>
                                  <option value="Body Contouring">Body Contouring</option>
                                  <option value="Laser Treatments">Laser Treatments</option>
                                  <option value="Injectables">Injectables</option>
                                  <option value="Others">Others</option>
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="service_cost">Service Cost</label>
                                <input
                                  type="number"
                                  step="0.01"
                                  id="service_cost"
                                  name="service_cost"
                                  class="form-control"
                                  placeholder="Amount"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="loyalty_pts">Loyalty Reward Points</label>
                                <input
                                  type="number"
                                  id="loyalty_pts"
                                  name="loyalty_pts"
                                  class="form-control"
                                  placeholder="Loyalty Reward Points"
                                />
                              </div>
                            </div>

                            <br />
                            <div class="col-sm-2 col-4 d-grid">
                              <button type="submit" class="btn btn-primary" id="addServiceBtn">
                                Add Services
                              </button>
                            </div>
                          </form>
                          <br />
                          <!-- Success/Error Messages -->
                          <div id="responseMessage" style="display: none;" class="alert mt-3"></div>
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

    <!-- Main JS -->

    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>
    
    <!-- AJAX Form Submission Script -->
    <script>
      $(document).ready(function() {
        // Load branches for select dropdown
        loadBranchOptions();
        
        $('#addServiceForm').on('submit', function(e) {
          e.preventDefault();
          
          // Disable submit button during form submission
          $('#addServiceBtn').prop('disabled', true).html('Processing...');
          
          // Get form data
          const formData = $(this).serialize();
          
          // Make AJAX request
          $.ajax({
            url: "{{ route('add.service') }}",
            type: "POST",
            data: formData,
            dataType: 'json',
            success: function(response) {
              if(response.status) {
                $('#responseMessage')
                  .removeClass('alert-danger')
                  .addClass('alert-success')
                  .html(response.message)
                  .show();
                
                // Reset form
                $('#addServiceForm')[0].reset();
                $('.select2').val('').trigger('change');
              } else {
                $('#responseMessage')
                  .removeClass('alert-success')
                  .addClass('alert-danger')
                  .html(response.message)
                  .show();
              }
            },
            error: function(xhr) {
              let errorMessage = 'An error occurred while processing your request.';
              
              if(xhr.responseJSON && xhr.responseJSON.errors) {
                errorMessage = '<ul>';
                for(let field in xhr.responseJSON.errors) {
                  errorMessage += `<li>${xhr.responseJSON.errors[field][0]}</li>`;
                }
                errorMessage += '</ul>';
              } else if(xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
              }
              
              $('#responseMessage')
                .removeClass('alert-success')
                .addClass('alert-danger')
                .html(errorMessage)
                .show();
            },
            complete: function() {
              // Re-enable submit button
              $('#addServiceBtn').prop('disabled', false).html('Add Services');
            }
          });
        });
        
        // Function to load branch options for select dropdown
        function loadBranchOptions() {
          $.ajax({
            url: branchRoutes.getAll,
            type: "GET",
            dataType: 'json',
            success: function(response) {
              if(response.status) {
                populateBranchOptions(response.data);
              } else {
                console.error('Failed to load branches:', response.message);
              }
            },
            error: function(xhr) {
              console.error('AJAX error when loading branches:', xhr);
            }
          });
        }
        
        // Function to populate branch select options
        function populateBranchOptions(branches) {
          const select = $('#branch_code');
          
          // Clear existing options except the default one
          const defaultOption = select.find('option:first');
          select.empty().append(defaultOption);
          
          // Add branch options
          branches.forEach(branch => {
            select.append(`<option value="${branch.branch_code}">${branch.branch_name}</option>`);
          });
          
          // Refresh Select2 if it's used
          if ($.fn.select2) {
            select.trigger('change');
          }
        }
      });
    </script>
  </body>

  <!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/form-layouts-sticky.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:27:42 GMT -->
</html>
