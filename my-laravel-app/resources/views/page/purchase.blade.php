<!doctype
 html>

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
  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-invoice-preview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:32 GMT -->
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

    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />

    <!-- Page CSS -->
    
  <link rel="stylesheet" href="../../assets/vendor/css/pages/app-invoice.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <script src="../../assets/vendor/js/template-customizer.js"></script>
    
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    
      <script src="../../assets/js/config.js"></script>
    
  </head>

  <body>
    
      <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
    
    <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
  @include('components.sidebar')
    

<div class="menu-mobile-toggler d-xl-none rounded-1">
  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
    <i class="ti tabler-menu icon-base"></i>
    <i class="ti tabler-chevron-right icon-base"></i>
  </a>
</div>
<!-- / Menu -->

      

      <!-- Layout container -->
      <div class="layout-page">
        
          



<!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">




  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
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
      

      <!-- Quick links  -->
      <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
        <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <i class="icon-base ti tabler-layout-grid-add icon-22px text-heading"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end p-0">
          <div class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
              <h6 class="mb-0 me-auto">Shortcuts</h6>
              <a href="javascript:void(0)" class="dropdown-shortcuts-add py-2 btn btn-text-secondary rounded-pill btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="icon-base ti tabler-plus icon-20px text-heading"></i></a>
            </div>
          </div>
          <div class="dropdown-shortcuts-list scrollable-container">
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-calendar icon-26px text-heading"></i>
                </span>
                <a href="app-calendar.html" class="stretched-link">Calendar</a>
                <small>Appointments</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-file-dollar icon-26px text-heading"></i>
                </span>
                <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                <small>Manage Accounts</small>
              </div>
            </div>
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-user icon-26px text-heading"></i>
                </span>
                <a href="app-user-list.html" class="stretched-link">User App</a>
                <small>Manage Users</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-users icon-26px text-heading"></i>
                </span>
                <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                <small>Permission</small>
              </div>
            </div>
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-device-desktop-analytics icon-26px text-heading"></i>
                </span>
                <a href="index.html" class="stretched-link">Dashboard</a>
                <small>User Dashboard</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-settings icon-26px text-heading"></i>
                </span>
                <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                <small>Account Settings</small>
              </div>
            </div>
            <div class="row row-bordered overflow-visible g-0">
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-help-circle icon-26px text-heading"></i>
                </span>
                <a href="pages-faq.html" class="stretched-link">FAQs</a>
                <small>FAQs & Articles</small>
              </div>
              <div class="dropdown-shortcuts-item col">
                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                  <i class="icon-base ti tabler-square icon-26px text-heading"></i>
                </span>
                <a href="modal-examples.html" class="stretched-link">Modals</a>
                <small>Useful Popups</small>
              </div>
            </div>
          </div>
        </div>
      </li>
      <!-- Quick links -->

      <!-- Notification -->
      <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
        <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <span class="position-relative">
            <i class="icon-base ti tabler-bell icon-22px text-heading"></i>
            <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end p-0">
          <li class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
              <h6 class="mb-0 me-auto">Notification</h6>
              <div class="d-flex align-items-center h6 mb-0">
                <span class="badge bg-label-primary me-2">8 New</span>
                <a href="javascript:void(0)" class="dropdown-notifications-all p-2 btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="icon-base ti tabler-mail-opened text-heading"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown-notifications-list scrollable-container">
            <ul class="list-group list-group-flush">
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                    <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                    <small class="text-body-secondary">1h ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Charles Franklin</h6>
                    <small class="mb-1 d-block text-body">Accepted your connection</small>
                    <small class="text-body-secondary">12hr ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/2.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">New Message ✉️</h6>
                    <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                    <small class="text-body-secondary">1h ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="icon-base ti tabler-shopping-cart"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                    <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                    <small class="text-body-secondary">1 day ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/9.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Application has been approved 🚀</h6>
                    <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                    <small class="text-body-secondary">2 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="icon-base ti tabler-chart-pie"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Monthly report is generated</h6>
                    <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                    <small class="text-body-secondary">3 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/5.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">Send connection request</h6>
                    <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                    <small class="text-body-secondary">4 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="../../assets/img/avatars/6.png" alt class="rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">New message from Jane</h6>
                    <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                    <small class="text-body-secondary">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-warning"><i class="icon-base ti tabler-alert-triangle"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1 small">CPU is running high</h6>
                    <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                    <small class="text-body-secondary">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base ti tabler-x"></span></a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="border-top">
            <div class="d-grid p-4">
              <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                <small class="align-middle">View all notifications</small>
              </a>
            </div>
          </li>
        </ul>
      </li>
      <!--/ Notification -->

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

<style>
  .card-most-ordered {
background-color: #d4edda; /* Light green */
}

.card-total-purchase {
background-color: #cce5ff; /* Light blue */
}

.card-monthly-purchase {
background-color: #fff3cd; /* Light yellow */
}

.card-weekly-purchase {
background-color: #d1ecf1; /* Light cyan */
}
</style>
        

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
   

       

       
    

    <h4 class="fw-bold py-3 mb-4">Purchases</h4>
   
    <div class="card mb-3">
      <div class="card-body">
          <div class="row">
              <div class="col-md-3">
                  <div class="card card-custom card-total-purchase">
                      <div class="card-body">
                          <p class="card-text"><strong>Total Purchase</strong></p>
                          <h4 class="text-black">₱5,071,472.50</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-custom card-monthly-purchase">
                      <div class="card-body">
                          <p class="card-text"><strong>Monthly Product Purchase</strong></p>
                          <h4 class="text-black">₱1,070,500.00</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-custom card-weekly-purchase">
                      <div class="card-body">
                          <p class="card-text"><strong>Weekly Product Purchase</strong></p>
                          <h4 class="text-black">₱4,000,972.50</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-custom card-most-ordered">
                      <div class="card-body">
                          <p class="card-text"><strong>Most Ordered Product</strong></p>
                          <h5 class="text-black">Niacinamide serum/IMAJICA AQUA</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  

    <div class="card">
      <div class="card-body">
        <div class="d-flex mb-3 " style="width: 70%; "> <!-- Flex container for side-by-side layout -->
          <div class="input-group me-9 width:100%;"> <!-- Search input group with increased margin -->
              <span class="input-group-text" id="search-addon">
                  <i class="icon-base ti tabler-search"></i>
              </span>
              <input type="text" id="searchInput" placeholder="Search for Vendor Name,Product Ordered, Received By" class="form-control" onkeyup="searchPurchases()">
          </div>
      
          <div class="d-flex justify-content-end me-auto">
         
            <div class="d-flex justify-content-end align-items-center gap-2 me-9 ">
              <!-- Filter Label -->
            
              <label for="dateInput" class="fw-bold" style="white-space: nowrap;">Filter by date:</label>
  
              
              <!-- Date Filter Dropdown -->
              <select id="dateFilter" class="form-select w-auto" onchange="filterByDatee()"> <!-- Added onchange event -->
                <option value="Today">Today</option>
                <option value="Yesterday">Yesterday</option>
                <option value="Last 7 Days">Last 7 Days</option>
                <option value="Last 30 Days">Last 30 Days</option>
                <option value="This Month">This Month</option>
                <option value="Last Month">Last Month</option>
                <option value="Custom Range">Custom Range</option>
            </select>
            <button id="exportButton" class="btn btn-primary ms-2 " onclick="exportData()">Export  <i class="ti tabler-chevron-right "></i> </button>
              <!-- Date Input Group -->
            
          </div>
          
          <!-- Custom Range Date Inputs (Initially Hidden) -->
          <div id="customDateInputs" class="mt-2 d-none">
              <input type="date" id="startDate" class="form-control mb-2">
              <input type="date" id="endDate" class="form-control">
          </div>
          
  
  <!-- Date input for Custom Range (initially hidden) -->
  <div id="customDateInputs" style="display: none; margin-top: 10px;">
  <input type="date" id="startDate" class="form-control mb-2">
  <input type="date" id="endDate" class="form-control">
  </div>
  
        </div>
        
      </div>
        <table class="purchase table" >
          <thead>
            <tr>
              <th>Trans No.</th>
              <th>Vendor Name</th>
              <th>Product Ordered</th>
              <th>Date Received</th>
              <th>Received By</th>
              <th>Quantity</th>
              <th>Amount</th>
              <th>Payment Terms</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="purchaseTable">
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
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
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="../../assets/vendor/libs/cleave-zen/cleave-zen.js"></script>

    <!-- Main JS -->
    
      <script src="../../assets/js/main.js"></script>
    

    <!-- Page JS -->
  <script src="../../assets/js/purchase.js"></script>
 



  <script>
    // Fetch JSON data and populate the table
    fetch('/assets/purchase.json') // Use relative path
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('purchaseTable');
            data.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td>${item.trans_no}</td>
                <td>${item.vendor_name}</td>
                <td>${item.product_ordered}</td>
                <td>${item.date_recieved}</td>
                <td>${item.received_by}</td>
                <td>${item.qty}</td>
                <td>${item.amount}</td>
                <td>${item.payment_terms}</td>
                    <td  class='d-flex gap-1'><button class="btn btn-primary">View</button> <button class="btn btn-danger"> Edit</button><button class="btn btn-danger"> Delete</button></td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching the JSON data:', error));
</script>



<script>
  function searchPurchases() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const table = document.getElementById('purchaseTable');
    const tr = table.getElementsByTagName('tr');

    for (let i = 1; i < tr.length; i++) {
      const td = tr[i].getElementsByTagName('td');
      let found = false;
      for (let j = 0; j < td.length; j++) {
        if (td[j]) {
          const txtValue = td[j].textContent || td[j].innerText;
          if (txtValue.toLowerCase().indexOf(filter) > -1) {
            found = true;
            break;
          }
        }
      }
      tr[i].style.display = found ? "" : "none";
    }
  }
</script>




  </body>
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-invoice-preview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2025 08:26:33 GMT -->
</html>

  <!-- beautify ignore:end -->


