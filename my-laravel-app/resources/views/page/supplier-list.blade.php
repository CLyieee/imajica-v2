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

    <title>Imajica Booking System - Supplier List</title>

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

    <style>
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
        background: linear-gradient(135deg, #0a3622 0%, #1a5c3c 100%) !important;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        padding: 1.5rem;
      }
    </style>

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>

    <script>
      const supplierRoutes = {
          add: "{{ route('add.supplier') }}",
          getAll: "{{ route('get.suppliers') }}",
          get: "{{ route('get.supplier', ['id' => '__ID__']) }}",
          update: "{{ route('update.supplier', ['id' => '__ID__']) }}",
          delete: "{{ route('delete.supplier', ['id' => '__ID__']) }}"
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
                <!-- Table Header with Search -->
                <div class="d-flex justify-content-between align-items-center p-3">
                  <h5 class="card-title mb-0">Supplier List</h5>
                  <a href="{{ route('page.new-supplier') }}" class="btn btn-primary">
                    <i class="ti tabler-plus me-1"></i> Add New Supplier
                  </a>
                </div>

                <!-- Success/Error Messages -->
                <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table class="table table-striped" id="supplierTable">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>  
                        <th>Supplier Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Type</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($suppliers as $supplier)
                        <tr>
                          <td>{{ $supplier->id }}</td>
                          <td>{{ $supplier->supplier_name }}</td>
                          <td>{{ $supplier->email }}</td>
                          <td>{{ $supplier->contactNumber }}</td>
                          <td>{{ $supplier->supplier_type }}</td>
                          <td>
                            <div class="d-flex gap-2">
                              <button class="btn btn-sm btn-success view-supplier" data-id="${row.id}">
                                <i class="ti tabler-eye me-1"></i> View
                              </button>
                              <button class="btn btn-sm btn-info edit-supplier" data-id="${row.id}">
                                <i class="ti tabler-edit me-1"></i> Edit
                              </button>
                              <button class="btn btn-sm btn-danger delete-supplier" data-id="${row.id}" data-name="${row.supplier_name}">
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

    <!-- Supplier Details Modal -->
    <div class="modal fade" id="supplierModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
          <div class="modal-header bg-primary text-white border-0">
            <h5 class="modal-title text-white fs-4">
              <i class="ti tabler-info-circle me-2"></i>
              <span id="modalSupplierName"></span>
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <div class="row g-3">
              <!-- Supplier Details -->
              <div class="col-md-6">
                <div class="client-detail-card h-100">
                  <h6 class="text-primary mb-3">Contact Information</h6>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-mail"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Email</small>
                      <span id="modalEmail" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-phone"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Contact</small>
                      <span id="modalContact" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-home"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Address</small>
                      <span id="modalAddress" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client-detail-card h-100">
                  <h6 class="text-primary mb-3">Supplier Details</h6>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-category"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Type</small>
                      <span id="modalType" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-package"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Products/Services</small>
                      <span id="modalProducts" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-notes"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Notes</small>
                      <span id="modalNotes" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Supplier Modal -->
    <div class="modal fade" id="editSupplierModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #0a3622">
            <h5 class="modal-title text-white">Edit Supplier</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="updateSupplierForm">
              @csrf
              <input type="hidden" id="edit_supplier_id" name="id">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="edit_supplier_name">Supplier Name</label>
                  <input type="text" id="edit_supplier_name" name="supplier_name" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="edit_email">Email Address</label>
                  <input type="email" id="edit_email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="edit_contactNumber">Contact Number</label>
                  <input type="text" id="edit_contactNumber" name="contactNumber" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="edit_supplier_type">Supplier Type</label>
                  <input type="text" id="edit_supplier_type" name="supplier_type" class="form-control" list="supplierTypes" required>
                  <datalist id="supplierTypes">
                    <option value="Product Supplier"></option>
                    <option value="Service Provider"></option>
                    <option value="Equipment Supplier"></option>
                    <option value="Other"></option>
                  </datalist>
                </div>
                <div class="col-12">
                  <label class="form-label" for="edit_address">Address</label>
                  <textarea id="edit_address" name="address" class="form-control" rows="3" required></textarea>
                </div>
                <div class="col-12">
                  <label class="form-label" for="edit_product_offered">Products/Services Offered</label>
                  <textarea id="edit_product_offered" name="product_offered" class="form-control" rows="3"></textarea>
                </div>
                <div class="col-12">
                  <label class="form-label" for="edit_notes">Additional Notes</label>
                  <textarea id="edit_notes" name="notes" class="form-control" rows="3"></textarea>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" id="updateSupplierBtn" class="btn btn-primary">Update Supplier</button>
            </form>
          </div>
        </div>
      </div>
    </div>



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

    <!-- Supplier Management JS -->
    <script src="../../assets/js/supplier-management.js"></script>


    <script>
      $(document).ready(function() {
        $('#supplierTable').DataTable({
            responsive: true,
        });
      });
    </script>
   
  </body>
</html>

