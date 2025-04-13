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
  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:18 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Imajica Booking System</title>

    
      <meta name="description" content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
      <!-- Canonical SEO -->
      <meta name="keywords" content="Vuexy bootstrap dashboard, vuexy bootstrap 5 dashboard, themeselection, html dashboard, web dashboard, frontend dashboard, responsive bootstrap theme" />
      <meta property="og:title" content="Vuexy bootstrap Dashboard by Pixinvent" />
      <meta property="og:type" content="product" />
      <meta property="og:url" content="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599" />
      <meta property="og:image" content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png" />
      <meta property="og:description" content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
      <meta property="og:site_name" content="Pixinvent" />
      <link rel="canonical" href="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599" />
    
    
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
    <link rel="icon" type="image/x-icon" href="{{ asset(path:'logo/logo.png') }}" />

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
  <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->
    

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    
      <script src="../../assets/js/config.js"></script>
    
  </head>

  <body>
    
      <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
    
    <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      @include('components.sidebar')
        




<!-- Menu -->


      


      <!-- Layout container -->
      <div class="layout-page">
        
          



<!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">



      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-2">
                  <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-0">John Doe</h6>
                  <small class="text-body-secondary">Admin</small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider my-1 mx-n2"></div>
          </li>
          <li>
            <a class="dropdown-item" href="pages-profile-user.html"> <i class="icon-base ti tabler-user me-3 icon-md"></i><span class="align-middle">My Profile</span> </a>
          </li>
          <li>
            <a class="dropdown-item" href="pages-account-settings-account.html"> <i class="icon-base ti tabler-settings me-3 icon-md"></i><span class="align-middle">Settings</span> </a>
          </li>
          <li>
            <a class="dropdown-item" href="pages-account-settings-billing.html">
              <span class="d-flex align-items-center align-middle">
                <i class="flex-shrink-0 icon-base ti tabler-file-dollar me-3 icon-md"></i><span class="flex-grow-1 align-middle">Billing</span>
                <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
              </span>
            </a>
          </li>
          <li>
            <div class="dropdown-divider my-1 mx-n2"></div>
          </li>
          <li>
            <a class="dropdown-item" href="pages-pricing.html"> <i class="icon-base ti tabler-currency-dollar me-3 icon-md"></i><span class="align-middle">Pricing</span> </a>
          </li>
          <li>
            <a class="dropdown-item" href="pages-faq.html"> <i class="icon-base ti tabler-question-mark me-3 icon-md"></i><span class="align-middle">FAQ</span> </a>
          </li>
          <li>
            <div class="d-grid px-2 pt-2 pb-1">
              <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                <small class="align-middle">Logout</small>
                <i class="icon-base ti tabler-logout ms-2 icon-14px"></i>
              </a>
            </div>
          </li>
        </ul>
      </li>
      <!--/ User -->
    
  </ul>
</div>
</nav>

<!-- / Navbar -->

        

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
              <div class="d-flex flex-column justify-content-center">
                <div class="d-flex align-items-center gap-3 mb-1">
                  <span class="h5 mb-0">Order <span id="orderNumber"></span></span>
                  <span id="orderStatus" class="badge bg-label ms-2"></span>
                </div>
                <p class="mb-0" id="orderDate"></p>
              </div>
              <div>
                <a href="{{ route('page.order-list') }}" class="btn btn-secondary">
                  <i class="ti tabler-arrow-left me-1"></i>
                  Back to Orders
                </a>
              </div>
            </div>

  <!-- Order Details Table -->
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card mb-6">
        <div class="card-datatable">
          <table class="table table-striped table-bordered" id="datatables-order-details" style="width: 100%">
            <thead >
              <tr>
                <th></th>
                <th>Product/Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
        </div>
      </div>

      <!-- Shipping Activity Timeline -->
      <div class="card mb-4">
        <h5 class="card-header">Order Activity</h5>
        <div class="card-body">
          <ul class="timeline">
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-success"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-0">Order Delivered</h6>
                  <small class="text-muted">Today</small>
                </div>
                <p class="mb-2">Order has been delivered to the customer</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-warning"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-0">Out for Delivery</h6>
                  <small class="text-muted">Yesterday</small>
                </div>
                <p class="mb-2">Package has left the warehouse</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-info"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-0">Order Processing</h6>
                  <small class="text-muted">2 days ago</small>
                </div>
                <p class="mb-0">Order is being prepared for shipment</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-0">Order Placed</h6>
                  <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-0">Customer placed order #{{ $order['order_number'] ?? 'N/A' }}</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card mb-6">
        <div class="card-header">
          <h5 class="card-title m-0">Customer details</h5>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-start align-items-center mb-6">
            <div class="d-flex flex-column">
              <h6 class="mb-0">{{ $order['customer_name'] ?? 'N/A' }}</h6>
              <span>Customer ID: #{{ $order['customer_id'] ?? 'N/A' }}</span>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <h6 class="mb-1">Contact info</h6>
          </div>
          <p class="mb-1">Email: {{ $order['customer_email'] ?? 'N/A' }}</p>
          <p class="mb-0">Payment Method: <span id="orderPayment"></span></p>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-header d-flex justify-content-between">
          <h5 class="card-title m-0">Shipping address</h5>
          <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
        </div>
        <div class="card-body">
          <p class="mb-0">{{ $order['shipping_address'] ?? 'N/A' }}</p>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-header d-flex justify-content-between">
          <h5 class="card-title m-0">Billing address</h5>
          <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
        </div>
        <div class="card-body">
          <p class="mb-6">{{ $order['billing_address'] ?? 'N/A' }}</p>
          <h5 class="mb-1">{{ $order['payment_method'] ?? 'N/A' }}</h5>
          <p class="mb-0">Card Number: ******{{ $order['card_last_digits'] ?? 'XXXX' }}</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Edit User Information</h4>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-6" onsubmit="return false">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="John" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="johndoe007" value="johndoe007" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" value="example@domain.com" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="select2 form-select" aria-label="Default select example">
              <option selected>Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" value="123 456 7890" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" value="202 555 0111" />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
              <option value="">Select</option>
              <option value="english" selected>English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India" selected>India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="editBillingAddress" />
              <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

  <!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="address-title mb-2">Add New Address</h4>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-6" onsubmit="return false">
          <div class="col-12 form-control-validation">
            <div class="row">
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <span class="custom-option-body">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M16.625 23.625V16.625H11.375V23.625H4.37501V12.6328C4.37437 12.5113 4.39937 12.391 4.44837 12.2798C4.49737 12.1686 4.56928 12.069 4.65939 11.9875L13.4094 4.03592C13.5689 3.88911 13.7778 3.80762 13.9945 3.80762C14.2113 3.80762 14.4202 3.88911 14.5797 4.03592L23.3406 11.9875C23.4287 12.0706 23.4992 12.1706 23.548 12.2814C23.5969 12.3922 23.6231 12.5117 23.625 12.6328V23.625H16.625Z" />
                        <path
                          d="M23.625 23.625V12.6328C23.623 12.5117 23.5969 12.3922 23.548 12.2814C23.4992 12.1706 23.4287 12.0706 23.3406 11.9875L14.5797 4.03592C14.4202 3.88911 14.2113 3.80762 13.9945 3.80762C13.7777 3.80762 13.5689 3.88911 13.4094 4.03592L4.65937 11.9875C4.56926 12.069 4.49736 12.1686 4.44836 12.2798C4.39936 12.391 4.37436 12.5113 4.375 12.6328V23.625M1.75 23.625H26.25M16.625 23.625V17.5C16.625 17.2679 16.5328 17.0454 16.3687 16.8813C16.2046 16.7172 15.9821 16.625 15.75 16.625H12.25C12.0179 16.625 11.7954 16.7172 11.6313 16.8813C11.4672 17.0454 11.375 17.2679 11.375 17.5V23.625"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                      <span class="custom-option-title">Home</span>
                      <small> Delivery time (9am – 9pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-4">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <span class="custom-option-body">
                      <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M15.75 23.625V4.375C15.75 4.14294 15.6578 3.92038 15.4937 3.75628C15.3296 3.59219 15.1071 3.5 14.875 3.5H4.375C4.14294 3.5 3.92038 3.59219 3.75628 3.75628C3.59219 3.92038 3.5 4.14294 3.5 4.375V23.625" />
                        <path
                          d="M1.75 23.625H26.25M15.75 23.625V4.375C15.75 4.14294 15.6578 3.92038 15.4937 3.75628C15.3296 3.59219 15.1071 3.5 14.875 3.5H4.375C4.14294 3.5 3.92038 3.59219 3.75628 3.75628C3.59219 3.92038 3.5 4.14294 3.5 4.375V23.625M24.5 23.625V11.375C24.5 11.1429 24.4078 10.9204 24.2437 10.7563C24.0796 10.5922 23.8571 10.5 23.625 10.5H15.75M7 7.875H10.5M8.75 14.875H12.25M7 19.25H10.5M19.25 19.25H21M19.25 14.875H21"
                          stroke-opacity="0.9"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                      <span class="custom-option-title"> Office </span>
                      <small> Delivery time (9am – 5pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 form-control-validation col-md-6">
            <label class="form-label" for="modalAddressFirstName">First Name</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
          </div>
          <div class="col-12 form-control-validation col-md-6">
            <label class="form-label" for="modalAddressLastName">Last Name</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
          </div>
          <div class="col-12">
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" id="billingAddress" />
              <label for="billingAddress" class="form-switch-label">Use as a billing address?</label>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

</div>
          <!-- / Content -->

          
            

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
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <script src="../../assets/vendor/libs/cleave-zen/cleave-zen.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
  <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    
      <script src="../../assets/js/main.js"></script>
    

    <!-- Page JS -->
    <script>
      $(document).ready(function() {
        function getStatusClass(status) {
            const statusClasses = {
                'Ordered': 'bg-label-warning',
                'Delivered': 'bg-label-success', 
                'Out for Delivery': 'bg-label-primary',
                'Ready to Pickup': 'bg-label-info'
            };
            return statusClasses[status] || 'bg-label-secondary';
        }

        const orderId = window.location.pathname.split('/').pop();

        $.ajax({
            url: `/order/order-details/${orderId}`,
            method: 'GET',
            success: function(orderDetails) {
                console.log('Order Details:', orderDetails);
                
                // Update order header information
                $('#orderNumber').text(orderDetails.number || 'N/A');
                $('#orderDate').text(orderDetails.date || 'N/A');
                $('#orderStatus').text(orderDetails.status || 'N/A')
                    .addClass(getStatusClass(orderDetails.status));

                // Update customer details
                if (orderDetails.customer) {
                    $('.card-body h6.mb-0').first().text(orderDetails.customer.name || 'N/A');
                    $('p.mb-1').first().text(`Email: ${orderDetails.customer.email || 'N/A'}`);
                    $('#orderPayment').text(orderDetails.payment || 'N/A');
                }

                // Initialize DataTable
                const table = $('.table').DataTable({
                    data: orderDetails.items || [],
                    columns: [
                        { data: null, defaultContent: '' },
                        { 
                            data: null,
                            render: function(data, type, row) {
                                const image = row.product_image ? 
                                    `<img src="/uploads/products/${row.product_image}" class="rounded">` :
                                    `<span class="avatar-initial rounded-2 bg-label-${getRandomColor()}"></span>`;
                                
                                return `
                                    <div class="d-flex justify-content-start align-items-center product-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2 me-sm-4 rounded-2 bg-label-secondary">
                                                ${image}
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="text-nowrap mb-0">${row.item_name}</h6>
                                            <small class="text-truncate d-none d-sm-block">${row.description || ''}</small>
                                        </div>
                                    </div>`;
                            }
                        },
                        { 
                            data: 'unit_price',
                            render: function(data) {
                                return `$${parseFloat(data).toFixed(2)}`;
                            }
                        },
                        { data: 'quantity' },
                        { 
                            data: 'total',
                            render: function(data) {
                                return `$${parseFloat(data).toFixed(2)}`;
                            }
                        }
                    ],
                    // ... rest of your DataTable configuration ...
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching order details:', error);
                console.log('Response:', xhr.responseText); // Add this for debugging
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to load order details: ' + (xhr.responseJSON?.message || error)
                });
            }
        });

        function getRandomColor() {
            const colors = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
            return colors[Math.floor(Math.random() * colors.length)];
        }

        // ... rest of your existing code ...
    });
    </script>
  <script src="../../assets/js/modal-edit-user.js"></script>
  <script src="../../assets/js/modal-add-new-address.js"></script>
     
  </body>

<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-ecommerce-order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:20 GMT -->
</html>

  <!-- beautify ignore:end -->

