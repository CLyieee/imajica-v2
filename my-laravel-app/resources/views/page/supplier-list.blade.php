@extends('layouts.app')
@extends('layouts.layout-collapsed-menu-dark')
@extends('layouts.layout-container-dark')
@extends('layouts.layout-content-navbar-and-sidebar-dark')
@extends('layouts.layout-without-navbar-dark')
@extends('layouts.layout-content-navbar-dark')
@extends('layouts.layout-fluid-dark')
@extends('layouts.layout-without-menu-dark')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #0a3622">
                    <h5 class="card-title mb-0 text-white">Supplier List</h5>
                    <a href="{{ route('page.new-supplier') }}" class="btn btn-primary">
                        <i class="ti tabler-plus"></i> Add New Supplier
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center">Supplier Code</th>
                                    <th class="text-center">Supplier Name</th>
                                    <th class="text-center">Contact Person</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                <tr>
                                    <td class="text-center">{{ $supplier->supplier_code }}</td>
                                    <td class="text-center">{{ $supplier->supplier_name }}</td>
                                    <td class="text-center">{{ $supplier->contact_person }}</td>
                                    <td class="text-center">{{ $supplier->email }}</td>
                                    <td class="text-center">{{ $supplier->phone }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-{{ $supplier->status === 'active' ? 'success' : 'danger' }}">
                                            {{ ucfirst($supplier->status) }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-inline-block">
                                            <button type="button" class="btn btn-sm btn-info view-supplier" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#supplierModal"
                                                data-id="{{ $supplier->id }}"
                                                data-code="{{ $supplier->supplier_code }}"
                                                data-name="{{ $supplier->supplier_name }}"
                                                data-contact="{{ $supplier->contact_person }}"
                                                data-email="{{ $supplier->email }}"
                                                data-phone="{{ $supplier->phone }}"
                                                data-address="{{ $supplier->address }}"
                                                data-status="{{ $supplier->status }}">
                                                <i class="ti tabler-eye"></i>
                                            </button>
                                            <a href="{{ route('page.edit-supplier', ['id' => $supplier->id]) }}" class="btn btn-sm btn-primary">
                                                <i class="ti tabler-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger delete-supplier" data-id="{{ $supplier->id }}">
                                                <i class="ti tabler-trash"></i>
                                            </button>
                                        </div>
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
</div>

<!-- Supplier View Modal -->
<div class="modal fade" id="supplierModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Supplier Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h6>Supplier Code</h6>
                        <p id="modalSupplierCode"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <h6>Supplier Name</h6>
                        <p id="modalSupplierName"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <h6>Contact Person</h6>
                        <p id="modalContactPerson"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <h6>Email</h6>
                        <p id="modalEmail"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <h6>Phone</h6>
                        <p id="modalPhone"></p>
                    </div>
                    <div class="col-12 mb-3">
                        <h6>Address</h6>
                        <p id="modalAddress"></p>
                    </div>
                    <div class="col-12">
                        <h6>Status</h6>
                        <p id="modalStatus"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@section('page-script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle supplier view modal
        const supplierModal = document.getElementById('supplierModal');
        if (supplierModal) {
            supplierModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const code = button.getAttribute('data-code');
                const name = button.getAttribute('data-name');
                const contact = button.getAttribute('data-contact');
                const email = button.getAttribute('data-email');
                const phone = button.getAttribute('data-phone');
                const address = button.getAttribute('data-address');
                const status = button.getAttribute('data-status');

                document.getElementById('modalSupplierCode').textContent = code;
                document.getElementById('modalSupplierName').textContent = name;
                document.getElementById('modalContactPerson').textContent = contact;
                document.getElementById('modalEmail').textContent = email;
                document.getElementById('modalPhone').textContent = phone;
                document.getElementById('modalAddress').textContent = address;
                document.getElementById('modalStatus').textContent = status.charAt(0).toUpperCase() + status.slice(1);
            });
        }

        // Handle supplier deletion
        const deleteButtons = document.querySelectorAll('.delete-supplier');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const supplierId = this.getAttribute('data-id');
                if (confirm('Are you sure you want to delete this supplier?')) {
                    // Send delete request to server
                    fetch(`/suppliers/${supplierId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Reload the page or remove the row from the table
                            window.location.reload();
                        } else {
                            alert('Failed to delete supplier: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the supplier');
                    });
                }
            });
        });
    });
</script>
@endsection

