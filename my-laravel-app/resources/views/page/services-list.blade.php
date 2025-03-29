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
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

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
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
    rel="stylesheet" />

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

  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

  <!-- Page CSS -->

  <!-- endbuild -->

  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
  <!-- Row Group CSS -->
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
  <!-- Form Validation -->
  <link rel="stylesheet" href="../../assets/vendor/libs/%40form-validation/form-validation.css" />

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>
  
  <script src="../../assets/js/config.js"></script>


  </script>
  
  <style>
    /* Add to your existing styles */
    .client-detail-card {
      background: #fff;
      border-radius: 0.75rem;
      padding: 1.25rem;
      height: 100%;
      box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
    }

    .client-info-item {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding: 0.5rem;
      border-radius: 0.5rem;
    }

    .client-info-icon {
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

    .modal-header {
      background: linear-gradient(135deg,
          #0a3622 0%,
          #1a5c3c 100%) !important;
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
      padding: 1.5rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.25rem;
    }

    .btn i {
      font-size: 1rem;
    }

    .btn-sm {
      padding: 0.25rem 0.5rem;
      font-size: 0.875rem;
    }

    .gap-2 {
      gap: 0.5rem !important;
    }
  </style>
</head>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      @include('components.sidebar')

      <!-- Keep rest of existing content -->
      <div class="layout-page">
        <!-- Existing navbar and content sections -->
        <nav
          class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
          id="layout-navbar">
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
                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                  id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                  <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                  <li>
                    <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light"
                      aria-pressed="false">
                      <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark"
                      aria-pressed="true">
                      <span><i class="icon-base ti tabler-moon-stars icon-22px me-3"
                          data-icon="moon-stars"></i>Dark</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system"
                      aria-pressed="false">
                      <span><i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3"
                          data-icon="device-desktop-analytics"></i>System</span>
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
                      <i class="icon-base ti tabler-settings me-3 icon-md"></i><span
                        class="align-middle">Settings</span>
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

        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Replace the existing table section with this -->
            <div class="card">
              <!-- Table Header with Search -->
              <div class="d-flex justify-content-between align-items-center p-3">
                <h5 class="card-title mb-0">Services List</h5>
                <a href="{{ route('page.new-service') }}" class="btn btn-primary">
                  <i class="ti tabler-plus me-1"></i> Add New Service
                </a>
              </div>

              <!-- Success/Error Messages -->
              <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

              <!-- Branch Filter -->
              <div class="px-3 pb-3">
                <label for="branchFilter" class="fw-bold me-2">Select Branch:</label>
                <select id="branchFilter" class="form-select w-auto d-inline-block">
                  <option value="">All Branches</option>
                  @foreach($branches as $branch)
                    <option value="{{ $branch->branch_code }}">{{ $branch->branch_name }}</option>
                  @endforeach
                </select>
              </div>

              <!-- Table -->
              <div class="table-responsive text-nowrap px-3">
                <table class="table table-striped" id="tableService">
                  <thead class="table-light">
                    <tr>
                      <th>Service ID</th>
                      <th>Services Name</th>
                      <th>Branch Name</th>
                      <th>Description</th>
                      <th>Duration</th>
                      <th>Service Category</th>
                      <th>Service Cost</th>
                      <th>Loyalty Points</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $service)
                    <tr>
                      <td>{{ $service->id }}</td>
                      <td>{{ $service->service_name }}</td>
                      <td>{{ $service->branch ? $service->branch->branch_name : $service->branch_code }}</td>
                      <td>{{ $service->description }}</td>
                      <td>{{ $service->duration }}</td>
                      <td>{{ $service->service_category }}</td>
                      <td>{{ $service->service_cost }}</td>
                      <td>{{ $service->loyalty_pts }}</td>
                      <td>
                        <div class="d-flex gap-2">
                          <button class="btn btn-sm btn-success view-service" 
                            data-id="{{ $service->id }}"
                            data-name="{{ $service->service_name }}"
                            data-description="{{ $service->description }}"
                            data-cost="{{ $service->service_cost }}"
                            data-points="{{ $service->loyalty_pts }}">
                            <i class="ti tabler-eye me-1"></i> View
                          </button>
                          <button class="btn btn-sm btn-info edit-service" 
                            data-service-id="{{ $service->id }}"
                            data-service-name="{{ $service->service_name }}"
                            data-service-branch="{{ $service->branch_code }}"
                            data-service-description="{{ $service->description }}"
                            data-service-duration="{{ $service->duration }}"
                            data-service-category="{{ $service->service_category }}"
                            data-service-cost="{{ $service->service_cost }}"
                            data-service-points="{{ $service->loyalty_pts }}">
                            <i class="ti tabler-edit me-1"></i> Edit
                          </button>
                          <button class="btn btn-sm btn-danger delete-service" 
                            data-service-id="{{ $service->id }}"
                            data-name="{{ $service->service_name }}">
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

        <!-- Add this modal after your table -->
        <div class="modal fade" id="serviceModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content border-0">
              <div class="modal-header bg-primary text-white border-0">
                <h5 class="modal-title text-white fs-4">
                  <i class="ti tabler-plus me-2"></i>
                  <span id="modalServiceName"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body p-4">
                <div class="row g-3">
                  <!-- Service Details -->
                  <div class="col-md-6">
                    <div class="client-detail-card h-100">
                      <h6 class="text-primary mb-3">Service Information</h6>
                      <div class="client-info-item">
                        <div class="client-info-icon">
                          <i class="ti tabler-tag"></i>
                        </div>
                        <div>
                          <small class="text-muted d-block">Service Cost</small>
                          <span id="modalCost" class="fw-semibold"></span>
                        </div>
                      </div>
                      <div class="client-info-item">
                        <div class="client-info-icon">
                          <i class="ti tabler-award"></i>
                        </div>
                        <div>
                          <small class="text-muted d-block">Loyalty Points</small>
                          <span id="modalPoints" class="fw-semibold"></span>
                        </div>
                      </div>
                      <div class="client-info-item mb-0">
                        <div class="client-info-icon">
                          <i class="ti tabler-file-text"></i>
                        </div>
                        <div>
                          <small class="text-muted d-block">Description</small>
                          <span id="modalDescription" class="fw-semibold"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Service Modal -->
        <div class="modal fade" id="editServiceModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #0a3622">
                <h5 class="modal-title text-white">Edit Service</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="editServiceForm" method="POST" action="{{ route('service.update') }}">
                  @csrf
                  @method('PUT')
                  <input type="hidden" id="edit_service_id" name="id" />
                  <div class="mb-3">
                    <label class="form-label" for="edit_service_name">Service Name</label>
                    <input type="text" id="edit_service_name" name="service_name" class="form-control" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="edit_branch_code">Branch Code</label>
                    <input type="text" id="edit_branch_code" name="branch_code" class="form-control" required />
                    
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="edit_description">Description</label>
                    <textarea id="edit_description" name="description" class="form-control" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="edit_duration">Duration</label>
                    <input type="text" id="edit_duration" name="duration" class="form-control" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="edit_service_category">Service Category</label>
                    <input type="text" id="edit_service_category" name="service_category" class="form-control" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="edit_service_cost">Service Cost</label>
                    <input type="number" id="edit_service_cost" name="service_cost" class="form-control" required />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="edit_loyalty_pts">Loyalty Points</label>
                    <input type="number" id="edit_loyalty_pts" name="loyalty_pts" class="form-control" required />
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Service</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Hidden form for deleting service -->
        <form id="deleteServiceForm" method="POST" action="{{ route('service.delete') }}" style="display: none;">
          @csrf
          @method('DELETE')
          <input type="hidden" id="delete-service" name="id" />
        </form>

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
  

  <script src="../../assets/js/service-management.js"></script>
  <script src="{{ asset('assets/js/service-management.js') }}" defer></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>
    $(document).ready(function () {
      $('#servicesTable').DataTable();
  
        // Filter by branch
        $("#branchFilter").on("change", function () {
          var selectedBranch = $(this).val();
          table.column(0).search(selectedBranch).draw();
        });
      });

      // Add this to your existing script section
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".view-service").forEach((button) => {
          button.addEventListener("click", function () {
            // Update modal content
            document.getElementById("modalServiceName").textContent =
              this.dataset.name;
            document.getElementById("modalCost").textContent =
              this.dataset.cost;
            document.getElementById("modalPoints").textContent =
              this.dataset.points;
            document.getElementById("modalDescription").textContent =
              this.dataset.description;
          });
        });
      });

      // Handle Edit button
      $('.edit-service').on('click', function() {
        $('#edit_service_id').val($(this).data('service-id'));
        $('#edit_service_name').val($(this).data('service-name'));
        $('#edit_branch_code').val($(this).data('service-branch'));
        $('#edit_description').val($(this).data('service-description'));
        $('#edit_duration').val($(this).data('service-duration'));
        $('#edit_service_category').val($(this).data('service-category'));
        $('#edit_service_cost').val($(this).data('service-cost'));
        $('#edit_loyalty_pts').val($(this).data('service-points'));
        
        // For debugging - add this temporarily
        console.log('Service ID:', $(this).data('service-id'));
        
        $('#editServiceModal').modal('show');
      });

      // Confirm update with SweetAlert
      $('#editServiceForm').on('submit', function(e) {
        e.preventDefault();
        let form = this;
        $('#editServiceModal').modal('hide');
        
        Swal.fire({
          title: 'Confirm Update',
          text: "Are you sure you want to update this service?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#0a3622',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          } else {
            $('#editServiceModal').modal('show');
          }
        });
      });

      // Handle Delete button with SweetAlert
      $('.delete-service').on('click', function() {
          const serviceID = $(this).data('service-id');
          
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0a3622',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              // Set the service ID in the hidden delete form
              $('#delete-service').val(serviceID);
              // Submit the form
              $('#deleteServiceForm').submit();
            }
          });
      });
      
      // Flash messages for success/error using SweetAlert
      @if(session('success'))
        Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: "{{ session('success') }}",
          confirmButtonColor: '#0a3622'
        });
      @endif
      
      @if(session('error'))
        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: "{{ session('error') }}",
          confirmButtonColor: '#d33'
        });
      @endif
  </script>
<script>
  $(document).ready(function () {
    $('#tableService').DataTable({
       dom: 'Bfrtip',
       searching: true,
        paging: true,
        searchPlaceholder: 'Search...',
    });
});
</script>
</body>

</html>