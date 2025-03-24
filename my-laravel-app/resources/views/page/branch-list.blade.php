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

    <title>Imajica Booking System - Branch List</title>

    <meta name="description" content="Imajica Booking System" />
    <meta name="keywords" content="Imajica Booking System" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>

   
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
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <!-- Branch Filter -->
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="card-title mb-0">Branch List</h5>
                  <a href="{{ route('page.new-branch') }}" class="btn btn-primary">
                    <i class="ti tabler-plus me-1"></i> Add New Branch
                  </a>
                </div>

                <!-- Success/Error Messages -->
                <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table class="table table-striped">
                    <thead class="table-light">
                      <tr>
                        <th>Branch Code</th>
                        <th>Branch Name</th>
                        <th>Address</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($branchs as $branch)
                      <tr>
                        <td>{{ $branch->branch_code }}</td>
                        <td>{{ $branch->branch_name }}</td>
                        <td>{{ $branch->address }}</td>
                        <td>
                          <button type="button" class="btn btn-success btn-sm edit-branch" 
                            data-branch-code="{{ $branch->branch_code }}"
                            data-branch-name="{{ $branch->branch_name }}"
                            data-address="{{ $branch->address }}">
                            Edit
                          </button>
                          <button type="button" class="btn btn-danger btn-sm delete-branch" 
                            data-branch-code="{{ $branch->branch_code }}"
                            data-branch-name="{{ $branch->branch_name }}">
                            Delete
                          </button>
                        </td>
                      </tr>
                      @endforeach
                      @if(count($branchs) == 0)
                      <tr>
                        <td colspan="4" class="text-center">No branches found</td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
                  <br />
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    © <script>document.write(new Date().getFullYear());</script>
                    Developed by <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
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

    <!-- Edit Branch Modal -->
    <div class="modal fade" id="editBranchModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #0a3622">
            <h5 class="modal-title text-white">Edit Branch</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editBranchForm" method="POST" action="{{ route('branch.update') }}">
              @csrf
              @method('PUT')
              <input type="hidden" id="edit_branch_code" name="branch_code">
              <div class="mb-3">
                <label class="form-label" for="edit_branch_name">Branch Name</label>
                <input type="text" id="edit_branch_name" name="branch_name" class="form-control" required>
                <div class="invalid-feedback" id="edit_branch_name_error"></div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="edit_address">Address</label>
                <textarea id="edit_address" name="address" class="form-control" rows="3" required></textarea>
                <div class="invalid-feedback" id="edit_address_error"></div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update Branch</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Branch Form (Hidden) -->
    <form id="deleteBranchForm" method="POST" action="{{ route('branch.delete') }}" style="display: none;">
      @csrf
      @method('DELETE')
      <input type="hidden" id="delete_branch_code" name="branch_code">
    </form>

    <!-- Core JS -->
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

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Script for Branch Management -->
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
            timer: 3000,
            showConfirmButton: false
          });
        @endif

        // Display validation errors if any
        @if($errors->any())
          Swal.fire({
            ...swalConfig,
            icon: 'error',
            title: 'Validation Error',
            text: 'Please check the form for errors',
            timer: 3000,
            showConfirmButton: false
          });
        @endif

        // Handle edit branch button clicks
        $('.edit-branch').on('click', function() {
          const branchCode = $(this).data('branch-code');
          const branchName = $(this).data('branch-name');
          const address = $(this).data('address');
          
          // Populate the form fields
          $('#edit_branch_code').val(branchCode);
          $('#edit_branch_name').val(branchName);
          $('#edit_address').val(address);
          
          // Show the modal
          $('#editBranchModal').modal('show');
        });

        // Handle form submission with confirmation
        $('#editBranchForm').on('submit', function(e) {
          e.preventDefault();
          
          // Hide the modal before showing SweetAlert
          $('#editBranchModal').modal('hide');
          
          setTimeout(() => {
            Swal.fire({
              ...swalConfig,
              title: 'Confirm Update',
              text: 'Are you sure you want to update this branch?',
              icon: 'question',
              showCancelButton: true,
              confirmButtonText: 'Yes, update it!',
              cancelButtonText: 'Cancel',
              confirmButtonColor: '#0a3622',
              cancelButtonColor: '#d33'
            }).then((result) => {
              if (result.isConfirmed) {
                // Submit the form normally
                this.submit();
              } else {
                // If canceled, show the modal again
                $('#editBranchModal').modal('show');
              }
            });
          }, 200); // Small delay to ensure modal is fully hidden
        });

        // Handle delete branch button clicks
        $('.delete-branch').on('click', function() {
          const branchCode = $(this).data('branch-code');
          const branchName = $(this).data('branch-name');
          
          // Set the branch code in the hidden delete form
          $('#delete_branch_code').val(branchCode);
          
          // Show delete confirmation
          Swal.fire({
            ...swalConfig,
            title: 'Confirm Delete',
            html: `Are you sure you want to delete branch <strong>${branchName}</strong>?<br>This action cannot be undone.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d'
          }).then((result) => {
            if (result.isConfirmed) {
              // Submit the delete form
              $('#deleteBranchForm').submit();
            }
          });
        });
      });
    </script>
  </body>
</html>
