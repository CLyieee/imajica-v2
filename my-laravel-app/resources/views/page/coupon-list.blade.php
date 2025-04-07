@extends('layouts.app')

<!DOCTYPE html>

<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default"
  data-assets-path="{{ asset('assets/') }}"
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
      content="{{ asset('assets/img/vuexy-hero-image.png') }}"
    />
    <meta property="og:description" content="Imajica Booking System." />
    <meta property="og:site_name" content="Pixinvent" />
    <link rel="canonical" href="Imajica Booking System" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}"
    />

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}"
    />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
    />

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/select2/select2.css') }}"
    />

    <!-- Page CSS -->

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}"
    />
    <!-- Row Group CSS -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}"
    />
    <!-- Form Validation -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/%40form-validation/form-validation.css') }}"
    />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('components.sidebar')

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

            {{-- <nav
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
                          src="{{ asset('assets/img/avatars/1.png') }}"
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
                                  src="{{ asset('assets/img/avatars/1.png') }}"
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
            </nav> --}}

          <!-- / Navbar -->

          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <!-- Table Header with Search -->
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="card-title mb-0">Coupon List</h5>
                  <a class="btn btn-primary" href="{{ route('page.new-coupon') }}">
                    <i class="ti tabler-plus me-1"></i> Add New Coupon
                  </a>
                </div>

                <!-- Success/Error Messages -->
                <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

                <!-- Branch Filter -->
                <div class="px-3 py-2">
                  <label for="branchFilter" class="form-label">Select Branch:</label>
                  <select id="branchFilter" class="form-select w-auto d-inline-block">
                    <option value="">All Branches</option>
                    @foreach($branches as $branch)
                      <option value="{{ $branch->branch_code }}">{{ $branch->branch_name }}</option>
                    @endforeach
                  </select>
                </div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table class="table table-striped" id="couponTable">
                    <thead class="table-light">
                      <tr>
                        <th>Coupon Code</th>
                        <th>Coupon Name</th>
                        <th>Branch Name</th>
                        <th>Discount Value</th>
                        <th>Discount Type</th>
                        <th>Validity Period</th>
                        <th>Applicable Service</th> <!-- Add this column -->
                        <th>Status</th>            <!-- Moved to second-to-last -->
                        <th class="text-center">Actions</th>  <!-- Moved to last -->
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($coupons as $coupon)
                      <tr>
                        <td>{{ $coupon->coupon_code }}</td>
                        <td>{{ $coupon->discount_name }}</td>
                        <td>{{ $coupon->branch ? $coupon->branch->branch_name : $coupon->branch_code }}</td>
                        <td>
                          @if($coupon->discount_type == 'percentage')
                            {{ $coupon->discount_value }}%
                          @else
                            ₱{{ number_format($coupon->discount_value, 2) }}
                          @endif
                        </td>
                        <td><span class="badge bg-label-info">{{ ucfirst($coupon->discount_type) }}</span></td>
                        <td>{{ $coupon->start_date }} - {{ $coupon->end_date }}</td>
                        <td>{{ $coupon->applicable_service }}</td> <!-- Add this column -->
                        <td>  <!-- Moved to second-to-last -->
                          @php
                            $now = \Carbon\Carbon::now();
                            $startDate = \Carbon\Carbon::parse($coupon->start_date);
                            $endDate = \Carbon\Carbon::parse($coupon->end_date);
                          @endphp
                          @if($now->between($startDate, $endDate))
                            <span class="badge bg-label-success">Active</span>
                          @else
                            <span class="badge bg-label-danger">Expired</span>
                          @endif
                        </td>
                        <td class="text-center"> <!-- Moved to last -->
                          <div class="d-flex gap-2 justify-content-center">
                            <button class="btn btn-sm btn-success view-coupon" 
                              data-coupon-code="{{ $coupon->coupon_code }}"
                              data-discount-name="{{ $coupon->discount_name }}"
                              data-description="{{ $coupon->description }}">
                              <i class="ti tabler-eye me-1"></i> View
                            </button>
                            <button class="btn btn-sm btn-info edit-coupon"
                              data-coupon-code="{{ $coupon->coupon_code }}"
                              data-discount-name="{{ $coupon->discount_name }}"
                              data-description="{{ $coupon->description }}"
                              data-discount-value="{{ $coupon->discount_value }}"
                              data-discount-type="{{ $coupon->discount_type }}">
                              <i class="ti tabler-edit me-1"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger delete-coupon" 
                              data-coupon-code="{{ $coupon->coupon_code }}"
                              data-discount-name="{{ $coupon->discount_name }}">
                              <i class="ti tabler-trash me-1"></i> Delete
                            </button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <br />
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Edit Coupon Modal -->
    <div class="modal fade" id="editCouponModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #0a3622">
            <h5 class="modal-title text-white">Edit Coupon</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editCouponForm" method="POST" action="{{ service.update }}">
              @csrf
              @method('PUT')
              <input type="hidden" id="edit_coupon_code" name="coupon_code">
              <div class="mb-3">
                <label class="form-label" for="edit_discount_name">Coupon Name</label>
                <input type="text" id="edit_discount_name" name="discount_name" class="form-control" required>
                <div class="invalid-feedback" id="edit_discount_name_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_description">Description</label>
                <textarea id="edit_description" name="description" class="form-control" rows="3" required></textarea>
                <div class="invalid-feedback" id="edit_description_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_discount_type">Discount Type</label>
                <select id="edit_discount_type" name="discount_type" class="form-select" required>
                  <option value="fixed">Fixed Amount</option>
                  <option value="percentage">Percentage</option>
                </select>
                <div class="invalid-feedback" id="edit_discount_type_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_discount_value">Discount Value</label>
                <input type="number" id="edit_discount_value" name="discount_value" class="form-control" required>
                <div class="invalid-feedback" id="edit_discount_value_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_applicable_service">Applicable Service</label>
                <select id="edit_applicable_service" name="applicable_service" class="form-select" required>
                  <option value="All Services">All Services</option>
                  <option value="Spa">Spa</option>
                  <option value="Massage">Massage</option>
                  <option value="Facial">Facial</option>
                </select>
                <div class="invalid-feedback" id="edit_applicable_service_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_start_end_date">Start and End Date</label>
                <input type="text" id="edit_start_end_date" name="start_end_date" class="form-control flatpickr-range" required>
                <div class="invalid-feedback" id="edit_start_end_date_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_new_customer">New Customer Only</label>
                <select id="edit_new_customer" name="new_customer" class="form-select" required>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                <div class="invalid-feedback" id="edit_new_customer_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_branch_code">Branch</label>
                <select id="edit_branch_code" name="branch_code" class="form-select" required>
                  @foreach($branches as $branch)
                    <option value="{{ $branch->branch_code }}">{{ $branch->branch_name }}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback" id="edit_branch_code_error"></div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update Coupon</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Coupon Form (Hidden) -->
    <form id="deleteCouponForm" method="POST" action="/coupon/delete" style="display: none;">
      @csrf
      @method('DELETE')
      <input type="hidden" id="delete_coupon_code" name="coupon_code">
    </form>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/%40algolia/autocomplete-js.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/cleave-zen/cleave-zen.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <!-- Flat Picker -->
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('assets/vendor/libs/%40form-validation/popular.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/%40form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/%40form-validation/auto-focus.js') }}"></script>
    
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Filter Branch Script -->
    <script>
      $(document).ready(function() {
        $('#branchFilter').change(function() {
          var branchCode = $(this).val();
          window.location.href = '/coupon-list' + branchCode;
        });
      });
    </script>
    
    <!-- DataTable Initialization -->
    <script>
      $(document).ready(function() {
        $('#couponTable').DataTable({
            responsive: true,
        });
      });
    </script>
    
    <!-- Custom Script for Coupon Management -->
    <script>
      $(document).ready(function() {
        // SweetAlert default configuration to appear above the modal
        const swalConfig = {
          customClass: {
            container: 'swal-container-class',
            popup: 'swal-popup-class'
          },
          backdrop: true,
          allowOutsideClick: false
        };
        
        // Add custom CSS to ensure SweetAlert appears above modal
        $('<style>')
          .prop('type', 'text/css')
          .html(`
            .swal-container-class {
              z-index: 2000 !important;
            }
            .swal-popup-class {
              z-index: 2001 !important;
            }
            .swal2-backdrop-show {
              z-index: 1999 !important;
            }
            .modal-backdrop {
              z-index: 1050 !important;
            }
            .modal {
              z-index: 1055 !important;
            }
          `)
          .appendTo('head');

        // Display success/error messages
        @if(session('success'))
          Swal.fire({
            ...swalConfig,
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            timer: 3000,
            showConfirmButton: false
          });
        @endif

        @if(session('error'))
          Swal.fire({
            ...swalConfig,
            icon: 'error',
            title: 'Error',
            text: "{{ session('error') }}",
            timer: 5000,
            showConfirmButton: true
          });
        @endif

        // Check for SweetAlert2 library
        if (typeof Swal === 'undefined') {
          console.error('SweetAlert2 library is missing even though it was included in the page');
          alert('SweetAlert2 library failed to load properly. Please check your internet connection.');
        } else {
          console.log("SweetAlert2 is correctly loaded");
        }

        // Debug information
        console.log("Document ready triggered");
        console.log("Edit coupon buttons found:", $('.edit-coupon').length);
        console.log("Delete coupon buttons found:", $('.delete-coupon').length);
        console.log("Modal element exists:", $('#editCouponModal').length);

        // Initialize the date range picker
        try {
          $('.flatpickr-range').flatpickr({
            mode: 'range',
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d"
          });
          console.log("Flatpickr initialized successfully");
        } catch (e) {
          console.error("Flatpickr initialization error:", e);
          Swal.fire({
            ...swalConfig,
            icon: 'error',
            title: 'Initialization Error',
            html: 'Failed to initialize date picker:<br>' + e.message,
            showConfirmButton: true
          });
        }

        // Handle edit coupon button clicks
        $('.edit-coupon').on('click', function() {
          try {
            const couponCode = $(this).data('coupon-code');
            const discountName = $(this).data('discount-name');
            const discountValue = $(this).data('discount-value');
            const discountType = $(this).data('discount-type');
            const applicableService = $(this).data('applicable-service');
            
            console.log("Edit button clicked for coupon:", couponCode);
            console.log("Button data attributes:", {
              couponCode,
              discountName,
              discountValue,
              discountType,
              applicableService
            });
            
            // Directly populate known fields without AJAX
            $('#edit_coupon_code').val(couponCode);
            $('#edit_discount_name').val(discountName);
            $('#edit_discount_value').val(discountValue);
            $('#edit_discount_type').val(discountType);
            $('#edit_applicable_service').val(applicableService);
            
            // Show the modal immediately with known data
            $('#editCouponModal').modal('show');
            
            // Fetch additional data via AJAX
            $.ajax({
              url: "/coupon/get",
              type: "GET",
              data: { coupon_code: couponCode },
              success: function(response) {
                console.log("AJAX success response:", response);
                
                // Populate the form fields with additional data
                $('#edit_description').val(response.description || '');
                $('#edit_start_end_date').val(response.start_end_date || '');
                $('#edit_new_customer').val(response.new_customer || 'No');
                $('#edit_branch_code').val(response.branch_code || '');
                
                // Initialize/update the flatpickr instance
                if (response.start_end_date) {
                  $('.flatpickr-range').flatpickr({
                    mode: 'range',
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                    defaultDate: response.start_end_date
                  });
                }
              },
              error: function(xhr, status, error) {
                console.error("AJAX error:", error);
                console.log("Status:", status);
                console.log("Response:", xhr.responseText);
                
                let errorMessage = 'Could not load all coupon data. Some fields may be incomplete.';
                
                // Show error message but keep modal open
                Swal.fire({
                  ...swalConfig,
                  icon: 'warning',
                  title: 'Warning',
                  html: errorMessage,
                  showConfirmButton: true
                });
              }
            });
          } catch (e) {
            console.error("Error in edit button click handler:", e);
            Swal.fire({
              ...swalConfig,
              icon: 'error',
              title: 'Error',
              html: 'An error occurred while processing your request:<br>' + e.message,
              showConfirmButton: true
            });
          }
        });

        // Handle form submission with confirmation
        $('#editCouponForm').on('submit', function(e) {
          e.preventDefault();
          
          // Hide the modal before showing SweetAlert
          try {
            $('#editCouponModal').modal('hide');
          } catch (e) {
            console.error("Error hiding modal:", e);
            // Continue anyway
          }
          
          setTimeout(() => {
            Swal.fire({
              ...swalConfig,
              title: 'Confirm Update',
              text: 'Are you sure you want to update this coupon?',
              icon: 'question',
              showCancelButton: true,
              confirmButtonText: 'Yes, update it!',
              cancelButtonText: 'Cancel',
              confirmButtonColor: '#0a3622',
              cancelButtonColor: '#d33'
            }).then((result) => {
              if (result.isConfirmed) {
                // Submit the form normally
                try {
                  this.submit();
                } catch (e) {
                  console.error("Error submitting form:", e);
                  Swal.fire({
                    ...swalConfig,
                    icon: 'error',
                    title: 'Form Submission Error',
                    html: 'Error submitting form:<br>' + e.message,
                    showConfirmButton: true
                  });
                }
              } else {
                // If canceled, show the modal again
                try {
                  $('#editCouponModal').modal('show');
                } catch (e) {
                  console.error("Error showing modal after cancellation:", e);
                  Swal.fire({
                    ...swalConfig,
                    icon: 'error',
                    title: 'Modal Error',
                    html: 'Error reopening modal after cancellation:<br>' + e.message,
                    showConfirmButton: true
                  });
                }
              }
            });
          }, 200); // Small delay to ensure modal is fully hidden
        });

        // Handle delete coupon button clicks
        $('.delete-coupon').on('click', function() {
          try {
            const couponCode = $(this).data('coupon-code');
            const discountName = $(this).data('discount-name');
            
            console.log("Delete button clicked for coupon:", couponCode);
            console.log("Button data attributes:", { couponCode, discountName });
            
            if (!couponCode) {
              throw new Error("Coupon code not found in data attributes");
            }
            
            // Set the coupon code in the hidden delete form
            $('#delete_coupon_code').val(couponCode);
            console.log("Delete form coupon_code set to:", $('#delete_coupon_code').val());
            
            // Show delete confirmation
            Swal.fire({
              ...swalConfig,
              title: 'Confirm Delete',
              html: `Are you sure you want to delete coupon <strong>${discountName}</strong>?<br>This action cannot be undone.`,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'Cancel',
              confirmButtonColor: '#d33',
              cancelButtonColor: '#6c757d'
            }).then((result) => {
              if (result.isConfirmed) {
                // Submit the delete form
                try {
                  console.log("Submitting delete form for coupon code:", couponCode);
                  console.log("Delete form action:", $('#deleteCouponForm').attr('action'));
                  $('#deleteCouponForm').submit();
                } catch (e) {
                  console.error("Error submitting delete form:", e);
                  Swal.fire({
                    ...swalConfig,
                    icon: 'error',
                    title: 'Delete Error',
                    html: 'Error submitting delete form:<br>' + e.message +
                          '<br>Form action: ' + $('#deleteCouponForm').attr('action'),
                    showConfirmButton: true
                  });
                }
              }
            });
          } catch (e) {
            console.error("Error in delete button click handler:", e);
            Swal.fire({
              ...swalConfig,
              icon: 'error',
              title: 'Delete Error',
              html: 'An error occurred while processing your delete request:<br>' + e.message,
              showConfirmButton: true
            });
          }
        });
        
        // Debug: Check if Bootstrap is loaded correctly
        if (typeof $.fn.modal === 'undefined') {
          console.error("Bootstrap modal plugin is not loaded!");
          Swal.fire({
            ...swalConfig,
            icon: 'error',
            title: 'Bootstrap Error',
            html: 'Bootstrap modal plugin is not loaded properly.<br>Check your console for more details.',
            showConfirmButton: true
          });
        } else {
          console.log("Bootstrap modal plugin is available");
          // Force initialize the modal
          try {
            $('#editCouponModal').modal({
              backdrop: true,
              keyboard: true,
              focus: true,
              show: false
            });
            console.log("Modal initialized successfully");
          } catch (e) {
            console.error("Error initializing modal:", e);
          }
        }
        
        // Verify that SweetAlert2 is loaded
        if (typeof Swal !== 'undefined') {
          console.log("SweetAlert2 is loaded correctly");
        }
      });
    </script>
  </body>
</html>
