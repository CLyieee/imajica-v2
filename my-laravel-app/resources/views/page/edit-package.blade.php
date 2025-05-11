@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #0A3622;">
                    <h5 class="text-white mb-0">Edit Package</h5>
                </div>
                <div class="card-body pt-6">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <form method="post" action="{{ route('package.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="package_id" value="{{ $package->package_id }}">
                                
                                <div class="row g-6">
                                    <div class="col-md-6">
                                        <label class="form-label" for="package_name">Package Name</label>
                                        <input
                                            type="text"
                                            id="package_name"
                                            name="package_name"
                                            class="form-control"
                                            placeholder="Package Name"
                                            value="{{ $package->package_name }}"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Branch</label>
                                        <select
                                            class="select2 form-select branch-select"
                                            name="branch_code"
                                            id="branch_code"
                                            data-allow-clear="true"
                                            required
                                        >
                                            <option value="">Select Branch</option>
                                            @foreach($branches as $branch)
                                                <option value="{{ $branch->branch_code }}" {{ $package->branch_code == $branch->branch_code ? 'selected' : '' }}>
                                                    {{ $branch->branch_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea
                                            name="description"
                                            class="form-control"
                                            id="description"
                                            rows="4"
                                            placeholder="Package Description"
                                        >{{ $package->description }}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Inclusion</label>
                                        <select
                                            class="select2 form-select"
                                            name="inclusions[]"
                                            id="inclusions"
                                            multiple
                                            data-placeholder="Select services to include"
                                            required
                                        >
                                            @foreach($services as $service)
                                                <option value="{{ $service->service_id }}" {{ $package->services->contains('service_id', $service->service_id) ? 'selected' : '' }}>
                                                    {{ $service->service_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label" for="free">Free</label>
                                        <input
                                            type="text"
                                            id="free"
                                            name="free"
                                            class="form-control"
                                            placeholder="Free items or services included"
                                            value="{{ $package->free }}"
                                        />
                                    </div>
                                </div>

                                <br />
                                <div class="row">
                                    <div class="col-sm-2 col-4 d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            Update Package
                                        </button>
                                    </div>
                                    <div class="col-sm-2 col-4 d-grid">
                                        <a href="{{ route('page.packages-list') }}" class="btn btn-outline-secondary">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <br />
                            <div id="responseMessage" style="display: none;" class="alert mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
    $(document).ready(function() {
        // Initialize select2
        $('.select2').each(function() {
            $(this).select2({
                dropdownParent: $(this).parent()
            });
        });

        // Form submission with AJAX
        $('form').on('submit', function(e) {
            e.preventDefault();
            
            // Validate required fields
            const requiredFields = ['package_name', 'branch_code', 'inclusions'];
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!$(`#${field}`).val()) {
                    isValid = false;
                    $(`#${field}`).addClass('is-invalid');
                } else {
                    $(`#${field}`).removeClass('is-invalid');
                }
            });

            if (!isValid) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Required Fields',
                    text: 'Please fill in all required fields',
                    confirmButtonColor: '#0A3622'
                });
                return;
            }

            let formData = new FormData(this);

            // Show loading state
            Swal.fire({
                title: 'Processing...',
                text: 'Please wait while we update the package',
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message || 'Package updated successfully',
                            confirmButtonColor: '#0A3622'
                        }).then(() => {
                            window.location.href = "{{ route('page.packages-list') }}";
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Operation Failed',
                            text: response.message || 'Failed to update package. Please try again.',
                            confirmButtonColor: '#0A3622'
                        });
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong!';
                    if(xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMessage,
                        confirmButtonColor: '#0A3622'
                    });
                }
            });
        });
    });
</script>
@endsection 