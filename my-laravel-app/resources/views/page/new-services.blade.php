@extends('layouts.app')

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
    <link rel="icon" type="image/x-icon" href="{{ asset(path:'logo/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/node-waves/node-waves.css"
    />

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/pickr/pickr-themes.css"
    />

    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    />

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/select2/select2.css"
    />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="../../assets/js/config.js"></script>

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

      .avatar-edit label {
        transition: all 0.3s ease;
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
                      class="card-header  d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row"
                      style="background-color: #0A3622;"
                    >
                      <h5 class="card-title mb-sm-0 me-2 text-white">
                        Services Management
                      </h5>
                    </div>
                    <div class="card-body pt-6">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <!-- 1. Delivery Address -->
                            <form method="post" action="{{ route('service.create') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row g-6">
                              <div class="col-12 text-center mb-4">
                                <div class="profile-upload-container mx-auto">
                                  <div class="avatar-upload">
                                    <div class="avatar-preview">
                                      <img
                                        id="imagePreview"
                                        src="../../assets/img/services/default-service.png"
                                        alt="Service Preview"
                                        class="rounded-circle"
                                        style="width: 100%; height: 100%; object-fit: cover;"
                                      />
                                    </div>
                                    <div class="avatar-edit">
                                      <input
                                        type="file"
                                        id="service_image"
                                        name="service_image"
                                        accept=".png, .jpg, .jpeg"
                                        class="d-none"
                                      />
                                      <label
                                        for="service_image"
                                        class="btn btn-primary btn-sm mt-2"
                                      >
                                        <i class="ti tabler-upload me-1"></i>Upload Photo
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="service_name">Services Name</label>
                                <input
                                  type="text"
                                  id="service_name"
                                  name="service_name"
                                  class="form-control"
                                  placeholder="Services Name"
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
                                    <option value="{{ $branch->branch_code }}">{{ $branch->branch_name }}</option>
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
                                  placeholder="Service Description"
                                ></textarea>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="duration">Duration</label>
                                <input
                                  type="number"
                                  id="duration"
                                  name="duration"
                                  class="form-control"
                                  placeholder="In Minutes"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label">Service Category</label>
                                <select
                                  class="select2 form-select"
                                  name="service_category"
                                  id="service_category"
                                  data-allow-clear="true"
                                  required
                                >
                                  <option value="">Select Service Category</option>
                                  <option value="Facials">Facials</option>
                                  <option value="Body Contouring">Body Contouring</option>
                                  <option value="Laser Treatments">Laser Treatments</option>
                                  <option value="Injectables">Injectables</option>
                                  <option value="Others">Others</option>
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="service_cost">Service Cost</label>
                                <input
                                  type="number"
                                  step="0.01"
                                  id="service_cost"
                                  name="service_cost"
                                  class="form-control"
                                  placeholder="Amount"
                                  required
                                />
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="loyalty_pts">Loyalty Reward Points</label>
                                <input
                                  type="number"
                                  id="loyalty_pts"
                                  name="loyalty_pts"
                                  class="form-control"
                                  placeholder="Loyalty Reward Points"
                                />
                              </div>
                            </div>

                            <br />
                            <div class="col-sm-2 col-4 d-grid">
                              <button type="submit" class="btn btn-primary" id="addServiceBtn">
                                Add Services
                              </button>
                            </div>
                          </form>
                          <br />
                          <!-- Success/Error Messages -->
                          <div id="responseMessage" style="display: none;" class="alert mt-3"></div>
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
    <script>
      $(document).ready(function() {
        // Define routes object for API endpoints
        const branchRoutes = {
          getAll: "{{ route('branch.getAllBranches') }}"
        };
        
        // Load branches for select dropdown
        loadBranchOptions();

        // Function to load branch options for select dropdown
        function loadBranchOptions() {
          $.ajax({
            url: branchRoutes.getAll,
            type: "GET",
            dataType: 'json',
            success: function(response) {
              if(response.status) {
                populateBranchOptions(response.data);
              } else {
                console.error('Failed to load branches:', response.message);
                $('#responseMessage')
                  .removeClass()
                  .addClass('alert alert-danger')
                  .text('Failed to load branches: ' + response.message)
                  .show();
              }
            },
            error: function(xhr) {
              console.error('AJAX error when loading branches:', xhr);
              $('#responseMessage')
                .removeClass()
                .addClass('alert alert-danger')
                .text('Error loading branches. Please try again later.')
                .show();
            }
          });
        }
        
        // Function to populate branch select options
        function populateBranchOptions(branches) {
          const select = $('#branch_code');
          
          // Clear existing options except the default one
          const defaultOption = select.find('option:first');
          select.empty().append(defaultOption);
          
          // Add branch options
          branches.forEach(branch => {
            select.append(`<option value="${branch.branch_code}">${branch.branch_name}</option>`);
          });
          
          // Refresh Select2 if it's used
          if ($.fn.select2) {
            select.trigger('change');
          }
        }
      });

      document.addEventListener("DOMContentLoaded", function () {
        const imageUpload = document.getElementById("imageUpload");
        const imagePreview = document.getElementById("imagePreview");

        // Handle photo upload
        imageUpload.addEventListener("change", function (e) {
          const file = e.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
          }
        });
      });
    </script>
  </body>
</html>
