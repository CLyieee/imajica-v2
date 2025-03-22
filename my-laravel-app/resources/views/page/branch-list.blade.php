@extends('layouts.app')

@section('title', 'Branch List')

@section('page-css')
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
@endsection

@section('head-scripts')
<script>
  const branchRoutes = {
      add: "{{ route('add.branch') }}",
      getAll: "{{ route('get.branches') }}",
      get: "{{ route('get.branch', ['branch_code' => '__CODE__']) }}",
      update: "{{ route('update.branch', ['branch_code' => '__CODE__']) }}",
      delete: "{{ route('delete.branch', ['branch_code' => '__CODE__']) }}"
  };
</script>
@endsection

@section('content')
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
    <table id="branchTable" class="table table-striped">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Branch Code</th>
          <th>Branch Name</th>
          <th>Address</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Branch data will be loaded dynamically -->
        <tr>
          <td colspan="5" class="text-center">Loading branches...</td>
        </tr>
      </tbody>
    </table>
    <br />
  </div>
</div>

<!-- Edit Branch Modal -->
<div class="modal fade" id="editBranchModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0a3622">
        <h5 class="modal-title text-white">Edit Branch</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateBranchForm">
          @csrf
          <input type="hidden" id="edit_branch_code" name="branch_code">
          <div class="mb-3">
            <label class="form-label" for="edit_branch_name">Branch Name</label>
            <input type="text" id="edit_branch_name" name="branch_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label" for="edit_address">Address</label>
            <textarea id="edit_address" name="address" class="form-control" rows="3" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" id="updateBranchBtn" class="btn btn-primary">Update Branch</button>
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

<!-- Branch Management JS -->
<script src="../../assets/js/branch-management.js"></script>
<script>
  $(document).ready(function () {
    // Initialize DataTable with proper options
    if ($("#branchTable").length) {
      var branchTable = $("#branchTable").DataTable({
        responsive: true,
        ordering: true,
        paging: true,
        language: {
          search: "",
          searchPlaceholder: "Search...",
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
