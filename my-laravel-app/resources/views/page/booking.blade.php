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
  <link rel="icon" type="image/x-icon" href="{{ asset(path:'logo/logo.png') }}" />
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
  </style>
  <!-- Add these in your head section -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
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
                          <div class="mb-5">
                            <label class="form-label" for="update_remarks">Remarks</label>
                            <textarea class="form-control" name="remarks" id="update_remarks"></textarea>
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
                    <div class="d-flex align-items-center gap-2">
                      <div class="search-box">
                        <input type="text" id="searchBookings" class="form-control" placeholder="Search bookings...">
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover" id="bookingsTable">
                      <thead class="table-light">
                        <tr>

                          <th>Service</th>
                          <th>Start Date/Time</th>
                          <th>End Date/Time</th>
                          <th>Staff</th>
                          <th>Branch</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bookings as $booking)
                        <tr class="booking-row">
                          
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
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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

              .date-filter .input-group {
                max-width: 300px;
              }

              .date-filter input[type="date"] {
                border-radius: 0;
              }

              .date-filter input[type="date"]:first-child {
                border-top-left-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
              }

              .date-filter button {
                border-top-right-radius: 0.25rem !important;
                border-bottom-right-radius: 0.25rem !important;
              }

              .input-group .form-control {
                border-radius: 0;
              }

              .input-group .form-control:first-child {
                border-top-left-radius: 0.375rem;
                border-bottom-left-radius: 0.375rem;
              }

              .input-group .form-control:last-child {
                border-top-right-radius: 0.375rem;
                border-bottom-right-radius: 0.375rem;
              }

              .dt-buttons {
                margin-left: 1rem;
              }

              .dt-button {
                transition: all 0.2s;
              }

              .dt-button:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
              }

              .form-label {
                font-weight: 500;
                margin-bottom: 0.5rem;
              }

              .filter-section {
                background: rgba(105, 108, 255, 0.04);
                padding: 1rem;
                border-radius: 0.5rem;
                margin-bottom: 1rem;
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
      
      // Setup initialization triggers
      function setupTriggers() {
        // Initialize on modal show
        $('#addEventSidebar').on('shown.bs.offcanvas', function() {
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

    // Initialize DataTable with only status filter functionality
    const bookingTable = $('.booking-table').DataTable({
        order: [[1, 'desc']], 
        pageLength: 10,
        responsive: true
    });

    // Update the dateClick handler in app-calendar.js or in your inline script
    function saveQuickNote(data) {
      console.log('Quick Note Saved:', data);
      // Add your logic to save the quick note here
    }

    const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
      dateClick: function(info) {
        Swal.fire({
          title: 'What needs to be done?',
          input: 'text',
          inputPlaceholder: 'Enter your task...',
          showCancelButton: true,
          customClass: {
            popup: 'quick-note-popup',
            input: 'quick-note-input',
            confirmButton: 'quick-note-confirm',
            cancelButton: 'quick-note-cancel',
            actions: 'quick-note-actions'
          },
          inputAttributes: {
            autocomplete: 'off'
          },
          footer: `
            <div class="quick-note-footer">
              <button type="button" class="btn btn-link p-0 quick-note-epic">
                <i class="ti ti-tag me-1"></i>Epic
                <i class="ti ti-chevron-down ms-1"></i>
              </button>
              <button type="button" class="btn btn-primary btn-sm quick-note-create">Create</button>
            </div>
          `
          showConfirmButton: false,
          showCancelButton: false,
          buttonsStyling: false
        });
      }
    });
  </script>

  <!-- Delete Booking Form (Hidden) -->
  <form id="deleteBookingForm" method="POST" action="{{ route('booking.delete') }}" style="display: none;">
    @csrf
    @method('DELETE')
    <input type="hidden" id="delete_booking_id" name="booking_id">
  </form>

  <!-- Add this script before closing body tag -->
  <script>
    // Add SweetAlert default configuration
    const swalConfig = {
      customClass: {
        container: 'swal-container-class',
        popup: 'swal-popup-class',
        confirmButton: 'btn btn-danger', // Add danger class
        cancelButton: 'btn btn-secondary'
      },
      backdrop: true,
      allowOutsideClick: false,
      buttonsStyling: false // Disable default styling
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
      `)
      .appendTo('head');

    // Handle delete button click
    $(document).on('click', '.btn-delete-event', function(e) {
      e.preventDefault();
      const bookingId = $('#update_booking_id').val();
      
      if (!bookingId) {
        Swal.fire({
          ...swalConfig,
          icon: 'error',
          title: 'Error',
          text: 'Booking ID not found'
        });
        return;
      }

      // Hide the modal before showing SweetAlert
      $('#updateEventSidebar').offcanvas('hide');
      
      setTimeout(() => {
        Swal.fire({
          ...swalConfig,
          title: 'Are you sure?',
          text: "This booking will be permanently deleted!",
          icon: 'warning', 
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          customClass: {
            ...swalConfig.customClass,
            confirmButton: 'btn btn-danger me-3', // Add margin-end
            cancelButton: 'btn btn-secondary'
          }
        }).then((result) => {
          if (result.isConfirmed) {
            $('#delete_booking_id').val(bookingId);
            $('#deleteBookingForm').submit();
          } else {
            // If canceled, show the modal again
            $('#updateEventSidebar').offcanvas('show');
          }
        });
      }, 200); // Small delay to ensure modal is hidden
    });
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

  <!-- Add before closing body tag -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
      // Initialize DataTable
      const bookingsTable = $('#bookingsTable').DataTable({
          pageLength: 10,
          ordering: true,
          responsive: true,
          dom: "<'row'<'col-sm-12'tr>>" +
              "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
          language: {
              search: "",
              searchPlaceholder: "Search bookings...",
              info: "_START_ - _END_ of _TOTAL_ bookings",
              infoEmpty: "No bookings found",
              paginate: {
                  previous: "<i class='ti ti-chevron-left'></i>",
                  next: "<i class='ti ti-chevron-right'></i>"
              }
          }
      });

      // Connect custom search box to DataTable
      $('#searchBookings').on('keyup', function() {
          bookingsTable.search(this.value).draw();
      });
  });
  </script>

  <style>
  /* Add these search styles */
  .search-box {
      min-width: 250px;
  }

  .search-box .form-control {
      padding-right: 2.5rem;
      border-radius: 0.375rem;
      border: 1px solid #d9dee3;
  }

  .search-box .form-control:focus {
      border-color: #696cff;
      box-shadow: 0 0 0.25rem rgba(105, 108, 255, 0.1);
  }

  .dataTables_wrapper .dataTables_filter {
      display: none;
  }

  .dataTables_paginate .page-item:not(.active) .page-link {
      color: #697a8d;
  }

  .dataTables_paginate .page-item.active .page-link {
      background-color: #696cff;
      border-color: #696cff;
  }
  </style>
</body>

</html>
