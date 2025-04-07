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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Include the same CSS as staff-list -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />

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
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="card-title mb-0">Position List</h5>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPositionModal">
                    <i class="ti tabler-plus me-1"></i> Add New Position
                  </button>
                </div>

                <!-- Response Messages -->
                <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table class="table table-striped table-bordered staffTable">
                    <thead class="table-light">
                      <tr>
                        <th>Position Title</th>
                        <th>Department</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(isset($positions) && count($positions) > 0)
                        @foreach($positions as $position)
                        <tr>
                          <td>{{ $position->position_name }}</td>
                          <td>{{ $position->department }}</td>
                          <td>{{ $position->description }}</td>
                          <td>
                            <span class="badge bg-label-{{ $position->status ? 'success' : 'danger' }}">
                              {{ $position->status ? 'Active' : 'Inactive' }}
                            </span>
                          </td>
                          <td>
                            <div class="d-inline-block">
                              <button type="button" class="btn btn-sm btn-info edit-position" 
                                data-bs-toggle="modal"
                                data-bs-target="#editPositionModal"
                                data-id="{{ $position->position_id }}"
                                data-title="{{ $position->position_name }}"
                                data-department="{{ $position->department }}"
                                data-description="{{ $position->description }}"
                                data-status="{{ $position->status }}">
                                <i class="ti tabler-edit me-1"></i> Edit
                              </button>
                              
                              <button type="button" class="btn btn-sm btn-danger delete-position" 
                                data-position-id="{{ $position->position_id }}"
                                data-position-title="{{ $position->position_name }}">
                                <i class="ti tabler-trash me-1"></i> Delete
                              </button>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      @else
                        <tr>
                          <td colspan="5" class="text-center">No positions found</td>
                        </tr>
                      @endif
                    </tbody>
                  </table>
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
          </div>
        </div>
      </div>
    </div>

    <!-- Add Position Modal -->
    <div class="modal fade" id="addPositionModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form 
          id="addPositionForm" method="POST" action="{{ route('position.create') }}"
          >
            @csrf
            <div class="modal-header" style="background-color: #0a3622">
              <h5 class="modal-title text-white">
                <i class="ti tabler-plus me-1"></i> Add New Position
              </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <div class="row g-3">
                <div class="col-12">
                  <label class="form-label" for="position_name">Position Name</label>
                  <input type="text" id="position_name" name="position_name" class="form-control" required>
                </div>

                <div class="col-12">
                  <label class="form-label" for="department">Department</label>
                  <select class="form-select" id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="Management">Management</option>
                    <option value="Operations">Operations</option>
                    <option value="Services">Services</option>
                    <option value="Administration">Administration</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label" for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                    <label class="form-check-label" for="status">Active Status</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Add Position</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Edit Position Modal -->
    <div class="modal fade" id="editPositionModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form 
          {{-- id="editPositionForm" method="POST" action="{{ route('position.update') }}" --}}
          >
            @csrf
            @method('PUT')
            <input type="hidden" name="position_id" id="edit_position_id">
            
            <div class="modal-header bg-info">
              <h5 class="modal-title text-white">
                <i class="ti tabler-edit me-1"></i> Edit Position
              </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <div class="row g-3">
                <div class="col-12">
                  <label class="form-label" for="edit_position_title">Position Title</label>
                  <input type="text" id="edit_position_title" name="title" class="form-control" required>
                </div>

                <div class="col-12">
                  <label class="form-label" for="edit_department">Department</label>
                  <select class="form-select" id="edit_department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="Management">Management</option>
                    <option value="Operations">Operations</option>
                    <option value="Services">Services</option>
                    <option value="Administration">Administration</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label" for="edit_description">Description</label>
                  <textarea class="form-control" id="edit_description" name="description" rows="3" required></textarea>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="edit_status" name="status">
                    <label class="form-check-label" for="edit_status">Active Status</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-info">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <form id="deletePositionForm" method="POST" style="display: none;">
      @csrf
      @method('DELETE')
      <input type="hidden" id="delete_position_id" name="id" value="">
    </form>


    <!-- Include Scripts -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="../../assets/js/main.js"></script>
    
    <!-- Add SweetAlert2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  
    <script>
      $(document).ready(function() {
        // SweetAlert default configuration
        const swalConfig = {
          customClass: {
            container: 'swal-container-class',
            popup: 'swal-popup-class'
          },
          backdrop: true,
          allowOutsideClick: false
        };
        
        // Add custom CSS for SweetAlert z-index
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

        // Initialize DataTable
        $('.table').DataTable();

        // Setup CSRF token for AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Add Position Form Submit
        $('#addPositionForm').on('submit', function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '{{ route("position.create") }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status) {
                        $('#addPositionModal').modal('hide');
                        showAlert('success', response.message);
                        setTimeout(() => location.reload(), 1500);
                    } else {
                        showAlert('error', response.message);
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'Error creating position';
                    
                    if (xhr.responseJSON) {
                        if (xhr.responseJSON.errors) {
                            errorMessage = '<ul>';
                            for (let field in xhr.responseJSON.errors) {
                                errorMessage += `<li>${xhr.responseJSON.errors[field]}</li>`;
                            }
                            errorMessage += '</ul>';
                        } else if (xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                    }
                    
                    showAlert('error', errorMessage);
                    console.error('Position creation error:', xhr);
                }
            });
        });

        // Edit Position Form Submit
        $('#editPositionForm').on('submit', function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '{{ route("position.update") }}',
                type: 'PUT',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.status) {
                        $('#editPositionModal').modal('hide');
                        showAlert('success', response.message);
                        setTimeout(() => location.reload(), 1500);
                    } else {
                        showAlert('error', response.message);
                    }
                },
                error: function(xhr) {
                    showAlert('error', 'Error updating position');
                }
            });
        });

        // Handle delete position button clicks 
        $(document).on('click', '.delete-position', function() {
          const positionId = $(this).data('position-id');
          const positionTitle = $(this).data('position-title');
          
          // Set the position ID in the hidden form
          $('#delete_position_id').val(positionId);
          
          // Set the form action dynamically
          $('#deletePositionForm').attr('action', `/position/${positionId}`);
          
          Swal.fire({
            ...swalConfig,
            title: 'Confirm Delete',
            html: `Are you sure you want to delete position <strong>${positionTitle}</strong>?<br>This action cannot be undone.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d'
          }).then((result) => {
            if (result.isConfirmed) {
              // Submit the form instead of making an AJAX call
              $('#deletePositionForm').submit();
            }
          });
        });

        // Helper function to show alerts
        function showAlert(type, message) {
          Swal.fire({
            ...swalConfig,
            icon: type,
            title: type === 'success' ? 'Success' : 'Error',
            text: message,
            timer: type === 'success' ? 1500 : undefined,
            showConfirmButton: type !== 'success'
          });
        }
      });
    </script>
  </body>
</html>