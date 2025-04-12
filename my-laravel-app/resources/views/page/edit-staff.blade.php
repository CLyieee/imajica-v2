@extends('layouts.app')

<!DOCTYPE html>

<html
  lang="en"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-skin="default"
  data-assets-path="{{ asset('assets/') }}"
  data-template="vertical-menu-template"
  data-bs-theme="light"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Edit Staff - Imajica Booking System</title>

    <meta name="description" content="Imajica Booking System" />

    <meta name="keywords" content="Imajica Booking System" />
    <meta property="og:title" content="Imajica Booking System" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="Imajica Booking System" />
    <meta
      property="og:image"
      content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png"
    />
    <meta property="og:description" content="Imajica Booking System." />
    <meta property="og:site_name" content="Pixinvent" />
    <link rel="canonical" href="Imajica Booking System" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}"
    />

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}"
    />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}"
    />

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/select2/select2.css') }}"
    />

    <!-- Add SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('assets/js/config.js') }}"></script>
    
    <style>
      .profile-upload-container {
        width: 200px;
        margin-bottom: 2rem;
      }

      .avatar-upload {
        position: relative;
        text-align: center;
      }

      .avatar-preview {
        width: 150px;
        height: 150px;
        position: relative;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #0a3622;
        box-shadow: 0 0 20px rgba(10, 54, 34, 0.15);
        margin: 0 auto;
      }

      .avatar-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .avatar-edit {
        position: absolute;
        right: 5px;
        bottom: 5px;
        z-index: 1;
      }

      .avatar-edit input {
        display: none;
      }

      .avatar-edit label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #0a3622;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .avatar-edit label i {
        color: #fff;
        font-size: 18px;
      }

      .avatar-edit label:hover {
        background-color: #0a3622;
        border-color: #0a3622;
      }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('components.sidebar')
        <!-- / Menu -->

        <div class="menu-mobile-toggler d-xl-none rounded-1">
          <a
            href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1"
          >
            <i class="ti tabler-menu icon-base"></i>
            <i class="ti tabler-chevron-right icon-base"></i>
          </a>
        </div>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Sticky Actions -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div
                      class="card-header bg-dark-green d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row"
                      style="background-color: #0a3622"
                    >
                      <h5 class="card-title mb-sm-0 me-2 text-white">
                        Edit Staff
                      </h5>
                      <div>
                        <a href="{{ route('page.staff-list') }}" class="btn btn-sm btn-light">
                          <i class="ti tabler-arrow-left me-1"></i> Back to List
                        </a>
                      </div>
                    </div>
                    <div class="card-body pt-6">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul class="mb-0">
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
          
                      @if(session('success'))
                          <div class="alert alert-success">
                              {{ session('success') }}
                          </div>
                      @endif

                      @if(session('error'))
                          <div class="alert alert-danger">
                              {{ session('error') }}
                          </div>
                      @endif
                      
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                      
                          <form method="post" action="{{ route('staff.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          
                            <input type="hidden" name="staff_id" value="{{ $staff->id }}">
                          
                            <div class="row g-6">
                              <!-- Profile Image -->
                              <div class="col-12 text-center mb-4">
                                <div class="profile-upload-container mx-auto">
                                  <div class="avatar-upload">
                                    <div class="avatar-preview">
                                      @if($staff->image_path)
                                        <img id="imagePreview" src="{{ asset('storage/' . $staff->image_path) }}" alt="Staff Profile" />
                                      @else
                                        <img id="imagePreview" src="{{ asset('assets/img/avatars/default-avatar.png') }}" alt="Staff Profile" />
                                      @endif
                                    </div>
                                    <div class="avatar-edit">
                                      <input type="file" id="imageUpload" name="image_path" accept="image/*" />
                                      <label for="imageUpload"><i class="ti tabler-camera"></i></label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Personal Information -->
                              <div class="col-12">
                                <h6 class="fw-semibold">Personal Information</h6>
                                <hr class="mt-0" />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="firstname">First Name</label>
                                <input
                                  type="text"
                                  id="firstname"
                                  name="firstname"  
                                  class="form-control"
                                  placeholder="First Name"
                                  value="{{ $staff->firstname }}"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="lastname">Last Name</label>
                                <input
                                  type="text"
                                  id="lastname"
                                  name="lastname"  
                                  class="form-control"
                                  placeholder="Last Name"
                                  value="{{ $staff->lastname }}"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="email">Email Address</label>
                                <input
                                  type="email"
                                  id="email"
                                  name="email"  
                                  class="form-control"
                                  placeholder="Email Address"
                                  value="{{ $staff->email }}"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="contact_number">Contact Number</label>
                                <input
                                  type="text"
                                  id="contact_number"
                                  name="contact_number"  
                                  class="form-control"
                                  placeholder="Contact Number"
                                  value="{{ $staff->contact_number }}"
                                  required
                                />
                              </div>

                              <!-- Work Information -->
                              <div class="col-12 mt-4">
                                <h6 class="fw-semibold">Work Information</h6>
                                <hr class="mt-0" />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Position</label>
                                <select
                                  class="select2 form-select"
                                  id="position_id"
                                  name="position_id"
                                  required
                                >
                                  <option value="">Select Position</option>
                                  @foreach($positions as $position)
                                    <option value="{{ $position->position_id }}" {{ $staff->position_id == $position->position_id ? 'selected' : '' }}>
                                      {{ $position->position_name }}
                                    </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Department</label>
                                <select
                                  class="select2 form-select"
                                  id="department_code"
                                  name="department_code"
                                  required
                                >
                                  <option value="">Select Department</option>
                                  @foreach($departments as $department)
                                    <option value="{{ $department->department_code }}" {{ $staff->department_code == $department->department_code ? 'selected' : '' }}>
                                      {{ $department->department_name }}
                                    </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="join_date">Join Date</label>
                                <input
                                  type="date"
                                  id="join_date"
                                  name="join_date"
                                  class="form-control flatpickr-basic"
                                  value="{{ $staff->join_date }}"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Employment Type</label>
                                <select
                                  class="select2 form-select"
                                  id="employment_type"
                                  name="employment_type"
                                  required
                                >
                                  <option value="">Select Employment Type</option>
                                  <option value="Full-time" {{ $staff->employment_type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                  <option value="Part-time" {{ $staff->employment_type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                  <option value="Contract" {{ $staff->employment_type == 'Contract' ? 'selected' : '' }}>Contract</option>
                                  <option value="Freelance" {{ $staff->employment_type == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Branch</label>
                                <select
                                  class="select2 form-select"
                                  name="branch_code"
                                  required
                                >
                                  <option value="">Select Branch</option>
                                  @foreach($branches as $branch)
                                    <option value="{{ $branch->branch_code }}" {{ $staff->branch_code == $branch->branch_code ? 'selected' : '' }}>
                                      {{ $branch->branch_name }}
                                    </option>
                                  @endforeach
                                </select>
                              </div>

                              <div class="col-md-6"></div>

                              <div class="col-12">
                                <label class="form-label" for="address">Address</label>
                                <textarea
                                  name="address"
                                  class="form-control"
                                  id="address"
                                  rows="4"
                                  placeholder="Complete Address"
                                  required
                                >{{ $staff->address }}</textarea>
                              </div>

                              <!-- Emergency Contact -->
                              <div class="col-12 mt-4">
                                <h6 class="fw-semibold">Emergency Contact</h6>
                                <hr class="mt-0" />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="emergency_contact_name">Emergency Contact Name</label>
                                <input
                                  type="text"
                                  id="emergency_contact_name"
                                  name="emergency_contact_name"
                                  class="form-control"
                                  placeholder="Emergency Contact Person"
                                  value="{{ $staff->emergency_contact_name }}"
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="emergency_contact_number">Emergency Contact Number</label>
                                <input
                                  type="tel"
                                  id="emergency_contact_number"
                                  name="emergency_contact_number"
                                  class="form-control"
                                  placeholder="Emergency Contact Number"
                                  value="{{ $staff->emergency_contact_number }}"
                                />
                              </div>
                            </div>

                            <br />
                            <div class="d-flex gap-3">
                              <div class="col-sm-2 col-4 d-grid">
                                <button type="submit" class="btn btn-primary">Update Staff</button>
                              </div>
                              <div class="col-sm-2 col-4 d-grid">
                                <a href="{{ route('page.staff-list') }}" class="btn btn-outline-secondary">Cancel</a>
                              </div>
                            </div>
                            <br />
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Sticky Actions -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column"
                >
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    Developed by
                    <a
                      href="https://intra-code.com/"
                      target="_blank"
                      class="footer-link"
                      >Intracode IT Solutions</a
                    >
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

    <!-- Add SweetAlert JS before closing body -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/%40algolia/autocomplete-js.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/cleave-zen/cleave-zen.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>

    <!-- Main JS -->

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
    <script src="{{ asset('assets/js/forms-pickers.js') }}"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Initialize select2
        $('.select2').select2();
        
        // Handle image preview
        document.getElementById('imageUpload').addEventListener('change', function(e) {
          if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
              document.getElementById('imagePreview').src = e.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
          }
        });
        
        // Create initials avatar when no image is available
        function createInitialsAvatar(name) {
          if (!name) return '';
          
          const canvas = document.createElement("canvas");
          const context = canvas.getContext("2d");
          canvas.width = 120;
          canvas.height = 120;

          context.fillStyle = "#0a3622";

          context.beginPath();
          context.arc(60, 60, 60, 0, Math.PI * 2);
          context.fill();

          const initials = name
            .split(" ")
            .map(word => word[0])
            .join("")
            .toUpperCase();

          context.font = "bold 48px Arial";
          context.fillStyle = "#FFFFFF";
          context.textAlign = "center";
          context.textBaseline = "middle";
          context.fillText(initials, 60, 60);

          return canvas.toDataURL();
        }
        
        // If no profile image, create an initials avatar
        const profileImage = document.getElementById('imagePreview');
        if (profileImage.src.includes('default-avatar.png')) {
          const firstName = document.getElementById('firstname').value;
          const lastName = document.getElementById('lastname').value;
          const fullName = `${firstName} ${lastName}`;
          if (firstName && lastName) {
            profileImage.src = createInitialsAvatar(fullName);
          }
        }
      });
    </script>
  </body>
</html>