@extends('layouts.app')

@section('title', 'Services List')

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
  const serviceRoutes = {
      add: "{{ route('add.service') }}",
      getAll: "{{ route('get.services') }}",
      getByBranch: "{{ route('get.services.by.branch', ['branch_code' => '__BRANCH_CODE__']) }}",
      get: "{{ route('get.service', ['id' => '__ID__']) }}",
      update: "{{ route('update.service', ['id' => '__ID__']) }}",
      delete: "{{ route('delete.service', ['id' => '__ID__']) }}"
  };
  
  const branchRoutes = {
      getAll: "{{ route('get.branches') }}",
      get: "{{ route('get.branch', ['branch_code' => '__CODE__']) }}"
  };
</script>
@endsection

@section('content')
<div class="card">
  <!-- Branch Filter -->
  <div class="d-flex justify-content-between align-items-center p-3">
    <div>
      <h5 class="card-title mb-2">Services List</h5>
      <div class="d-flex align-items-center">
        <label for="filter_branch" class="fw-bold me-2">Filter by Branch:</label>
        <select id="filter_branch" class="form-select w-auto d-inline-block branch-select">
          <option value="">All Branches</option>
          <!-- Branch options will be loaded dynamically -->
        </select>
      </div>
    </div>
    <a href="{{ route('page.new-services') }}" class="btn btn-primary">
      <i class="ti tabler-plus me-1"></i> Add New Service
    </a>
  </div>

  <!-- Success/Error Messages -->
  <div id="responseMessage" style="display: none;" class="alert mx-3 mt-0 mb-3"></div>

  <!-- Table -->
  <div class="table-responsive text-nowrap px-3">
    <table id="serviceTable" class="table table-striped">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Service Name</th>
          <th>Branch</th>
          <th>Category</th>
          <th>Duration</th>
          <th>Cost</th>
          <th>Points</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Service data will be loaded dynamically -->
        <tr>
          <td colspan="8" class="text-center">Loading services...</td>
        </tr>
      </tbody>
    </table>
    <br />
  </div>
</div>

<!-- Service Details Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
      <div class="modal-header bg-primary text-white border-0">
        <h5 class="modal-title text-white fs-4">
          <i class="ti tabler-info-circle me-2"></i>
          <span id="modalServiceName"></span>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-3">
          <!-- Service Details -->
          <div class="col-md-12">
            <div class="client-detail-card">
              <h6 class="text-primary mb-3">Service Information</h6>
              <div class="row">
                <div class="col-md-6">
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-building-store"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Branch</small>
                      <span id="modalBranch" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-category"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Category</small>
                      <span id="modalCategory" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="client-info-item">
                    <div class="client-info-icon">
                      <i class="ti tabler-clock"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Duration</small>
                      <span id="modalDuration" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
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
                </div>
              </div>
              <div class="client-info-item mt-3">
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
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0a3622">
        <h5 class="modal-title text-white">Edit Service</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateServiceForm">
          @csrf
          <input type="hidden" id="edit_service_id" name="id">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="edit_service_name">Service Name</label>
              <input type="text" id="edit_service_name" name="service_name" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="edit_branch_code">Branch</label>
              <select id="edit_branch_code" name="branch_code" class="form-select branch-select" required>
                <option value="">Select Branch</option>
                <!-- Branch options will be loaded dynamically -->
              </select>
            </div>
            <div class="col-12">
              <label class="form-label" for="edit_description">Description</label>
              <textarea id="edit_description" name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="edit_duration">Duration (minutes)</label>
              <input type="number" id="edit_duration" name="duration" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="edit_service_category">Service Category</label>
              <select id="edit_service_category" name="service_category" class="form-select" required>
                <option value="">Select Category</option>
                <option value="Facials">Facials</option>
                <option value="Body Contouring">Body Contouring</option>
                <option value="Laser Treatments">Laser Treatments</option>
                <option value="Injectables">Injectables</option>
                <option value="Others">Others</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="edit_service_cost">Service Cost</label>
              <input type="number" step="0.01" id="edit_service_cost" name="service_cost" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="edit_loyalty_pts">Loyalty Points</label>
              <input type="number" id="edit_loyalty_pts" name="loyalty_pts" class="form-control">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" id="updateServiceBtn" class="btn btn-primary">Update Service</button>
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

<!-- Service Management JS -->
<script src="../../assets/js/service-management.js"></script>
@endsection
