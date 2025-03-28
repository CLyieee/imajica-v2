@extends('layouts.app')
@extends('layouts.layout-collapsed-menu-dark')
@extends('layouts.layout-container-dark') 
@extends('layouts.layout-content-navbar-and-sidebar-dark')
@extends('layouts.layout-without-navbar-dark')
@extends('layouts.layout-content-navbar-dark')
@extends('layouts.layout-fluid-dark')
@extends('layouts.layout-without-menu-dark')

<!DOCTYPE html>

<html lang="en" class="layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-skin="default"
  data-assets-path="../../assets/" data-template="vertical-menu-template" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Imajica Booking System</title>
  <meta name="description" content="Imajica Booking System" />
  <meta name="keywords" content="Imajica Booking System" />
  <meta property="og:title" content="Imajica Booking System" />
  <meta property="og:type" content="product" />
  <meta property="og:url" content="Imajica Booking System" />
  <meta property="og:image" content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png" />
  <meta property="og:description" content="Imajica Booking System." />
  <meta property="og:site_name" content="Pixinvent" />
  <link rel="canonical" href="Imajica Booking System" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="logo.png" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />
  <!-- Core CSS -->
  <!-- build:css assets/vendor/css/theme.css  -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />
  <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../../assets/vendor/libs/fullcalendar/fullcalendar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/%40form-validation/form-validation.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <!-- Page CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/pages/app-calendar.css" />
  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../assets/js/config.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <div class="menu-mobile-toggler d-xl-none rounded-1">
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
          <i class="ti tabler-menu icon-base"></i>
          <i class="ti tabler-chevron-right icon-base"></i>
        </a>
      </div>

      <!-- Include sidebar component -->
      @include('components.sidebar')
      
      <!-- Rest of the existing body content -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
              <i class="icon-base ti tabler-menu-2 icon-md"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                  <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                </a>
              </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-md-auto">
              <!--/ Language -->
              <!-- Style Switcher -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                  <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                  <li>
                    <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light" aria-pressed="false">
                      <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                      <span><i class="icon-base ti tabler-moon-stars icon-22px me-3" data-icon="moon-stars"></i>Dark</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system" aria-pressed="false">
                      <span><i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3" data-icon="device-desktop-analytics"></i>System</span>
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
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2">
                          <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
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
                      <i class="icon-base ti tabler-user me-3 icon-md"></i><span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="icon-base ti tabler-settings me-3 icon-md"></i><span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1 mx-n2"></div>
                  </li>
                  <li>
                    <div class="d-grid px-2 pt-2 pb-1">
                      <a class="btn btn-sm btn-danger d-flex" href="#" target="_blank">
                        <small class="align-middle">Logout</small>
                        <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
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
            <div class="card app-calendar-wrapper">
              <div class="row g-0">
                <!-- Calendar Sidebar -->
                <div class="col app-calendar-sidebar border-end" id="app-calendar-sidebar">
                  <div class="border-bottom p-6 my-sm-0 mb-4">
                    <button class="btn btn-primary btn-toggle-sidebar w-100" data-bs-toggle="offcanvas" data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
                      <i class="icon-base ti tabler-plus icon-16px me-2"></i>
                      <span class="align-middle">Create New Booking</span>
                    </button>
                  </div>
                  <div class="px-3 pt-2">
                    <!-- inline calendar (flatpicker) -->
                    <div class="inline-calendar"></div>
                  </div>
                  <hr class="mb-6 mx-n4 mt-3" />
                  <div class="px-6 pb-2">
                    <!-- Filter -->
                    <div>
                      <h5>Filter</h5>
                    </div>
                    <div class="form-check form-check-secondary mb-5 ms-2">
                      <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked />
                      <label class="form-check-label" for="selectAll">Pending</label>
                    </div>
                    s
                    <div class="app-calendar-events-filter text-heading">
                      <div class="form-check mb-5 ms-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-business" data-value="business" checked />
                        <label class="form-check-label" for="select-business">Paid</label>
                      </div>
                      <div class="form-check form-check-danger mb-5 ms-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-personal" data-value="personal" checked />
                        <label class="form-check-label" for="select-personal">Cancelled</label>
                      </div>
                      <div class="form-check form-check-success mb-5 ms-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-family" data-value="family" checked />
                        <label class="form-check-label" for="select-family">Completed</label>
                      </div>
                      <div class="form-check form-check-warning mb-5 ms-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-holiday" data-value="holiday" checked />
                        <label class="form-check-label" for="select-holiday">No Show</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Calendar Sidebar -->
                <!-- Calendar & Modal -->
                <div class="col app-calendar-content">
                  <div class="card shadow-none border-0">
                    <div class="card-body pb-0">
                      <!-- FullCalendar -->
                      <div id="calendar"></div>
                    </div>
                  </div>
                  <div class="app-overlay"></div>
                  <!-- FullCalendar Offcanvas -->

                  <form method='post' action="{{ route('booking.create')}}">
                  @csrf
                  @method('POST')
                  <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar" aria-labelledby="addEventSidebarLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Booking</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <div class="event-form pt-0">
                        <div class="mb-5">
                          <label class="form-label" for="service_id">Select Services</label>
                          <select class="select2 form-select" name="service_id" id="service_id">
                            @foreach ($services as $service)
                            <option value="{{$service->service_id}}">{{$service->service_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-5">
                          <label class="form-label" for="status">Status</label>
                          <select class="select2 form-select" name="status" id="status">
                            <option selected>Pending</option>
                            <option>Paid</option>
                            <option>Cancelled</option>
                            <option>Completed</option>
                            <option>No Show</option>
                          </select>
                        </div>
                        <div class="mb-5 form-control-validation">
                          <label class="form-label" for="start_date">Start Date and Time</label>
                          <input type="text" class="form-control flatpickr-input" id="start_date" name="start_date" placeholder="YYYY-MM-DD HH:MM" />
                        </div>
                        <div class="mb-5 form-control-validation">
                          <label class="form-label" for="end_date">End Date and Time</label>
                          <input type="text" class="form-control flatpickr-input" id="end_date" name="end_date" placeholder="YYYY-MM-DD HH:MM" />
                        </div>
                        <div class="mb-4">
                          <label for="id" class="form-label">Assigned Staff</label>
                          <select id="id" name="id" class="form-select select2">
                            <option value="">Select a staff member</option>
                            @foreach ($staffs as $staff)
                            <option value="{{ $staff->id }}">{{ $staff->firstname }} {{ $staff->lastname }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-4">
                          <label for="branch_code" class="form-label">Select Branch</label>
                          <select id="branch_code" name="branch_code" class="form-select">
                            @foreach ($branches as $branch)
                            <option value="{{$branch->branch_code}}">{{$branch->branch_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <!-- Display validation errors with SweetAlert -->
                        @if ($errors->any())
                        <div class="alert alert-danger d-none" id="error-list">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif
                        <div class="mb-4">
                          <label for="patient_id" class="form-label">Select Patient</label>
                          <select id="patient_id" name="patient_id" class="form-select select2">
                            <option value="">Select a patient</option>
                            @foreach($patients as $patient)
                              <option value="{{ $patient->patient_id }}">{{ $patient->firstname }} {{ $patient->lastname }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-xl-12">
                          <label class="form-label">Use Reward Points</label>
                          <div class="row">
                            <div class="col-md mb-md-0 mb-5">
                              <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="useRewardYes">
                                  <input name="useReward" class="form-check-input" type="radio" value="1" id="useRewardYes" checked />
                                  <span class="custom-option-header">
                                    <span class="h6 mb-0">Yes</span>
                                  </span>
                                </label>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="form-check custom-option custom-option-basic">
                                <label class="form-check-label custom-option-content" for="useRewardNo">
                                  <input name="useReward" class="form-check-input" type="radio" value="0" id="useRewardNo" />
                                  <span class="custom-option-header">
                                    <span class="h6 mb-0">No</span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-5">
                          <label class="form-label" for="remarks">Remarks</label>
                          <textarea class="form-control" name="remarks" id="remarks"></textarea>
                        </div>
                        <div class="d-flex justify-content-sm-between justify-content-start mt-6 gap-2">
                          <div class="d-flex">
                            <button type="submit" class="btn btn-primary btn-add-event me-4">Save</button>
                            <button type="reset" class="btn btn-label-secondary btn-cancel me-sm-0 me-1" data-bs-dismiss="offcanvas">Cancel</button>
                          </div>
                          <button class="btn btn-label-danger btn-delete-event d-none">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
                <!-- /Calendar & Modal -->
              </div>
            </div>
          </div>
          <!-- / Content -->
          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                <div class="text-body">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Developed by
                  <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
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
  <script src="../../assets/vendor/libs/fullcalendar/fullcalendar.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>
  <!-- Page JS -->
  <script src="../../assets/js/app-calendar-events.js"></script>
  <script src="../../assets/js/app-calendar.js"></script>
  
  <!-- Custom initialization script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Check for validation errors on page load and display with SweetAlert
      const errorList = document.getElementById('error-list');
      if (errorList && errorList.textContent.trim()) {
        const errorMessages = Array.from(errorList.querySelectorAll('li')).map(li => li.textContent);
        Swal.fire({
          icon: 'error',
          title: 'Form Validation Error',
          html: errorMessages.join('<br>'),
          confirmButtonText: 'OK'
        });
      }
      
      // Form submission handling with SweetAlert
      const bookingForm = document.querySelector('form[action="{{ route("booking.create") }}"]');
      if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
          // You can add form validation here before submission
          const startDate = document.getElementById('start_date').value;
          const endDate = document.getElementById('end_date').value;
          const staffId = document.getElementById('id').value;
          const patientId = document.getElementById('patient_id').value;
          
          let errors = [];
          
          if (!startDate) errors.push('Start date is required');
          if (!endDate) errors.push('End date is required');
          if (!staffId) errors.push('Please select a staff member');
          if (!patientId) errors.push('Please select a patient');
          
          if (errors.length > 0) {
            e.preventDefault();
            Swal.fire({
              icon: 'error',
              title: 'Form Validation Error',
              html: errors.join('<br>'),
              confirmButtonText: 'OK'
            });
          } else {
            // Optional: Show loading state
            Swal.fire({
              title: 'Saving booking...',
              text: 'Please wait',
              allowOutsideClick: false,
              showConfirmButton: false,
              willOpen: () => {
                Swal.showLoading();
              }
            });
          }
        });
      }

      // Simple function to initialize flatpickr
      function initDatepickr() {
        console.log('Initializing date pickers...');
        
        // Basic flatpickr initialization with minimal options
        const startPicker = flatpickr("#start_date", {
          enableTime: true,
          dateFormat: "Y-m-d H:i",
          minuteIncrement: 15,
          time_24hr: false,
          allowInput: true
        });
        
        const endPicker = flatpickr("#end_date", {
          enableTime: true,
          dateFormat: "Y-m-d H:i",
          minuteIncrement: 15,
          time_24hr: false,
          allowInput: true
        });
        
        // Initialize inline calendar
        flatpickr('.inline-calendar', {
          inline: true,
          dateFormat: 'Y-m-d'
        });
        
        console.log('Date pickers initialized:', startPicker, endPicker);
        
        // Make global for debugging
        window.startPicker = startPicker;
        window.endPicker = endPicker;
      }
      
      // Initialize select2
      function initSelects() {
        if (typeof $.fn.select2 !== 'undefined') {
          $('.select2').select2({
            dropdownParent: $('#addEventSidebar .offcanvas-body')
          });
        }
      }
      
      // Add a manual init button for troubleshooting
      function addDebugButton() {
        const debugBtn = document.createElement('button');
        debugBtn.textContent = 'Debug Init Pickers';
        debugBtn.className = 'btn btn-sm btn-warning mt-2';
        debugBtn.style.position = 'fixed';
        debugBtn.style.bottom = '10px';
        debugBtn.style.right = '10px';
        debugBtn.style.zIndex = '9999';
        debugBtn.onclick = function() {
          initDatepickr();
          console.log('Manual initialization triggered');
        };
        document.body.appendChild(debugBtn);
      }
      
      // Setup initialization triggers
      function setupTriggers() {
        // Initialize on modal show
        $('#addEventSidebar').on('shown.bs.offcanvas', function() {
          setTimeout(function() {
            initDatepickr();
            initSelects();
          }, 100);
        });
        
        // Add manual trigger
        addDebugButton();
      }
      
      // Initial setup
      setupTriggers();
      
      // Always expose reinit function for console debugging
      window.reinitPickers = initDatepickr;
    });
  </script>
  
  <!-- Ajax error handler for server responses -->
  <script>
    // Display server errors using SweetAlert
    function showServerError(xhr) {
      let errorMessage = 'An error occurred while processing your request.';
      
      try {
        const response = JSON.parse(xhr.responseText);
        if (response.errors) {
          // Format validation errors
          const errors = Object.values(response.errors).flat();
          errorMessage = errors.join('<br>');
        } else if (response.message) {
          errorMessage = response.message;
        }
      } catch (e) {
        console.error('Error parsing server response', e);
      }
      
      Swal.fire({
        icon: 'error',
        title: 'Error',
        html: errorMessage,
        confirmButtonText: 'OK'
      });
    }
    
    // Flash messages from session
    @if(session('success'))
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success') }}",
        confirmButtonText: 'OK'
      });
    @endif
    
    @if(session('error'))
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "{{ session('error') }}",
        confirmButtonText: 'OK'
      });
    @endif
  </script>

  <!-- Additional CSS for flatpickr visibility -->
  <style>
    .flatpickr-calendar {
      z-index: 9999 !important;
    }
    .flatpickr-input {
      background-color: #fff !important;
    }
  </style>
</body>

</html>
