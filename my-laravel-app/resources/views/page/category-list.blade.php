<!doctype html>

    <!-- =========================================================
* Vuexy - Bootstrap Dashboard PRO | v3.0.0
==============================================================

* Product Page: https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599
* Created by: Pixinvent

      * License: You must have a valid license purchased in order to legally use the theme for your project.
    
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
    <!-- beautify ignore:start -->
  


<html
  lang="en"
  class=" layout-navbar-fixed layout-menu-fixed layout-compact "
  dir="ltr"
  data-skin="default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template"
  data-bs-theme="light">
  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:17 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Imajica Booking System</title>

  <meta name="description" content="Imajica Booking System" />

  <meta name="keywords" content="Imajica Booking System" />
  <meta property="og:title" content="Imajica Booking System" />
  <meta property="og:type" content="product" />
  <meta property="og:url" content="Imajica Booking System" />
  <meta property="og:image" content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png" />
  <meta property="og:description" content="Imajica Booking System." />
  <meta property="og:site_name" content="Pixinvent" />
  <link rel="canonical" href="Imajica Booking System" />

      <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <script>
        (function (w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
          var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src = '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
      </script>
      <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->
    
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    
      
      <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />
    
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    
    <!-- Vendors CSS -->
    
      <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <!-- endbuild -->

    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/%40form-validation/form-validation.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/typography.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/katex.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />

    <!-- Page CSS -->
    
  <link rel="stylesheet" href="../../assets/vendor/css/pages/app-ecommerce.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
  
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    
      <script src="../../assets/js/config.js"></script>
    
  </head>

  <body>
    
      <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
    
    <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include ('components.sidebar')
        
<div class="menu-mobile-toggler d-xl-none rounded-1">
  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
    <i class="ti tabler-menu icon-base"></i>
    <i class="ti tabler-chevron-right icon-base"></i>
  </a>
</div>
<!-- / Menu -->

      

      <!-- Layout container -->
      <div class="layout-page">
      
        

<div class="container">
  <div class="d-flex justify-content-between align-items-center">
    <h3>Category List</h3>
    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList" id="eCommerceCategoryListForm">
      <i class="ti tabler-plus me-1"></i> Add New Category
</div>
  <!-- Table for Category List -->
  <table class="table table-striped" id="categoryTable" style="width: 100%">   
     <thead class="table-light">
      <tr>
        <th>ID</th>
        <th>Select</th>
        <th>Category</th>
        <th>Total Products</th>
        <th>Total Earnings</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $category->category_id }}</td>
        <td><input type="checkbox" class="form-check-input select-category"></td>
        <td>
          <div class="d-flex justify-content-start align-items-center">
            <div class="avatar-wrapper me-3">
              <div class="avatar rounded-2 bg-label-secondary">
                <img src="{{ $category->categoryImage ? asset($category->categoryImage) : asset('assets/img/products/default.jpg') }}" 
                     class="rounded-2" alt="{{ $category->categoryTitle }}">
              </div>
            </div>
            <div class="d-flex flex-column">
              <h6 class="mb-0">{{ $category->categoryTitle }}</h6>
              <small class="text-muted">{{ $category->description ?? 'No description available' }}</small>
            </div>
          </div>
        </td>
        <td>
          <span class="fw-semibold align-middle">{{ $category->products_count }}</span>

        </td>
        <td>
          <span class="fw-semibold">₱{{ number_format($category->total_earnings, 2) }}</span>
         
        </td>
        <td>
          <div class="d-flex gap-2">
            <button class="btn btn-sm btn-success view-category" data-id="{{ $category->category_id }}">
              <i class="ti tabler-eye me-1"></i> View
            </button>
            <button class="btn btn-sm btn-info edit-category" data-id="{{ $category->category_id }}">
              <i class="ti tabler-edit me-1"></i> Edit
            </button>
            <button class="btn btn-sm btn-danger delete-category" 
                    data-category-id="{{ $category->category_id }}"
                    data-category-name="{{ $category->categoryTitle }}">
              <i class="ti tabler-trash me-1"></i> Delete
            </button>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<form id="deleteCategoryForm" method="POST" action="{{ route('category.delete') }}" style="display: none;">
  @csrf
  @method('DELETE')
  <input type="hidden" id="deleteCategoryId" name="category_id">
</form>

<!-- Offcanvas for Adding New Category -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Add New Category</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" id="offcanvasEcommerceCategoryListClose"></button>
  </div>
  <div class="offcanvas-body">
    <form id="eCommerceCategoryListForm" method="POST" action="{{ route('category.create') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="categoryTitle" class="form-label">Category Title</label>
        <input type="text" class="form-control" id="categoryTitle" name="categoryTitle" required>
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
        <small class="text-muted">The slug will be automatically generated from the title.</small>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="categoryImage" class="form-label">Category Image</label>
        <input type="file" class="form-control" id="categoryImage" name="categoryImage" accept="image/*">
        <div id="imagePreview" class="mt-2" style="max-width: 200px;">
          <img src="" alt="Preview" style="width: 100%; display: none;">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save Category</button>
    </form>
  </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0a3622">
        <h5 class="modal-title text-white">Edit Category</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editCategoryForm" method="POST" action="/category/update" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <input type="hidden" id="edit_category_id" name="category_id">
          <div class="mb-3">
            <label for="edit_categoryTitle" class="form-label">Category Title</label>
            <input type="text" class="form-control" id="edit_categoryTitle" name="categoryTitle" required>
            <div class="invalid-feedback" id="edit_categoryTitle_error"></div>
          </div>
          <div class="mb-3">
            <label for="edit_description" class="form-label">Description</label>
            <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
            <div class="invalid-feedback" id="edit_description_error"></div>
          </div>
          <div class="mb-3">
            <label for="edit_categoryImage" class="form-label">Category Image</label>
            <input type="file" class="form-control" id="edit_categoryImage" name="categoryImage" accept="image/*">
            <div id="edit_imagePreview" class="mt-2" style="max-width: 200px;">
              <img src="" alt="Preview" style="width: 100%; display: none;">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update Category</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
      <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
        <div class="text-body">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
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
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/quill/katex.js"></script>
  <script src="../../assets/vendor/libs/quill/quill.js"></script>

    <!-- Main JS -->
    
      <script src="../../assets/js/main.js"></script>

    

    <!-- Page JS -->
   


    <script>
      document.getElementById('categoryTitle').addEventListener('input', function(e) {
          const title = e.target.value;
          const slug = title.toLowerCase()
              .replace(/[^\w\s-]/g, '') // Remove special characters
              .replace(/\s+/g, '-')     // Replace spaces with hyphens
              .replace(/-+/g, '-');     // Replace multiple hyphens with single hyphen
          
          document.getElementById('slug').value = slug;
      });
      
      // Handle form submission
      $('#eCommerceCategoryListForm').on('submit', function(e) {
          e.preventDefault();
          const form = $(this);
          const categoryTitle = $('#categoryTitle').val();
          const slug = $('#slug').val();
      
          $.ajax({
              url: form.attr('action'),
              method: 'POST',
              data: {
                  _token: $('input[name="_token"]').val(),
                  categoryTitle: categoryTitle,
                  slug: slug
              },
              success: function(response) {
                  if (response.success) {
                      // Add new row to DataTable
                      dt_category_table.DataTable().ajax.reload();
      
                      // Close offcanvas
                      var offcanvasElement = document.querySelector('#offcanvasEcommerceCategoryList');
                      var offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
                      offcanvas.hide();
      
                      // Reset form
                      form[0].reset();
                      
                      // Show success message
                      alert('Category added successfully!');
                  } else {
                      alert('Error: ' + response.message);
                  }
              },
              error: function(xhr) {
                  alert('Error: ' + xhr.responseJSON.message);
              }
          });
      });
      </script>



<script>
  $(document).ready(function() {
    // SweetAlert default configuration
    const swalConfig = {
      customClass: {
        container: 'swal-container-class',
        popup: 'swal-popup-class',
        confirmButton: 'btn btn-primary me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false,
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
        .modal-backdrop {
          z-index: 1050 !important;
        }
        .modal {
          z-index: 1055 !important;
        }
      `)
      .appendTo('head');
  
    // Handle edit category button clicks
    $('.edit-category').on('click', function() {
      try {
        const categoryId = $(this).data('id');
        
        // Show the modal immediately
        $('#editCategoryModal').modal('show');
        
        // Fetch category data via AJAX
        $.ajax({
          url: `/category/get/${categoryId}`,
          type: 'GET',
          success: function(response) {
            $('#edit_category_id').val(response.category_id);
            $('#edit_categoryTitle').val(response.categoryTitle);
            $('#edit_description').val(response.description);
            
            if (response.categoryImage) {
              $('#edit_imagePreview img')
                .attr('src', '/' + response.categoryImage)
                .show();
            }
          },
          error: function(xhr) {
            console.error("Error fetching category data:", xhr);
            Swal.fire({
              ...swalConfig,
              icon: 'error',
              title: 'Error',
              text: 'Could not load category data',
              showConfirmButton: true
            });
          }
        });
      } catch (e) {
        console.error("Error in edit button handler:", e);
      }
    });
  
    // Handle edit form submission
    $('#editCategoryForm').on('submit', function(e) {
      e.preventDefault();
      
      $('#editCategoryModal').modal('hide');
      
      setTimeout(() => {
        Swal.fire({
          ...swalConfig,
          title: 'Confirm Update',
          text: 'Are you sure you want to update this category?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!',
          cancelButtonText: 'Cancel',
          confirmButtonColor: '#0a3622',
          cancelButtonColor: '#d33'
        }).then((result) => {
          if (result.isConfirmed) {
            this.submit();
          } else {
            $('#editCategoryModal').modal('show');
          }
        });
      }, 200);
    });
  
    // Handle delete category button clicks
    $('.delete-category').on('click', function() {
      const categoryId = $(this).data('category-id');
      const categoryName = $(this).data('category-name');
      console.log("ID, Name:", categoryId, categoryName);

      $('#deleteCategoryId').val(categoryId);
console.log("Delete ID:", $('#deleteCategoryId').val());
      Swal.fire({
        ...swalConfig,
        title: 'Confirm Delete',
        html: `Are you sure you want to delete category <strong>${categoryName}</strong>?<br>This action cannot be undone.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d'
      }).then((result) => {
        if (result.isConfirmed) {
      
          $('#deleteCategoryForm').submit();
        }
      });
    });
  
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
  });
  </script>
  
  <script>
    $(document).ready(function() {
      $('#categoryTable').DataTable();
    });
  </script>
  
            
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>
</html>


