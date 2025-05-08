@extends('layouts.app')


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
  <link rel="icon" type="image/x-icon" href="{{ asset('logo/logo.png') }}" />
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
  <link rel="stylesheet" href="../../assets/vendor/libs/%4@form-validation/form-validation.css" />
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
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
  <style>
    /* Add these to your existing styles */
    .table-responsive {
      margin: 15px 0;
    }
    
    .badge {
      padding: 0.5em 0.75em;
    }
    
    .btn-sm {
      padding: 0.25rem 0.5rem;
      font-size: 0.75rem;
    }
    
    .table td, .table th {
      vertical-align: middle;
    }

    /* Add to your existing styles */
    .form-select {
        padding: 0.4375rem 2rem 0.4375rem 0.875rem;
        font-size: 0.9375rem;
        border-radius: 0.375rem;
        border: 1px solid #d9dee3;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-select:focus {
        border-color: #696cff;
        box-shadow: 0 0 0.25rem rgba(105, 108, 255, 0.1);
    }

    .form-label {
        font-size: 0.9375rem;
        font-weight: 500;
        color: #566a7f;
    }

    /* Quick Note Form Styling */
    .swal2-popup {
      width: 32em !important;
    }

    #quickNoteForm .form-label {
      color: #566a7f;
      font-weight: 500;
      font-size: 0.9375rem;
      margin-bottom: 0.5rem;
    }

    #quickNoteForm .form-control,
    #quickNoteForm .form-select {
      padding: 0.4375rem 0.875rem;
      font-size: 0.9375rem;
      border-radius: 0.375rem;
      border: 1px solid #d9dee3;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #quickNoteForm .form-control:focus,
    #quickNoteForm .form-select:focus {
      border-color: #696cff;
      box-shadow: 0 0 0.25rem rgba(105, 108, 255, 0.1);
    }

    #quickNoteForm textarea {
      resize: vertical;
      min-height: 80px;
    }

    .swal2-styled.swal2-confirm {
      background-color: #696cff !important;
    }

    .swal2-styled.swal2-cancel {
      background-color: #8592a3 !important;
    }

    /* Add this CSS for Quick Note Popup */
    .swal2-popup.quick-note-popup {
      width: 24em !important;
      padding: 1rem;
    }

    .quick-note-form {
      text-align: left;
    }

    .quick-note-form .form-group {
      margin-bottom: 0.75rem;
    }

    .quick-note-form .form-label {
      font-size: 0.8125rem;
      margin-bottom: 0.25rem;
      color: #566a7f;
    }

    .quick-note-form .form-control {
      font-size: 0.8125rem;
      padding: 0.3rem 0.5rem;
      line-height: 1.4;
      min-height: auto;
    }

    .quick-note-form textarea.form-control {
      min-height: 60px;
      resize: vertical;
    }

    .quick-note-form .form-text {
      font-size: 0.75rem;
      margin-top: 0.25rem;
    }

    .swal2-actions.quick-note-actions {
      margin-top: 0.75rem;
    }

    .swal2-actions.quick-note-actions button {
      font-size: 0.8125rem;
      padding: 0.3rem 0.75rem;
    }
    

    /* Add this to your existing styles section */
    .quick-note-popup {
      width: 400px !important;
      padding: 0 !important;
      border-radius: 4px !important;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15) !important;
    }

    .quick-note-popup .swal2-title {
      font-size: 14px !important;
      font-weight: normal !important;
      color: #666 !important;
      padding: 10px 15px !important;
      margin: 0 !important;
      text-align: left !important;
    }

    .quick-note-popup .swal2-content {
      padding: 0 15px !important;
    }

    .quick-note-input {
      border: none !important;
      padding: 8px 0 !important;
      font-size: 14px !important;
      box-shadow: none !important;
    }

    .quick-note-input:focus {
      outline: none !important;
    }

    .quick-note-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 15px;
      border-top: 1px solid #eee;
    }

    .quick-note-epic {
      color: #6563ff !important;
      font-size: 13px;
      text-decoration: none !important;
    }

    .quick-note-create {
      background-color: #eee !important;
      color: #666 !important;
      font-size: 13px !important;
      padding: 4px 12px !important;
    }

    .quick-note-create:hover {
      background-color: #e0e0e0 !important;
    }

    /* Welcome Badge Animation */
    .welcome-badge {
      display: inline-block;
      padding: 0.25rem 0.5rem;
      font-size: 0.75rem;
      font-weight: 600;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      border-radius: 0.25rem;
      color: #fff;
      background-color: #3e97ff;
      box-shadow: 0 2px 4px rgba(62, 151, 255, 0.3);
      animation: welcomePulse 2s infinite;
    }
    
    @keyframes welcomePulse {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      50% {
        transform: scale(1.05);
        opacity: 0.9;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
  </style>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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

                  <!-- Create Booking Sidebar -->
                  <form method='post' 
                        id="addBookingForm"
                        action="{{ route('booking.create')}}" 
                        data-create-route="{{ route('booking.create')}}">
                    @csrf
                    @method('POST')
                    <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar">
                      <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title">Add Booking</h5>
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
                          <div class="mb-5">
                            <label class="form-label" for="payment_amount">Payment Amount</label>
                            <div class="input-group">
                              <span class="input-group-text">P</span>
                              <input type="number" class="form-control" id="payment_amount" name="payment_amount" placeholder="0.00" min="0" step="0.01">
                            </div>
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
                          <!-- Patient selection fields in add booking form -->
                          <div class="mb-4">
                            <label for="patient_id" class="form-label">Select Patient</label>
                            <select id="patient_id" name="patient_id" class="form-select select2">
                              <option value="">Select a patient</option>
                              @foreach($patients as $patient)
                                <option value="{{ $patient->patient_id }}">{{ $patient->firstname }} {{ $patient->lastname }}</option>
                              @endforeach
                            </select>
                            <!-- Patient information display -->
                            <div id="patient_info" class="mt-2 card bg-lighter p-2" style="display: none;">
                              <div class="d-flex justify-content-between">
                                <span><i class="ti ti-star me-1"></i> Points:</span>
                                <div>
                                  <span id="patient_points_display" class="fw-semibold text-success"></span>
                                  <span id="welcome_badge" class="welcome-badge ms-2" style="display: none;">Welcome Bonus!</span>
                                </div>
                              </div>
                            </div>
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

                          <!-- Coupon Fields -->
                          <div class="mb-4">
                            <label for="coupon_code" class="form-label">Apply Coupon</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Enter coupon code">
                              <button class="btn btn-outline-primary" type="button" id="verifyCoupon">Verify</button>
                            </div>
                            <small id="couponHelp" class="form-text text-muted">Enter a valid coupon code to get discount</small>
                          </div>
                          <div id="couponDetails" class="mb-4 d-none">
                            <div class="card bg-lighter p-3">
                              <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="fw-semibold text-heading">Discount:</span>
                                <span id="discountValue" class="text-primary"></span>
                              </div>
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold text-heading">Valid for:</span>
                                <span id="validService" class="badge bg-label-info"></span>
                              </div>
                              <input type="hidden" id="discount_type" name="discount_type">
                              <input type="hidden" id="discount_value" name="discount_value">
                            </div>
                          </div>

                          <!-- Referral Fields in Add Booking Form -->
                          <div class="mb-4" id="referralSection" style="display: none;">
                            <label for="referrer_id" class="form-label">Referrer (First booking only)</label>
                            <select id="referrer_id" name="referrer_id" class="form-select select2">
                              <option value="">Select referrer</option>
                              @foreach($patients as $patientRef)
                                <option value="{{ $patientRef->patient_id }}">{{ $patientRef->firstname }} {{ $patientRef->lastname }}</option>
                              @endforeach
                            </select>
                            <small id="referralHelp" class="form-text text-muted">Both you and your referrer will receive 100 points</small>
                          </div>
                          <div id="referralDetails" class="mb-4 d-none">
                            <div class="card bg-lighter p-3">
                              <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="fw-semibold text-heading">Referral Bonus:</span>
                                <span id="referralDiscountValue" class="text-primary"></span>
                              </div>
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold text-heading">Referred By:</span>
                                <span id="referredBy" class="badge bg-label-info"></span>
                              </div>
                              <input type="hidden" id="referral_discount_type" name="referral_discount_type">
                              <input type="hidden" id="referral_discount_value" name="referral_discount_value">
                            </div>
                          </div>
                          
                          <div class="mb-5">
                            <label class="form-label" for="remarks">Remarks</label>
                            <textarea class="form-control" name="remarks" id="remarks"></textarea>
                          </div>
                          <div class="mb-4">
                            <label class="form-label">Booking Summary</label>
                            <div class="form-control bg-light" readonly style="min-height: 110px;">
                              <div><strong>Service Price:</strong> <span id="summary_service_price">-</span></div>
                              <div><strong>Coupon Discount:</strong> <span id="summary_coupon_discount">-</span></div>
                              <div><strong>Referral Points:</strong> <span id="summary_referral_points">-</span></div>
                              <div><strong>Used Points:</strong> <span id="summary_patient_reward">-</span></div>
                              <div class="mt-2"><strong>Total Price:</strong> <span id="summary_total_price">-</span></div>
                            </div>
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

                  <!-- Update Booking Sidebar -->
                  <form method='post' 
                        id="updateBookingForm"
                        action="{{ route('booking.update')}}"
                        data-update-route="{{ route('booking.update')}}">
                    @csrf
                    @method('PUT')
                    <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="updateEventSidebar">
                      <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title">Update Booking</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <div class="event-form pt-0">
                          <input type="hidden" id="update_booking_id" name="booking_id">
                          <div class="mb-5">
                            <label class="form-label" for="update_service_id">Select Services</label>
                            <select class="select2 form-select" name="service_id" id="update_service_id">
                              @foreach ($services as $service)
                              <option value="{{$service->service_id}}">{{$service->service_name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="update_status">Status</label>
                            <select class="select2 form-select" name="status" id="update_status">
                              <option>Pending</option>
                              <option>Paid</option>
                              <option>Cancelled</option>
                              <option>Completed</option>
                              <option>No Show</option>
                            </select>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="update_payment_amount">Payment Amount</label>
                            <div class="input-group">
                              <span class="input-group-text">$</span>
                              <input type="number" class="form-control" id="update_payment_amount" name="payment_amount" placeholder="0.00" min="0" step="0.01">
                            </div>
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="update_start_date">Start Date and Time</label>
                            <input type="text" class="form-control flatpickr-input" id="update_start_date" name="start_date" placeholder="YYYY-MM-DD HH:MM" />
                          </div>
                          <div class="mb-5">
                            <label class="form-label" for="update_end_date">End Date and Time</label>
                            <input type="text" class="form-control flatpickr-input" id="update_end_date" name="end_date" placeholder="YYYY-MM-DD HH:MM" />
                          </div>
                          <div class="mb-4">
                            <label for="update_staff_id" class="form-label">Assigned Staff</label>
                            <select id="update_staff_id" name="id" class="form-select select2">
                              <option value="">Select a staff member</option>
                              @foreach ($staffs as $staff)
                              <option value="{{ $staff->id }}">{{ $staff->firstname }} {{ $staff->lastname }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="mb-4">
                            <label for="update_branch_code" class="form-label">Select Branch</label>
                            <select id="update_branch_code" name="branch_code" class="form-select">
                              @foreach ($branches as $branch)
                              <option value="{{$branch->branch_code}}">{{$branch->branch_name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="mb-4">
                            <label for="update_patient_id" class="form-label">Select Patient</label>
                            <select id="update_patient_id" name="patient_id" class="form-select select2">
                              <option value="">Select a patient</option>
                              @foreach($patients as $patient)
                                <option value="{{ $patient->patient_id }}">{{ $patient->firstname }} {{ $patient->lastname }}</option>
                              @endforeach
                            </select>
                            <!-- Patient information display for update form -->
                            <div id="update_patient_info" class="mt-2 card bg-lighter p-2" style="display: none;">
                              <div class="d-flex justify-content-between">
                                <span><i class="ti ti-star me-1"></i> Points:</span>
                                <div>
                                  <span id="update_patient_points_display" class="fw-semibold text-success"></span>
                                  <span id="update_welcome_badge" class="welcome-badge ms-2" style="display: none;">Welcome Bonus!</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-12">
                            <label class="form-label">Use Reward Points</label>
                            <div class="row">
                              <div class="col-md mb-md-0 mb-5">
                                <div class="form-check custom-option custom-option-basic">
                                  <label class="form-check-label custom-option-content" for="updateUseRewardYes">
                                    <input name="useReward" class="form-check-input" type="radio" value="1" id="updateUseRewardYes" />
                                    <span class="custom-option-header">
                                      <span class="h6 mb-0">Yes</span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md">
                                <div class="form-check custom-option custom-option-basic">
                                  <label class="form-check-label custom-option-content" for="updateUseRewardNo">
                                    <input name="useReward" class="form-check-input" type="radio" value="0" id="updateUseRewardNo" />
                                    <span class="custom-option-header">
                                      <span class="h6 mb-0">No</span>
                                    </span>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Coupon Fields -->
                          <div class="mb-4">
                            <label for="update_coupon_code" class="form-label">Apply Coupon</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="update_coupon_code" name="coupon_code" placeholder="Enter coupon code">
                              <button class="btn btn-outline-primary" type="button" id="updateVerifyCoupon">Verify</button>
                            </div>
                            <small id="updateCouponHelp" class="form-text text-muted">Enter a valid coupon code to get discount</small>
                          </div>
                          <div id="updateCouponDetails" class="mb-4 d-none">
                            <div class="card bg-lighter p-3">
                              <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="fw-semibold text-heading">Discount:</span>
                                <span id="updateDiscountValue" class="text-primary"></span>
                              </div>
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold text-heading">Valid for:</span>
                                <span id="updateValidService" class="badge bg-label-info"></span>
                              </div>
                              <input type="hidden" id="update_discount_type" name="discount_type">
                              <input type="hidden" id="update_discount_value" name="discount_value">
                            </div>
                          </div>

                          <!-- Update Booking Referral Fields -->
                          <div class="mb-4" id="updateReferralSection" style="display: none;">
                            <label for="update_referrer_id" class="form-label">Referrer (First booking only)</label>
                            <select id="update_referrer_id" name="referrer_id" class="form-select select2">
                              <option value="">Select referrer</option>
                              @foreach($patients as $patientRef)
                                <option value="{{ $patientRef->patient_id }}">{{ $patientRef->firstname }} {{ $patientRef->lastname }}</option>
                              @endforeach
                            </select>
                            <small id="updateReferralHelp" class="form-text text-muted">Both you and your referrer will receive 100 points</small>
                          </div>
                          <div id="updateReferralDetails" class="mb-4 d-none">
                            <div class="card bg-lighter p-3">
                              <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="fw-semibold text-heading">Referral Bonus:</span>
                                <span id="updateReferralDiscountValue" class="text-primary"></span>
                              </div>
                              <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold text-heading">Referred By:</span>
                                <span id="updateReferredBy" class="badge bg-label-info"></span>
                              </div>
                              <input type="hidden" id="update_referral_discount_type" name="referral_discount_type">
                              <input type="hidden" id="update_referral_discount_value" name="referral_discount_value">
                            </div>
                          </div>
                          
                          <div class="mb-5">
                            <label class="form-label" for="update_remarks">Remarks</label>
                            <textarea class="form-control" name="remarks" id="update_remarks"></textarea>
                          </div>
                          <div class="mb-4">
                            <label class="form-label">Booking Summary</label>
                            <div class="form-control bg-light" readonly style="min-height: 110px;">
                              <div><strong>Service Price:</strong> <span id="update_summary_service_price">-</span></div>
                              <div><strong>Coupon Discount:</strong> <span id="update_summary_coupon_discount">-</span></div>
                              <div><strong>Referral Points:</strong> <span id="update_summary_referral_points">-</span></div>
                              <div><strong>Used Points:</strong> <span id="update_summary_patient_reward">-</span></div>
                              <div class="mt-2"><strong>Total Price:</strong> <span id="update_summary_total_price">-</span></div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-sm-between justify-content-start mt-6 gap-2">
                            <div class="d-flex">
                              <button type="submit" class="btn btn-primary btn-update-event me-4" onclick="return validateUpdateForm()">Update</button>
                              <button type="reset" class="btn btn-label-secondary btn-cancel" data-bs-dismiss="offcanvas">Cancel</button>
                            </div>
                            <button type="button" class="btn btn-label-danger btn-delete-event">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /Calendar & Modal -->
              </div>
            </div>
            <!-- Recent Bookings Table -->
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <div>
                      <h5 class="card-title mb-1">Booking History</h5>
                      <p class="text-muted mb-0 small">Overview of all appointments</p>
                    </div>
                    <div>
                      <div class="d-flex gap-2 flex-wrap">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#addEventSidebar">
                          + New Booking
                        </button>
                        <div class="dropdown">
                          <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Export
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="exportDropdown">
                            <li><a class="dropdown-item" href="#" id="export-excel">Excel</a></li>
                            <li><a class="dropdown-item" href="#" id="export-pdf">PDF</a></li>
                            <li><a class="dropdown-item" href="#" id="export-csv">CSV</a></li>
                          </ul>
                  </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover booking-table" id="booking-datatable">
                      <thead class="table-light">
                        <tr>
                          <th>Service</th>
                          <th>Start Date/Time</th>
                          <th>End Date/Time</th>
                          <th>Staff</th>
                          <th>Branch</th>
                          <th>Status</th>
                          <th>Payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bookings as $booking)
                          <tr class="booking-row" data-booking-id="{{ $booking->booking_id }}">
                          <td>
                            @if($booking->service)
                              {{ $booking->service->service_name }}
                            @else
                              <span class="text-muted">No service data</span>
                            @endif
                          </td>
                          <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('M d, Y h:i A') }}</td>
                          <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('M d, Y h:i A') }}</td>
                          <td>
                            @if($booking->staff)
                              {{ $booking->staff->firstname }} {{ $booking->staff->lastname }}
                            @else
                              <span class="text-muted">Unassigned</span>
                            @endif
                          </td>
                          <td>
                            @if($booking->branch)
                              {{ $booking->branch->branch_name }}
                            @else
                              <span class="text-muted">N/A</span>
                            @endif
                          </td>
                          <td>
                            <span class="badge bg-label-{{ 
                              $booking->status === 'Pending' ? 'warning' : 
                              ($booking->status === 'Paid' ? 'info' : 
                              ($booking->status === 'Completed' ? 'success' : 
                              ($booking->status === 'Cancelled' ? 'danger' : 
                              ($booking->status === 'No Show' ? 'secondary' : 'primary')))) 
                            }}">
                              {{ $booking->status }}
                            </span>
                          </td>
                          <td>
                              @if(isset($booking->payment) && $booking->payment > 0)
                                ₱{{ number_format($booking->payment, 2) }}
                            @else
                              <span class="text-muted">-</span>
                            @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <style>
              /* Add these styles to match dashboard design */
              .booking-table {
                --bs-table-hover-bg: rgba(105, 108, 255, 0.04);
              }

              .booking-row {
                vertical-align: middle;
                transition: all 0.3s ease;
              }

              .booking-row:hover {
                transform: translateX(5px);
              }

              .badge {
                padding: 0.5em 0.9em;
                font-weight: 500;
              }

              .table-light {
                --bs-table-bg: rgba(105, 108, 255, 0.04);
              }

              .card-header {
                border-bottom: 1px solid rgba(105, 108, 255, 0.1);
              }

              /* Status badge colors */
              .bg-label-success {
                background-color: rgba(40, 199, 111, 0.16) !important;
                color: #28c76f !important;
              }

              .bg-label-warning {
                background-color: rgba(255, 171, 0, 0.16) !important;
                color: #ffab00 !important;
              }

              .bg-label-danger {
                background-color: rgba(255, 62, 29, 0.16) !important;
                color: #ff3e1d !important;
              }

              .bg-label-info {
                background-color: rgba(3, 195, 236, 0.16) !important;
                color: #03c3ec !important;
              }

              .bg-label-secondary {
                background-color: rgba(108, 117, 125, 0.16) !important;
                color: #6c757d !important;
              }

              /* DataTables styling */
              .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 0.5em 0.75em;
                margin-left: 2px;
                cursor: pointer;
              }

              .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                background: #696cff !important;
                color: white !important;
                border: 1px solid #696cff !important;
                border-radius: 0.25rem;
              }

              .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                background: #e7e7ff !important;
                color: #696cff !important;
                border: 1px solid #e7e7ff !important;
                border-radius: 0.25rem;
              }
            </style>
          </div>
          <!-- / Content -->

          <!-- Custom validation script --> 
          <script>
            function validateUpdateForm() {
              const bookingId = document.getElementById('update_booking_id').value;
              
              if (!bookingId) {
                Swal.fire({
                  icon: 'error',
                  title: 'Form Validation Error', 
                  text: 'Booking ID is missing. Please try again.',
                  confirmButtonText: 'OK'
                });
                return false;
              }

              // Show loading state
              Swal.fire({
                title: 'Updating booking...',
                text: 'Please wait',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                  Swal.showLoading();
                }
              });
              
              return true;
            }
          </script>

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
  <script src="../../assets/vendor/libs/%4@algolia/autocomplete-js.js"></script>
  <script src="../../assets/vendor/libs/pickr/pickr.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/fullcalendar/fullcalendar.js"></script>
  <script src="../../assets/vendor/libs/%4@form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/%4@form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/%4@form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
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
        
        const updateStartPicker = flatpickr("#update_start_date", {
          enableTime: true,
          dateFormat: "Y-m-d H:i",
          minuteIncrement: 15,
          time_24hr: false,
          allowInput: true
        });
        
        const updateEndPicker = flatpickr("#update_end_date", {
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
      
      // Setup initialization triggers
      function setupTriggers() {
        // Initialize on modal show
        $('#addEventSidebar').on('shown.bs.offcanvas', function() {
          setTimeout(function() {
            initDatepickr();
            initSelects();
          }, 100);
        });
        
        $('#updateEventSidebar').on('shown.bs.offcanvas', function() {
          setTimeout(function() {
            initDatepickr();
            initSelects();
          }, 100);
        });
      }
      
      // Initial setup
      setupTriggers();
      
      // Always expose reinit function for console debugging
      window.reinitPickers = initDatepickr;
    });
  </script>
  
  <!-- Initialize DataTables -->
  <script>
    $(document).ready(function() {
      // Check if DataTable is already initialized
      if ($.fn.DataTable.isDataTable('#booking-datatable')) {
        $('#booking-datatable').DataTable().destroy();
      }
      
      // Initialize DataTable with pagination
      $('#booking-datatable').DataTable({
        pageLength: 5,
        lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        responsive: true,
        order: [[1, 'desc']],
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search bookings",
          paginate: {
            first: '«',
            previous: '‹',
            next: '›',
            last: '»'
          }
        }
      });
      
      // Additional styling for pagination
      $('<style>')
        .prop('type', 'text/css')
        .html(`
          .dataTables_wrapper .dataTables_paginate {
            margin-top: 10px;
          }
          .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.15rem 0.35rem;
            margin: 0 0.05rem;
            border-radius: 0.2rem;
            border: 1px solid #d9dee3;
            background: #fff;
            color: #566a7f;
            line-height: 1;
            font-size: 12px;
            min-width: 1.5rem;
            text-align: center;
          }
          .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #696cff !important;
            color: #fff !important;
            border-color: #696cff !important;
          }
          .dataTables_wrapper .dataTables_paginate .paginate_button:hover:not(.current) {
            background: #f6f6f6 !important;
            color: #696cff !important;
            border-color: #d9dee3 !important;
          }
          .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            color: #bbb !important;
          }
          .dataTables_info {
            font-size: 0.75rem;
            color: #566a7f;
            margin-top: 10px;
          }
          .dataTables_length select {
            padding: 0.2rem 1.2rem 0.2rem 0.4rem;
            font-size: 0.75rem;
            height: 28px;
          }
          .dataTables_filter input {
            padding: 0.2rem 0.4rem;
            font-size: 0.75rem;
            border-radius: 0.2rem;
            border: 1px solid #d9dee3;
            height: 28px;
          }
        `)
        .appendTo('head');
    });
  </script>

<script>
$(document).ready(function() {
  var servicePrices = {};
  @foreach ($services as $service)
    servicePrices['{{ $service->service_id }}'] = {{ $service->service_cost }};
  @endforeach

  var patientData = {};
  @foreach($patients as $patient)
    patientData['{{ $patient->patient_id }}'] = {
      reward: {{ $patient->points ?? 0 }}
    };
  @endforeach

  function formatMoney(val) {
    return '₱' + (val ? parseFloat(val).toLocaleString() : '0');
  }

  // Function to update booking summary for new bookings
  function updateSummary() {
    var sid = $('#service_id').val();
    var pid = $('#patient_id').val();
    var dtype = $('#discount_type').val();
    var dval = $('#discount_value').val();
    var useReward = $('input[name="useReward"]:checked').val();
    
    var servicePrice = servicePrices[sid] || 0;
    var patient = patientData[pid] || {reward: 0};
    var discount = 0;
    var discountText = '-';
    var referralText = '-';
    
    // Calculate coupon discount
    if (dtype && dval) {
      if (dtype === 'percentage') {
        discount = servicePrice * (parseFloat(dval) / 100);
        discountText = dval + '% (' + formatMoney(discount) + ')';
      } else {
        discount = parseFloat(dval);
        discountText = formatMoney(discount);
      }
    }
    
    // Check if referrer is selected
    var referrerId = $('#referrer_id').val();
    if (referrerId && $('#referralSection').is(':visible')) {
      referralText = "Will earn 100 points";
    }
    
    var afterCoupon = Math.max(0, servicePrice - discount);
    var rewardPoints = patient.reward || 0;
    var usedPoints = useReward == '1' && rewardPoints > 0 ? Math.min(rewardPoints, afterCoupon) : 0;
    var usedPointsText = usedPoints > 0 ? '- ' + formatMoney(usedPoints) : '-';
    var afterReward = Math.max(0, afterCoupon - usedPoints);
    var total = afterReward;
    
    // Update summary display
    $('#summary_service_price').text(formatMoney(servicePrice));
    $('#summary_coupon_discount').text(discountText);
    $('#summary_referral_points').text(referralText);
    $('#summary_patient_reward').text(usedPointsText);
    $('#summary_total_price').text(formatMoney(total));
    
    // Update the payment amount field with the calculated total
    $('#payment_amount').val(total.toFixed(2));
  }

  // Function to update booking summary for edit bookings
  function updateEditSummary() {
    var sid = $('#update_service_id').val();
    var pid = $('#update_patient_id').val();
    var dtype = $('#update_discount_type').val();
    var dval = $('#update_discount_value').val();
    var useReward = $('input[name="useReward"]:checked').val();
    
    var servicePrice = servicePrices[sid] || 0;
    var patient = patientData[pid] || {reward: 0};
    var discount = 0;
    var discountText = '-';
    var referralText = '-';
    
    // Calculate coupon discount
    if (dtype && dval) {
      if (dtype === 'percentage') {
        discount = servicePrice * (parseFloat(dval) / 100);
        discountText = dval + '% (' + formatMoney(discount) + ')';
      } else {
        discount = parseFloat(dval);
        discountText = formatMoney(discount);
      }
    }
    
    // Check if referrer is selected
    var referrerId = $('#update_referrer_id').val();
    if (referrerId && $('#updateReferralSection').is(':visible')) {
      referralText = "Will earn 100 points";
    }
    
    var afterCoupon = Math.max(0, servicePrice - discount);
    var rewardPoints = patient.reward || 0;
    var usedPoints = useReward == '1' && rewardPoints > 0 ? Math.min(rewardPoints, afterCoupon) : 0;
    var usedPointsText = usedPoints > 0 ? '- ' + formatMoney(usedPoints) : '-';
    var afterReward = Math.max(0, afterCoupon - usedPoints);
    var total = afterReward;
    
    // Update summary display
    $('#update_summary_service_price').text(formatMoney(servicePrice));
    $('#update_summary_coupon_discount').text(discountText);
    $('#update_summary_referral_points').text(referralText);
    $('#update_summary_patient_reward').text(usedPointsText);
    $('#update_summary_total_price').text(formatMoney(total));
    
    // Update the payment amount field with the calculated total
    $('#update_payment_amount').val(total.toFixed(2));
  }

  // Set up event listeners for form fields
  $('#service_id, #patient_id, #discount_type, #discount_value, input[name="useReward"]').on('change keyup', updateSummary);
  $('#update_service_id, #update_patient_id, #update_discount_type, #update_discount_value, input[name="useReward"]').on('change keyup', updateEditSummary);
  
  // Initialize summaries
  updateSummary();
  updateEditSummary();

  // Show patient info when a patient is selected
  $('#patient_id').change(function() {
    const patientId = $(this).val();
    if (patientId) {
      const patient = patientData[patientId];
      if (patient) {
        $('#patient_points_display').text(patient.reward);
        $('#patient_info').show();
        
        // Check if patient has exactly 100 points (welcome bonus)
        if (patient.reward === 100) {
          $('#welcome_badge').show();
        } else {
          $('#welcome_badge').hide();
        }
        
        // Set the hidden field for reward points
        $('#patientRewardPoints').val(patient.reward);
      }
    } else {
      $('#patient_info').hide();
    }
    updateSummary();
  });

  // Show patient info when a patient is selected in update form
  $('#update_patient_id').change(function() {
    const patientId = $(this).val();
    if (patientId) {
      const patient = patientData[patientId];
      if (patient) {
        $('#update_patient_points_display').text(patient.reward);
        $('#update_patient_info').show();
        
        // Check if patient has exactly 100 points (welcome bonus)
        if (patient.reward === 100) {
          $('#update_welcome_badge').show();
        } else {
          $('#update_welcome_badge').hide();
        }
        
        // Set the hidden field for reward points
        $('#updatePatientRewardPoints').val(patient.reward);
      }
    } else {
      $('#update_patient_info').hide();
    }
    updateEditSummary();
  });
  
  // Initialize patient info display
  $('#patient_id, #update_patient_id').trigger('change');
  
  // Add event handler for when update modal is opened
  $('#updateEventSidebar').on('shown.bs.offcanvas', function() {
    // Trigger summary update when update modal is opened with pre-populated data
    setTimeout(updateEditSummary, 100);
  });
});
</script>

<script>
$(document).ready(function() {
  // Coupon verification for new booking
  $('#verifyCoupon').on('click', function() {
    const couponCode = $('#coupon_code').val().trim();
    const serviceId = $('#service_id').val();
    const verifyBtn = $(this);
    
    if (!couponCode) {
      Swal.fire({
        icon: 'warning',
        title: 'Empty Coupon',
        text: 'Please enter a coupon code',
        confirmButtonText: 'OK'
      });
      return;
    }
    
    // Show loading state
    verifyBtn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Verifying...');
    verifyBtn.prop('disabled', true);
    
    // Send AJAX request to verify coupon
    $.ajax({
      url: '/verify-coupon',
      type: 'POST',
      data: {
        _token: $('meta[name="csrf-token"]').attr('content'),
        coupon_code: couponCode,
        service_id: serviceId
      },
      success: function(response) {
        if (response.valid) {
          // Show coupon details
          $('#couponDetails').removeClass('d-none');
          
          // Display discount information based on type
          if (response.discount_type === 'percentage') {
            $('#discountValue').text(response.discount_value + '% off');
          } else {
            $('#discountValue').text('₱' + response.discount_value + ' off');
          }
          
          // Display service name
          $('#validService').text(response.service_name || 'All services');
          
          // Set hidden fields for form submission
          $('#discount_type').val(response.discount_type);
          $('#discount_value').val(response.discount_value);
          
          // Success message
          $('#couponHelp').removeClass('text-muted').addClass('text-success').text('Coupon applied successfully!');
          
          // Show SweetAlert and ensure it completes before allowing form submission
          Swal.fire({
            icon: 'success',
            title: 'Valid Coupon',
            text: 'Your discount has been applied',
            confirmButtonText: 'OK',
            allowOutsideClick: false
          }).then(() => {
            // Update summary after alert is closed
            if (typeof window.updateSummary === 'function') {
              window.updateSummary();
            }
          });
        } else {
          // Invalid coupon
          $('#couponDetails').addClass('d-none');
          $('#discount_type').val('');
          $('#discount_value').val('');
          $('#couponHelp').removeClass('text-success').addClass('text-danger').text(response.message || 'Invalid coupon code');
          
          // Show error alert and ensure it completes
          Swal.fire({
            icon: 'error',
            title: 'Invalid Coupon',
            text: response.message || 'This coupon code is invalid or expired',
            confirmButtonText: 'OK',
            allowOutsideClick: false
          }).then(() => {
            if (typeof window.updateSummary === 'function') {
              window.updateSummary();
            }
          });
        }
      },
      error: function() {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Could not verify coupon. Please try again.',
          confirmButtonText: 'OK',
          allowOutsideClick: false
        });
      },
      complete: function() {
        // Reset button state - ALWAYS runs regardless of success or error
        verifyBtn.html('Verify');
        verifyBtn.prop('disabled', false);
      }
    });
  });
  
  // Coupon verification for update booking
  $('#updateVerifyCoupon').on('click', function() {
    const couponCode = $('#update_coupon_code').val().trim();
    const serviceId = $('#update_service_id').val();
    const verifyBtn = $(this);
    
    if (!couponCode) {
      Swal.fire({
        icon: 'warning',
        title: 'Empty Coupon',
        text: 'Please enter a coupon code',
        confirmButtonText: 'OK'
      });
      return;
    }
    
    // Show loading state
    verifyBtn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Verifying...');
    verifyBtn.prop('disabled', true);
    
    // Send AJAX request to verify coupon
    $.ajax({
      url: '/verify-coupon',
      type: 'POST',
      data: {
        _token: $('meta[name="csrf-token"]').attr('content'),
        coupon_code: couponCode,
        service_id: serviceId
      },
      success: function(response) {
        if (response.valid) {
          // Show coupon details
          $('#updateCouponDetails').removeClass('d-none');
          
          // Display discount information based on type
          if (response.discount_type === 'percentage') {
            $('#updateDiscountValue').text(response.discount_value + '% off');
          } else {
            $('#updateDiscountValue').text('₱' + response.discount_value + ' off');
          }
          
          // Display service name
          $('#updateValidService').text(response.service_name || 'All services');
          
          // Set hidden fields for form submission
          $('#update_discount_type').val(response.discount_type);
          $('#update_discount_value').val(response.discount_value);
          
          // Success message
          $('#updateCouponHelp').removeClass('text-muted').addClass('text-success').text('Coupon applied successfully!');
          
          // Show SweetAlert and ensure it completes
          Swal.fire({
            icon: 'success',
            title: 'Valid Coupon',
            text: 'Your discount has been applied',
            confirmButtonText: 'OK',
            allowOutsideClick: false
          }).then(() => {
            // Update summary after alert is closed
            if (typeof window.updateEditSummary === 'function') {
              window.updateEditSummary();
            }
          });
        } else {
          // Invalid coupon
          $('#updateCouponDetails').addClass('d-none');
          $('#update_discount_type').val('');
          $('#update_discount_value').val('');
          $('#updateCouponHelp').removeClass('text-success').addClass('text-danger').text(response.message || 'Invalid coupon code');
          
          // Show error alert and ensure it completes
          Swal.fire({
            icon: 'error',
            title: 'Invalid Coupon',
            text: response.message || 'This coupon code is invalid or expired',
            confirmButtonText: 'OK',
            allowOutsideClick: false
          }).then(() => {
            if (typeof window.updateEditSummary === 'function') {
              window.updateEditSummary();
            }
          });
        }
      },
      error: function() {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Could not verify coupon. Please try again.',
          confirmButtonText: 'OK',
          allowOutsideClick: false
        });
      },
      complete: function() {
        // Reset button state - ALWAYS runs regardless of success or error
        verifyBtn.html('Verify');
        verifyBtn.prop('disabled', false);
      }
    });
  });
  
  // Prevent form submission when pressing Enter in the coupon field
  $('#coupon_code').on('keydown', function(e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      $('#verifyCoupon').click();
      return false;
    }
  });
  
  $('#update_coupon_code').on('keydown', function(e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      $('#updateVerifyCoupon').click();
      return false;
    }
  });
  
  // Reset coupon fields when modal is hidden
  $('#addEventSidebar').on('hidden.bs.offcanvas', function() {
    $('#coupon_code').val('');
    $('#couponDetails').addClass('d-none');
    $('#discount_type').val('');
    $('#discount_value').val('');
    $('#couponHelp').removeClass('text-success text-danger').addClass('text-muted').text('Enter a valid coupon code to get discount');
  });
  
  $('#updateEventSidebar').on('hidden.bs.offcanvas', function() {
    $('#update_coupon_code').val('');
    $('#updateCouponDetails').addClass('d-none');
    $('#update_discount_type').val('');
    $('#update_discount_value').val('');
    $('#updateCouponHelp').removeClass('text-success text-danger').addClass('text-muted').text('Enter a valid coupon code to get discount');
  });
});
</script>

<script>
$(document).ready(function() {
  // Check if patient is first-time booker and show/hide referral section
  function checkFirstTimePatient(patientId) {
    if (!patientId) {
      $('#referralSection').hide();
      $('#updateReferralSection').hide();
      return;
    }

    $.ajax({
      url: "{{ route('check.first.time.patient') }}",
      method: "POST",
      data: {
        patient_id: patientId,
        _token: "{{ csrf_token() }}"
      },
      success: function(response) {
        if (response.is_first_time) {
          // Show referral dropdown for first-time patients
          $('#referralSection').show();
          $('#updateReferralSection').show();
        } else {
          // Hide referral dropdown for returning patients
          $('#referralSection').hide();
          $('#updateReferralSection').hide();
        }
      },
      error: function(xhr) {
        console.error('Error checking first-time patient status:', xhr);
        // Hide referral section on error
        $('#referralSection').hide();
        $('#updateReferralSection').hide();
      }
    });
  }

  // Add event listeners to patient selectors
  $('#patient_id').change(function() {
    const patientId = $(this).val();
    checkFirstTimePatient(patientId);
  });

  $('#update_patient_id').change(function() {
    const patientId = $(this).val();
    checkFirstTimePatient(patientId);
  });

  // Handle referrer selection for add booking form
  $('#referrer_id').change(function() {
    const referrerId = $(this).val();
    if (referrerId) {
      // Show referrer info but don't apply any discount
      $('#referralDetails').removeClass('d-none');
      $('#referredBy').text($(this).find('option:selected').text());
      $('#referralDiscountValue').text('Earning 100 points');
      
      // Clear discount values - no automatic discount applied
      $('#referral_discount_type').val('');
      $('#referral_discount_value').val('');
      
      // Just update display
      updateSummary();
    } else {
      $('#referralDetails').addClass('d-none');
      $('#referral_discount_type').val('');
      $('#referral_discount_value').val('');
      updateSummary();
    }
  });

  // Handle referrer selection for update booking form
  $('#update_referrer_id').change(function() {
    const referrerId = $(this).val();
    if (referrerId) {
      // Show referrer info but don't apply any discount
      $('#updateReferralDetails').removeClass('d-none');
      $('#updateReferredBy').text($(this).find('option:selected').text());
      $('#updateReferralDiscountValue').text('Earning 100 points');
      
      // Clear discount values - no automatic discount applied
      $('#update_referral_discount_type').val('');
      $('#update_referral_discount_value').val('');
      
      // Just update display
      updateEditSummary();
    } else {
      $('#updateReferralDetails').addClass('d-none');
      $('#update_referral_discount_type').val('');
      $('#update_referral_discount_value').val('');
      updateEditSummary();
    }
  });

  // Check first-time status on page load if patient is already selected
  if ($('#patient_id').val()) {
    checkFirstTimePatient($('#patient_id').val());
  }
  
  if ($('#update_patient_id').val()) {
    checkFirstTimePatient($('#update_patient_id').val());
  }
});
</script>

<script>
$(document).ready(function() {
  // Form submission for new booking
  $('#addBookingForm').on('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    if (!$('#start_date').val()) {
      Swal.fire('Error', 'Please select a start date and time', 'error');
      return false;
    }
    
    if (!$('#end_date').val()) {
      Swal.fire('Error', 'Please select an end date and time', 'error');
      return false;
    }
    
    if (!$('#id').val()) {
      Swal.fire('Error', 'Please select a staff member', 'error');
      return false;
    }
    
    if (!$('#patient_id').val()) {
      Swal.fire('Error', 'Please select a patient', 'error');
      return false;
    }
    
    // Show loading alert
    Swal.fire({
      title: 'Saving Booking',
      text: 'Please wait while we create your booking...',
      allowOutsideClick: false,
      allowEscapeKey: false,
      showConfirmButton: false,
      willOpen: () => {
        Swal.showLoading();
      }
    });
    
    // Get form data
    const formData = new FormData(this);
    
    // Add referrer data if applicable
    if ($('#referrer_id').is(':visible') && $('#referrer_id').val()) {
      formData.append('referrer_id', $('#referrer_id').val());
      formData.append('is_first_time', true);
      formData.append('add_points', true);
    }
    
    // Send AJAX request
    $.ajax({
      url: $(this).attr('action'),
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        console.log('Success response:', response);
        
        // Close loading alert
        Swal.close();
        
        // Show success message
        Swal.fire({
          icon: 'success',
          title: response.success || 'Booking Created',
          text: 'Your booking has been created successfully',
          confirmButtonText: 'OK'
        }).then(() => {
          // Reload page to show new booking
          window.location.reload();
        });
      },
      error: function(xhr) {
        console.error('Error response:', xhr);
        
        // Close loading alert
        Swal.close();
        
        let errorMessage = 'An error occurred while creating the booking.';
        
        // Handle validation errors
        if (xhr.status === 422 && xhr.responseJSON) {
          if (xhr.responseJSON.errors) {
            const errors = xhr.responseJSON.errors;
            const errorList = Object.keys(errors).map(key => errors[key][0]).join('<br>');
            errorMessage = `<strong>Validation Error:</strong><br>${errorList}`;
          } else if (xhr.responseJSON.message) {
            errorMessage = xhr.responseJSON.message;
          }
        } else if (xhr.responseJSON && xhr.responseJSON.message) {
          if (xhr.responseJSON.exception) {
            const exception = xhr.responseJSON.exception;
            const file = xhr.responseJSON.file ? `<br>File: ${xhr.responseJSON.file}` : '';
            const line = xhr.responseJSON.line ? `<br>Line: ${xhr.responseJSON.line}` : '';
            
            errorMessage = `<strong>Server Error:</strong><br>${xhr.responseJSON.message}<br>${exception}${file}${line}`;
            console.error('Exception details:', xhr.responseJSON);
          } else {
            errorMessage = xhr.responseJSON.message;
          }
        }
        
        Swal.fire({
          icon: 'error',
          title: 'Error',
          html: errorMessage,
          confirmButtonText: 'OK'
        });
      }
    });
  });

  // Form submission for update booking
  $('#updateBookingForm').on('submit', function(e) {
    e.preventDefault();
    
    // Validate booking ID exists
    if (!$('#update_booking_id').val()) {
      Swal.fire('Error', 'Booking ID is missing', 'error');
      return false;
    }
    
    // Validate required fields
    if (!$('#update_start_date').val()) {
      Swal.fire('Error', 'Please select a start date and time', 'error');
      return false;
    }
    
    if (!$('#update_end_date').val()) {
      Swal.fire('Error', 'Please select an end date and time', 'error');
      return false;
    }
    
    if (!$('#update_staff_id').val()) {
      Swal.fire('Error', 'Please select a staff member', 'error');
      return false;
    }
    
    if (!$('#update_patient_id').val()) {
      Swal.fire('Error', 'Please select a patient', 'error');
      return false;
    }
    
    // Show loading alert
    Swal.fire({
      title: 'Updating Booking',
      text: 'Please wait while we update your booking...',
      allowOutsideClick: false,
      allowEscapeKey: false,
      showConfirmButton: false,
      willOpen: () => {
        Swal.showLoading();
      }
    });
    
    // Get form data
    const formData = new FormData(this);
    
    // Add referrer data if applicable
    if ($('#update_referrer_id').is(':visible') && $('#update_referrer_id').val()) {
      formData.append('referrer_id', $('#update_referrer_id').val());
      formData.append('is_first_time', true);
      formData.append('add_points', true);
    }
    
    // Send AJAX request
    $.ajax({
      url: $(this).attr('action'),
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        console.log('Success response:', response);
        
        // Close loading alert
        Swal.close();
        
        // Show success message
        Swal.fire({
          icon: 'success',
          title: response.success || 'Booking Updated',
          text: 'Your booking has been updated successfully',
          confirmButtonText: 'OK'
        }).then(() => {
          // Reload page to show updated booking
          window.location.reload();
        });
      },
      error: function(xhr) {
        console.error('Error response:', xhr);
        
        // Close loading alert
        Swal.close();
        
        let errorMessage = 'An error occurred while updating the booking.';
        
        // Handle validation errors
        if (xhr.status === 422 && xhr.responseJSON) {
          if (xhr.responseJSON.errors) {
            const errors = xhr.responseJSON.errors;
            const errorList = Object.keys(errors).map(key => errors[key][0]).join('<br>');
            errorMessage = `<strong>Validation Error:</strong><br>${errorList}`;
          } else if (xhr.responseJSON.message) {
            errorMessage = xhr.responseJSON.message;
          }
        } else if (xhr.responseJSON && xhr.responseJSON.message) {
          if (xhr.responseJSON.exception) {
            const exception = xhr.responseJSON.exception;
            const file = xhr.responseJSON.file ? `<br>File: ${xhr.responseJSON.file}` : '';
            const line = xhr.responseJSON.line ? `<br>Line: ${xhr.responseJSON.line}` : '';
            
            errorMessage = `<strong>Server Error:</strong><br>${xhr.responseJSON.message}<br>${exception}${file}${line}`;
            console.error('Exception details:', xhr.responseJSON);
          } else {
            errorMessage = xhr.responseJSON.message;
          }
        }
        
        Swal.fire({
          icon: 'error',
          title: 'Error',
          html: errorMessage,
          confirmButtonText: 'OK'
        });
      }
    });
  });
});
</script>

<!-- After the DataTables initialization script -->
<script>
  // Patient Referral System
  $(document).ready(function() {
    // Function to check if a patient is making their first booking
    function checkFirstTimePatient(patientId) {
      if (!patientId) {
        $('#referralSection').hide();
        $('#updateReferralSection').hide();
        return;
      }

      $.ajax({
        url: "{{ route('check.first.time.patient') }}",
        type: "POST",
        data: {
          patient_id: patientId,
          _token: "{{ csrf_token() }}"
        },
        success: function(response) {
          if (response.is_first_time) {
            // Show referral section for first-time patients
            $('#referralSection').show();
            $('#updateReferralSection').show();
            
            // Reinitialize select2 for referrer dropdowns to ensure they work
            try {
              $('#referrer_id').select2('destroy');
              $('#referrer_id').select2({
                dropdownParent: $('#addEventSidebar .offcanvas-body'),
                width: '100%'
              });
              
              $('#update_referrer_id').select2('destroy');
              $('#update_referrer_id').select2({
                dropdownParent: $('#updateEventSidebar .offcanvas-body'),
                width: '100%'
              });
            } catch (e) {
              console.error('Error reinitializing select2:', e);
            }
          } else {
            // Hide referral section for returning patients
            $('#referralSection').hide();
            $('#updateReferralSection').hide();
          }
        },
        error: function(xhr) {
          console.error('Error checking first-time patient status:', xhr);
          // Hide referral sections on error
          $('#referralSection').hide();
          $('#updateReferralSection').hide();
        }
      });
    }

    // Initialize select2 for referrer dropdowns with the correct parent
    try {
      setTimeout(function() {
        $('#referrer_id').select2({
          dropdownParent: $('#addEventSidebar .offcanvas-body'),
          width: '100%',
          placeholder: 'Select a referrer'
        });
        
        $('#update_referrer_id').select2({
          dropdownParent: $('#updateEventSidebar .offcanvas-body'),
          width: '100%',
          placeholder: 'Select a referrer'
        });
        
        console.log('Select2 initialized for referrer dropdowns');
      }, 500); // Small delay to ensure DOM is ready
    } catch (e) {
      console.error('Error initializing select2 for referrer dropdowns:', e);
    }
    
    // Handle patient selection changes to show/hide referrer section
    $('#patient_id').on('change', function() {
      const patientId = $(this).val();
      checkFirstTimePatient(patientId);
    });
    
    $('#update_patient_id').on('change', function() {
      const patientId = $(this).val();
      checkFirstTimePatient(patientId);
    });
    
    // Handle referrer selection for add booking form
    $('#referrer_id').on('change', function() {
      const referrerId = $(this).val();
      if (referrerId) {
        // Show referrer info but don't apply any discount
        $('#referralDetails').removeClass('d-none');
        $('#referredBy').text($(this).find('option:selected').text());
        $('#referralDiscountValue').text('Earning 100 points');
        
        // Clear discount values - no automatic discount applied
        $('#referral_discount_type').val('');
        $('#referral_discount_value').val('');
        
        // Just update display
        updateSummary();
      } else {
        $('#referralDetails').addClass('d-none');
        $('#referral_discount_type').val('');
        $('#referral_discount_value').val('');
        updateSummary();
      }
    });
    
    // Handle referrer selection for update booking form
    $('#update_referrer_id').on('change', function() {
      const referrerId = $(this).val();
      if (referrerId) {
        // Show referrer info but don't apply any discount
        $('#updateReferralDetails').removeClass('d-none');
        $('#updateReferredBy').text($(this).find('option:selected').text());
        $('#updateReferralDiscountValue').text('Earning 100 points');
        
        // Clear discount values - no automatic discount applied
        $('#update_referral_discount_type').val('');
        $('#update_referral_discount_value').val('');
        
        // Just update display
        updateEditSummary();
      } else {
        $('#updateReferralDetails').addClass('d-none');
        $('#update_referral_discount_type').val('');
        $('#update_referral_discount_value').val('');
        updateEditSummary();
      }
    });
    
    // Check first-time status on page load if patient is already selected
    if ($('#patient_id').val()) {
      checkFirstTimePatient($('#patient_id').val());
    }
    
    if ($('#update_patient_id').val()) {
      checkFirstTimePatient($('#update_patient_id').val());
    }
  });
</script>

<!-- Welcome Badge Script -->
<script>
$(document).ready(function() {
  // Initialize tooltips
  $('[data-bs-toggle="tooltip"]').tooltip();
  
  // Handle patient selection for add booking form
  $('#patient_id').on('change', function() {
    const patientId = $(this).val();
    if (patientId) {
      $.ajax({
        url: "{{ route('patient.get.points') }}",
        type: "GET",
        data: { patient_id: patientId },
        success: function(response) {
          if (response.success) {
            // Show the welcome badge if points are exactly 100
            if (response.points === 100) {
              $('#welcome_badge')
                .attr('data-bs-toggle', 'tooltip')
                .attr('data-bs-placement', 'top')
                .attr('title', 'This patient just received 100 welcome points!')
                .show();
              
              // Re-initialize tooltip
              $('#welcome_badge').tooltip();
            } else {
              $('#welcome_badge').hide();
            }
            
            // Update the points display
            $('#patient_points_display').text(response.points);
          }
        },
        error: function(xhr) {
          console.error('Error checking patient points:', xhr);
          $('#welcome_badge').hide();
        }
      });
    } else {
      $('#welcome_badge').hide();
    }
  });

  // Handle patient selection for update booking form
  $('#update_patient_id').on('change', function() {
    const patientId = $(this).val();
    if (patientId) {
      $.ajax({
        url: "{{ route('patient.get.points') }}",
        type: "GET",
        data: { patient_id: patientId },
        success: function(response) {
          if (response.success) {
            // Show the welcome badge if points are exactly 100
            if (response.points === 100) {
              $('#update_welcome_badge')
                .attr('data-bs-toggle', 'tooltip')
                .attr('data-bs-placement', 'top')
                .attr('title', 'This patient just received 100 welcome points!')
                .show();
              
              // Re-initialize tooltip
              $('#update_welcome_badge').tooltip();
            } else {
              $('#update_welcome_badge').hide();
            }
            
            // Update the points display
            $('#update_patient_points_display').text(response.points);
          }
        },
        error: function(xhr) {
          console.error('Error checking patient points:', xhr);
          $('#update_welcome_badge').hide();
        }
      });
    } else {
      $('#update_welcome_badge').hide();
    }
  });
});
</script>
</body>

</html>
