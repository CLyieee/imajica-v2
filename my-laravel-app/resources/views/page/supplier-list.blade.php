@extends('layouts.app')

@section('title', 'Supplier List')

@section('page-css')
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
@endsection

@section('head-scripts')
<script>
  const supplierRoutes = {
      add: "{{ route('add.supplier') }}",
      getAll: "{{ route('get.suppliers') }}",
      get: "{{ route('get.supplier', ['id' => '__ID__']) }}",
      update: "{{ route('update.supplier', ['id' => '__ID__']) }}",
      delete: "{{ route('delete.supplier', ['id' => '__ID__']) }}"
  };
</script>
@endsection

@section('content')
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
    <table id="supplierTable" class="table table-striped">
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
        <!-- Supplier data will be loaded dynamically -->
        <tr>
          <td colspan="6" class="text-center">Loading suppliers...</td>
        </tr>
      </tbody>
    </table>
    <br />
  </div>
</div>

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
@endsection

@section('page-scripts')
<!-- Vendors JS -->
<script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="../../assets/vendor/libs/moment/moment.js"></script>
<script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
<script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>

<!-- Supplier Management JS -->
<script src="../../assets/js/supplier-management.js"></script>
<script>
  $(document).ready(function () {
    // Initialize DataTable with proper options
    if ($("#supplierTable").length) {
      var supplierTable = $("#supplierTable").DataTable({
        responsive: true,
        ordering: true,
        paging: true,
        language: {
          search: "",
          searchPlaceholder: "Search supplier...",
          paginate: {
            previous: '<i class="ti tabler-chevron-left"></i>',
            next: '<i class="ti tabler-chevron-right"></i>'
          }
        },
        // Remove initial data loading to prevent duplicate content
        initComplete: function () {
          // Add any custom initializations here
        }
      });
    }
  });
</script>
@endsection
