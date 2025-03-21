@extends('layouts.app')
@extends('layouts.layout-collapsed-menu-dark')
@extends('layouts.layout-container-dark')
@extends('layouts.layout-content-navbar-and-sidebar-dark')
@extends('layouts.layout-without-navbar-dark')
@extends('layouts.layout-content-navbar-dark')
@extends('layouts.layout-fluid-dark')
@extends('layouts.layout-without-menu-dark')



<!DOCTYPE html>

<html lang="en" class="layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-skin="default"
  data-assets-path="../../assets/" data-template="vertical-menu-template" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

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

  <!-- End Google Tag Manager -->

  <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset(path:'logo/logo.png') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/fonts/iconify-icons.css') }}" />

  <!-- Core CSS -->
  <!-- build:css assets/vendor/css/theme.css  -->

  <link rel="stylesheet" href="{{ asset(path:'assets/vendor/libs/node-waves/node-waves.css') }}" />

  <link rel="stylesheet" href="{{ asset(path:'assets/vendor/libs/pickr/pickr-themes.css') }}" />

  <link rel="stylesheet" href="{{ asset(path:'assets/vendor/css/core.css') }}" />
  <link rel="stylesheet" href="{{ asset(path: 'assets/css/demo.css') }}" />
  <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/libs/chartjs/chartjs.css') }}" />

  <!-- Vendors CSS -->

  <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  <!-- endbuild -->

  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
  <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
  <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/fonts/flag-icons.css')  }}" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/css/pages/cards-advance.css') }}" />

  <!-- Helpers -->
  <script src="{{ asset(path: 'assets/vendor/js/helpers.js') }}"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

  <script src="{{ asset(path: 'assets/js/config.js') }}"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->


      <div class="menu-mobile-toggler d-xl-none rounded-1">
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
          <i class="ti tabler-menu icon-base"></i>
          <i class="ti tabler-chevron-right icon-base"></i>
        </a>
      </div>
      <!-- / Menu -->

       @include('components.sidebar')
      
      

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
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
              <!--/ Language -->

              <!-- Style Switcher -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                  id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                  <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                  <li>
                    <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light"
                      aria-pressed="false">
                      <span><i class="icon-base ti tabler-sun icon-22px me-3" data-icon="sun"></i>Light</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark"
                      aria-pressed="true">
                      <span><i class="icon-base ti tabler-moon-stars icon-22px me-3"
                          data-icon="moon-stars"></i>Dark</span>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system"
                      aria-pressed="false">
                      <span><i class="icon-base ti tabler-device-desktop-analytics icon-22px me-3"
                          data-icon="device-desktop-analytics"></i>System</span>
                    </button>
                  </li>
                </ul>
              </li>
              <!-- / Style Switcher-->

              <!-- Quick links  -->

              <!-- Quick links -->

              <!-- Notification -->

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
                          <h6 class="mb-0">Rommel Lacap</h6>
                          <small class="text-body-secondary">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1 mx-n2"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="icon-base ti tabler-user me-3 icon-md"></i><span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="icon-base ti tabler-settings me-3 icon-md"></i><span
                        class="align-middle">Settings</span>
                    </a>
                  </li>

                  <li>
                    <div class="dropdown-divider my-1 mx-n2"></div>
                  </li>

                  <li>
                    <div class="d-grid px-2 pt-2 pb-1">
                      <a class="btn btn-sm btn-danger d-flex" href="#" target="_blank">
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
            <!-- KPI Cards Row -->
            <div class="row g-4 mb-4">
              <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-primary h-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-primary">
                          <i class="icon-base ti tabler-calendar icon-28px"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">10,000</h4>
                        <span class="badge bg-label-success">+12.5%</span>
                      </div>
                    </div>
                    <p class="mb-1">Total Completed Bookings</p>
                    <div class="d-flex align-items-center">
                      <small class="text-body-secondary">vs last month</small>
                      <div class="ms-auto">
                        <span class="text-success">↑ 152</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-warning h-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-warning">
                          <i class="icon-base ti tabler-shopping-cart icon-28px"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">₱1,000,000</h4>
                        <span class="badge bg-label-success">+8.4%</span>
                      </div>
                    </div>
                    <p class="mb-1">Total Revenue</p>
                    <div class="d-flex align-items-center">
                      <small class="text-body-secondary">vs last month</small>
                      <div class="ms-auto">
                        <span class="text-success">↑ ₱84,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-danger h-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-danger">
                          <i class="icon-base ti tabler-users icon-28px"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">500</h4>
                        <span class="badge bg-label-success">+5.2%</span>
                      </div>
                    </div>
                    <p class="mb-1">Total Patients</p>
                    <div class="d-flex align-items-center">
                      <small class="text-body-secondary">vs last month</small>
                      <div class="ms-auto">
                        <span class="text-success">↑ 26</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6">
                <div class="card card-border-shadow-danger h-100">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar me-4">

                        <span class="avatar-initial rounded bg-label-danger">

                          <i class="icon-base ti tabler-receipt icon-28px"></i>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-0">₱850,000</h4>
                        <span class="badge bg-label-warning">+3.2%</span>
                      </div>
                    </div>
                    <p class="mb-1">Total Expenses</p>
                    <div class="d-flex align-items-center">
                      <small class="text-body-secondary">vs last month</small>
                      <div class="ms-auto">
                        <span class="text-warning">↑ ₱26,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- Enhanced Birthday Card -->
              <div class="col-12 col-lg-14">
                <div class="card">
                  <div
                    class="card-header d-flex justify-content-between align-items-center bg-primary bg-opacity-10 p-4">
                    <div>
                      <h5 class="card-title mb-1">
                        <i class="ti tabler-gift me-2 text-primary"></i>
                        Patient Birthdays
                      </h5>
                      <p class="text-muted mb-0 small">
                        Stay connected with your patients on their special day
                      </p>
                    </div>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#allBirthdaysModal">
                      <i class="ti tabler-list me-1"></i>View All
                    </button>
                  </div>

                  <!-- Today's Birthday Section -->
                  <div class="card-body border-bottom p-4">
                    <h6 class="text-primary mb-3">
                      <i class="ti tabler-confetti me-2"></i>
                      Today's Birthdays
                    </h6>
                    <div class="birthday-today">
                      <li class="d-flex mb-2 pb-1 birthday-item position-relative">
                        <div class="avatar flex-shrink-0 me-3">
                          <span
                            class="avatar-initial rounded-circle bg-label-danger d-flex align-items-center justify-content-center"
                            style="width: 45px; height: 45px">
                            <i class="icon-base ti tabler-confetti icon-md"></i>
                          </span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0 fw-semibold">Emily Thompson</h6>
                            <div class="d-flex align-items-center mt-1">
                              <i class="ti tabler-calendar-event text-muted me-1"></i>
                              <small class="text-body-secondary">March 22, 1988</small>
                              <span class="badge bg-label-danger ms-2 px-2 py-1">
                                <i class="ti tabler-party-popper me-1"></i>Today
                              </span>
                            </div>
                          </div>
                          <div class="action-buttons d-flex gap-2">
                            <button class="btn btn-sm btn-primary" data-action="send-wishes">
                              <i class="ti tabler-mail me-1"></i>Send Wishes
                            </button>
                            <button class="btn btn-sm btn-outline-primary" data-action="send-offers">
                              <i class="ti tabler-gift me-1"></i>Send Offer
                            </button>
                          </div>
                        </div>
                      </li>
                    </div>
                  </div>

                  <!-- Upcoming Birthdays Section -->
                  <div class="card-body p-4">
                    <h6 class="text-primary mb-3">
                      <i class="ti tabler-calendar-event me-2"></i>
                      Upcoming Birthdays
                    </h6>
                    <ul class="p-0 m-0">
                      <!-- Birthday List Items -->
                      <li class="d-flex mb-4 pb-1 birthday-item position-relative">
                        <div class="avatar flex-shrink-0 me-3">
                          <span
                            class="avatar-initial rounded-circle bg-label-primary d-flex align-items-center justify-content-center"
                            style="width: 45px; height: 45px">
                            <i class="icon-base ti tabler-cake icon-md"></i>
                          </span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0 fw-semibold">Maria Garcia</h6>
                            <div class="d-flex align-items-center mt-1">
                              <i class="ti tabler-calendar-event text-muted me-1"></i>
                              <small class="text-body-secondary">March 25, 1990</small>
                              <span class="badge bg-label-primary ms-2 px-2 py-1">
                                <i class="ti tabler-clock me-1"></i>In 3 days
                              </span>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="ti tabler-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end show-on-hover">
                              <li>
                                <a class="dropdown-item" href="#" data-action="send-wishes">
                                  <i class="ti tabler-mail me-2"></i>Send Wishes
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#" data-action="send-offers">
                                  <i class="ti tabler-gift me-2"></i>Send Offer
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                  <i class="ti tabler-calendar-plus me-2"></i>Schedule Service
                                  <a class="dropdown-item" href="#"><i class="ti tabler-calendar-plus me-2"></i>Schedule
                                    Service</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>

                      <li class="d-flex mb-4 pb-1 birthday-item position-relative">
                        <div class="avatar flex-shrink-0 me-3">
                          <span
                            class="avatar-initial rounded-circle bg-label-success d-flex align-items-center justify-content-center"
                            style="width: 45px; height: 45px">
                            <i class="icon-base ti tabler-cake icon-md"></i>
                          </span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                          <div class="me-2">
                            <h6 class="mb-0 fw-semibold">John Smith</h6>
                            <div class="d-flex align-items-center mt-1">
                              <i class="ti tabler-calendar-event text-muted me-1"></i>
                              <small class="text-body-secondary">March 27, 1985</small>
                              <span class="badge bg-label-success ms-2 px-2 py-1">
                                <i class="ti tabler-clock me-1"></i>In 5 days
                              </span>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown">
                              <i class="ti tabler-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="#" data-action="send-wishes">
                                  <i class="ti tabler-mail me-2"></i>Send
                                  Wishes
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#" data-action="send-offers">
                                  <i class="ti tabler-gift me-2"></i>Send
                                  Offer
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#"><i class="ti tabler-calendar-plus me-2"></i>Schedule
                                  Service</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>

                      <!-- Add similar structure for Sarah Johnson and James Wilson -->
                      <!-- ... existing entries with updated styling ... -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <!-- Merchant Banner -->
            <div class="row mb-4">
              <div class="col-lg-12">
                <div class="card text-white border-0 shadow-lg"
                  style="background: linear-gradient(135deg, #7367f0, #a49cf6); border-radius: 15px;">
                  <div
                    class="card-body p-4 d-flex justify-content-between align-items-center position-relative overflow-hidden">
                    <!-- Confetti Animation -->
                    <div class="position-absolute w-100 h-100" id="confetti-container"></div>

                    <!-- Text Content -->
                    <div>
                      <h3 class="text-white fw-bold">🎉 Happy Birthday to Our Valued Clients! 🎂</h3>
                      <p class="mb-3">Celebrate your special day with us and enjoy exclusive offers!</p>
                      <a href="#" class="btn btn-light text-primary fw-bold birthday-btn">
                        Claim Your Birthday Offer 🎁
                      </a>

                      <style>
                        .birthday-btn {
                          border-radius: 30px;
                          background: #fff;
                          color: #92ffcc;
                          box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                          padding: 10px 20px;
                          font-size: 16px;
                          text-decoration: none;
                          display: inline-block;
                          transition: all 0.3s ease-in-out;
                        }

                        /* Hover Effect */
                        .birthday-btn:hover {
                          background: #92ffcc;
                          color: #fff;
                          box-shadow: 0 0 15px rgba(125, 196, 165, 0.8);
                          transform: scale(1.05);
                        }
                      </style>

                    </div>

                    <!-- Birthday Image -->
                    <div class="d-none d-md-block">
                      <img
                        src="https://png.pngtree.com/template/20241213/ourmid/pngtree-happy-birthday-greeting-vector-design-lettering-in-blue-space-with-gift-image_2037581.jpg"
                        alt="Birthday celebration"
                        style="max-height: 200px; transform: rotate(-5deg); border-radius: 10px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Confetti Animation Script -->
            <script>
              document.addEventListener("DOMContentLoaded", function () {
                const confettiContainer = document.getElementById("confetti-container");
                for (let i = 0; i < 50; i++) {
                  let confetti = document.createElement("div");
                  confetti.style.position = "absolute";
                  confetti.style.width = "10px";
                  confetti.style.height = "10px";
                  confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 85%)`;
                  confetti.style.left = `${Math.random() * 100}%`;
                  confetti.style.top = `${Math.random() * 100}%`;
                  confetti.style.opacity = Math.random();
                  confetti.style.animation = `falling ${3 + Math.random() * 3}s linear infinite`;
                  confetti.style.borderRadius = "50%";
                  confettiContainer.appendChild(confetti);
                }
              });

              /* Confetti Animation */
              const style = document.createElement("style");
              style.innerHTML = `
    @keyframes falling {
      0% { transform: translateY(-10px) rotate(0); opacity: 1; }
      100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
    }
  `;
              document.head.appendChild(style);
            </script>



            <!-- Charts Row -->
            <div class="row g-4 mb-4">
              <div class="col-12 col-lg-13">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Revenue Overview</h5>
                    <div class="d-flex gap-2">
                      <button class="btn btn-sm btn-outline-primary" onclick="exportChartData('revenueChart')">
                        <i class="ti tabler-download me-1"></i>Export Data
                      </button>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                          data-bs-toggle="dropdown">
                          2024
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">2024</a></li>
                          <li><a class="dropdown-item" href="#">2023</a></li>
                          <li><a class="dropdown-item" href="#">2022</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="revenueChart" class="chartjs" height="350"></canvas>
                  </div>
                </div>
              </div>
              <!-- Add new line chart -->

              <div class="col-15 col-lg-6">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Popular Services</h5>
                    <button class="btn btn-sm btn-outline-primary" onclick="exportChartData('popularServicesChart')">
                      <i class="ti tabler-download me-1"></i>Export Data
                    </button>
                  </div>
                  <div class="card-body">
                    <canvas id="popularServicesChart" class="chartjs" height="350"></canvas>
                  </div>
                </div>
              </div>

              <!-- Add new donut chart -->
              <div class="col-15 col-lg-6">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                      Booking Status Distribution
                    </h5>
                    <button class="btn btn-sm btn-outline-primary" onclick="exportChartData('bookingStatusChart')">
                      <i class="ti tabler-download me-1"></i>Export Data
                    </button>
                  </div>
                  <div class="card-body">
                    <canvas id="bookingStatusChart" class="chartjs" height="350"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Branch Performance Chart -->
            <div class="row g-4 mb-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                      Branch Performance Overview
                    </h5>
                    <div class="d-flex gap-2">
                      <button class="btn btn-sm btn-outline-primary"
                        onclick="exportChartData('branchPerformanceChart')">
                        <i class="ti tabler-download me-1"></i>Export Data
                      </button>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                          data-bs-toggle="dropdown">
                          This Month
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">This Month</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Last Month</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">This Quarter</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">This Year</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="branchPerformanceChart" height="300"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Recent Bookings Table -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center p-4">
                    <div>
                      <h5 class="card-title mb-1">Recent Bookings</h5>
                      <p class="text-muted mb-0 small">
                        Overview of latest transactions
                      </p>
                    </div>
                    <div class="d-flex gap-2">
                      <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                          data-bs-toggle="dropdown">
                          <i class="ti tabler-filter me-1"></i>Filter
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">All Bookings</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Completed</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Pending</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Cancelled</a>
                          </li>
                        </ul>
                      </div>
                      <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#viewAllBookingsModal">
                        <i class="ti tabler-list me-1"></i>View All
                      </button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover booking-table">
                      <thead class="table-light">
                        <tr>
                          <th>Booking ID</th>
                          <th>Patient</th>
                          <th>Service</th>
                          <th>Date & Time</th>
                          <th>Amount</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="booking-row">
                          <td>
                            <span class="fw-semibold">#BK001</span>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-2">
                                <span class="avatar-initial rounded-circle bg-label-primary">JS</span>
                              </div>
                              <div>
                                <h6 class="mb-0 fw-semibold">John Smith</h6>
                                <small class="text-muted">Regular Client</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>
                              <h6 class="mb-0">Hair Cut & Style</h6>
                              <small class="text-muted">45 mins</small>
                            </div>
                          </td>
                          <td>
                            <div>
                              <h6 class="mb-0">Mar 15, 2024</h6>
                              <small class="text-muted">10:30 AM</small>
                            </div>
                          </td>
                          <td>
                            <h6 class="mb-0">₱1,500</h6>
                          </td>
                          <td>
                            <span class="badge bg-label-success rounded-pill">Completed</span>
                          </td>
                        </tr>
                        <tr class="booking-row">
                          <td>
                            <span class="fw-semibold">#BK002</span>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-2">
                                <span class="avatar-initial rounded-circle bg-label-info">MG</span>
                              </div>
                              <div>
                                <h6 class="mb-0 fw-semibold">Maria Garcia</h6>
                                <small class="text-muted">VIP Client</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div>
                              <h6 class="mb-0">Full Body Massage</h6>
                              <small class="text-muted">90 mins</small>
                            </div>
                          </td>
                          <td>
                            <div>
                              <h6 class="mb-0">Mar 15, 2024</h6>
                              <small class="text-muted">2:00 PM</small>
                            </div>
                          </td>
                          <td>
                            <h6 class="mb-0">₱2,500</h6>
                          </td>
                          <td>
                            <span class="badge bg-label-warning rounded-pill">Pending</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div
                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                <div class="text-body">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Developed by
                  <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
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
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset( 'assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/vendor/libs/chartjs/chartjs.js') }}"></script>
<script src="{{ asset('assets/js/charts-chartjs-legend.js') }}"></script>
<script src="{{ asset('assets/js/charts-chartjs.js') }}"></script>

  <script>
    // Revenue Overview Line Chart
    const revenueCtx = document
      .getElementById("revenueChart")
      .getContext("2d");
    const revenueChart = new Chart(revenueCtx, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "Revenue 2024",
            data: [
              65000, 75000, 85000, 95000, 100000, 120000, 110000, 130000,
              140000, 150000, 160000, 170000,
            ],
            borderColor: function (context) {
              const chart = context.chart;
              const { ctx, chartArea } = chart;
              if (!chartArea) {
                return null;
              }
              const gradient = ctx.createLinearGradient(
                0,
                0,
                chartArea.width,
                0
              );
              gradient.addColorStop(0, "#c4cfd9"); // Light blue
              gradient.addColorStop(1, "#00d761"); // Dark blue
              return gradient;
            },
            tension: 0.4,
            fill: true,
            backgroundColor: "rgba(105, 108, 255, 0.1)",
          },
          {
            label: "Revenue 2023",
            data: [
              55000, 65000, 75000, 85000, 90000, 110000, 100000, 120000,
              130000, 140000, 150000, 160000,
            ],
            borderColor: function (context) {
              const chart = context.chart;
              const { ctx, chartArea } = chart;
              if (!chartArea) {
                return null;
              }
              const gradient = ctx.createLinearGradient(
                0,
                0,
                chartArea.width,
                0
              );
              gradient.addColorStop(0, "#c4cfd9"); // Light gray
              gradient.addColorStop(1, "#da9100"); // Dark slate
              return gradient;
            },
            tension: 0.4,
            fill: true,
            backgroundColor: "rgba(3, 195, 236, 0.1)",
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: "top",
          },
          title: {
            display: true,
            text: "Monthly Revenue Overview",
          },
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              callback: function (value) {
                return "₱" + value.toLocaleString();
              },
            },
          },
        },
      },
    });

    // Popular Services Pie Chart
    const servicesCtx = document
      .getElementById("popularServicesChart")
      .getContext("2d");
    const popularServicesChart = new Chart(servicesCtx, {
      type: "pie",
      data: {
        labels: [
          "Hair Care",
          "Massage",
          "Facial",
          "Nail Care",
          "Body Treatments",
        ],
        datasets: [
          {
            data: [30, 25, 20, 15, 10],
            backgroundColor: [
              "#696cff",
              "#03c3ec",
              "#ffab00",
              "#28c76f",
              "#ff3e1d",
            ],
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: "bottom",
          },
          title: {
            display: true,
            text: "Service Distribution",
          },
        },
      },
    });

    // Add a new Bar Chart for Branch Performance
    const branchPerformanceChart = new Chart(
      document.getElementById("branchPerformanceChart").getContext("2d"),
      {
        type: "bar",
        data: {
          labels: [
            "Branch A",
            "Branch B",
            "Branch C",
            "Branch D",
            "Branch E",
          ],
          datasets: [
            {
              label: "Bookings",
              data: [150, 120, 140, 100, 130],
              backgroundColor: "#696cff",
            },
            {
              label: "Revenue",
              data: [120000, 95000, 110000, 85000, 100000],
              backgroundColor: "#28c76f",
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: "top",
            },
            title: {
              display: true,
              text: "Branch Performance Overview",
            },
          },
          scales: {
            y: {
              beginAtZero: true,
              position: "left",
              ticks: {
                callback: function (value) {
                  return this.chart.data.datasets[1].label === "Revenue"
                    ? "₱" + value.toLocaleString()
                    : value;
                },
              },
            },
          },
        },
      }
    );

    // Booking Status Donut Chart
    const bookingStatusCtx = document
      .getElementById("bookingStatusChart")
      .getContext("2d");
    const bookingStatusChart = new Chart(bookingStatusCtx, {
      type: "doughnut",
      data: {
        labels: ["Completed", "Pending", "Cancelled", "Rescheduled"],
        datasets: [
          {
            data: [45, 25, 15, 15],
            backgroundColor: ["#28c76f", "#ffab00", "#ff3e1d", "#03c3ec"],
            borderWidth: 0,
            cutout: "75%",
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: "bottom",
          },
          title: {
            display: true,
            text: "Current Month Booking Status",
          },
          tooltip: {
            callbacks: {
              label: function (context) {
                const label = context.label || "";
                const value = context.parsed || 0;
                const percentage = Math.round(
                  (value / context.dataset.data.reduce((a, b) => a + b)) * 100
                );
                return `${label}: ${percentage}%`;
              },
            },
          },
        },
      },
    });

    function exportChartData(chartId) {
      const chart = Chart.getChart(chartId);
      if (!chart) return;

      let csvContent = "";
      let filename = "";

      if (chart.config.type === "bar") {
        // For bar charts
        csvContent = "Branch,";
        // Add headers for each dataset
        chart.data.datasets.forEach((dataset, index) => {
          csvContent +=
            dataset.label +
            (index < chart.data.datasets.length - 1 ? "," : "\n");
        });
        // Add data rows
        chart.data.labels.forEach((branch, i) => {
          csvContent += branch + ",";
          chart.data.datasets.forEach((dataset, j) => {
            const value =
              dataset.label === "Revenue"
                ? "₱" + dataset.data[i].toLocaleString()
                : dataset.data[i];
            csvContent +=
              value + (j < chart.data.datasets.length - 1 ? "," : "\n");
          });
        });
        filename = "branch_performance_data.csv";
      } else if (
        chart.config.type === "pie" ||
        chart.config.type === "doughnut"
      ) {
        // Existing pie/donut chart logic
        csvContent = "Status,Percentage\n";
        chart.data.labels.forEach((label, i) => {
          const value = chart.data.datasets[0].data[i];
          const total = chart.data.datasets[0].data.reduce(
            (a, b) => a + b,
            0
          );
          const percentage = ((value / total) * 100).toFixed(2);
          csvContent += `${label},${percentage}%\n`;
        });
        filename =
          chartId === "bookingStatusChart"
            ? "booking_status_data.csv"
            : "services_data.csv";
      } else if (chart.config.type === "line") {
        // Existing line chart logic
        csvContent = "Month,";
        chart.data.datasets.forEach((dataset, index) => {
          csvContent +=
            dataset.label +
            (index < chart.data.datasets.length - 1 ? "," : "\n");
        });
        chart.data.labels.forEach((label, i) => {
          csvContent += label + ",";
          chart.data.datasets.forEach((dataset, j) => {
            csvContent +=
              dataset.data[i] +
              (j < chart.data.datasets.length - 1 ? "," : "\n");
          });
        });
        filename = "revenue_data.csv";
      }

      // Create and trigger export
      const blob = new Blob([csvContent], {
        type: "text/csv;charset=utf-8;",
      });
      const link = document.createElement("a");
      const url = URL.createObjectURL(blob);

      link.setAttribute("href", url);
      link.setAttribute("download", filename);
      link.style.visibility = "hidden";
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  </script>

  <style>
    /* Add these styles to your CSS */
    .birthday-item {
      transition: all 0.3s ease;
      border-radius: 0.5rem;
      padding: 1rem;
    }

    .birthday-item:hover {
      background-color: rgba(105, 108, 255, 0.04);
      transform: translateX(5px);
    }

    .avatar-initial {
      transition: all 0.3s ease;
    }

    .birthday-item:hover .avatar-initial {
      transform: scale(1.1);
    }

    .badge {
      font-size: 0.75rem;
    }

    .dropdown-toggle::after {
      display: none;
    }

    /* Add these additional styles */
    .birthday-today {
      position: relative;
      padding: 1rem;
      background: linear-gradient(to right,
          rgba(105, 108, 255, 0.04),
          rgba(105, 108, 255, 0.08));
      border-radius: 0.5rem;
      border: 1px dashed rgba(105, 108, 255, 0.4);
    }

    .birthday-today::before {
      content: "🎉";
      position: absolute;
      top: -10px;
      right: -10px;
      font-size: 1.5rem;
    }

    .action-buttons .btn {
      transition: all 0.3s ease;
    }

    .action-buttons .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }


    /* Add to your existing styles */
    .menu-sub {
      display: none;
    }

    .menu-item.open>.menu-sub {
      display: block;
    }

    .menu-item.active>.menu-link {
      background-color: rgba(10, 54, 34, 0.1) !important;
      color: #0a3622 !important;
    }

    .menu-sub .menu-item.active>.menu-link {
      background-color: rgba(10, 54, 34, 0.1) !important;
    }

    /* Add after existing styles */
    .menu-sub {
      display: none;
    }

    .menu-sub.show {
      display: block;
    }

    .menu-toggle {
      cursor: pointer;

      /* Add these styles to your existing CSS */
      .booking-table {
        --bs-table-hover-bg: rgba(105, 108, 255, 0.04);
      }

      .booking-row {
        vertical-align: middle;
        transition: all 0.3s ease;
      }

      .booking-row:hover {
        transform: translateX(5px);
      }

      .btn-hover-scale {
        transition: all 0.2s ease;
      }

      .btn-hover-scale:hover {
        transform: scale(1.15);
      }

      .badge {
        padding: 0.5em 0.9em;
        font-weight: 500;
      }

      .avatar-sm {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .avatar-initial {
        font-size: 0.8rem;
        font-weight: 500;
      }

      /* Status badge colors */
      .bg-label-success {
        background-color: rgba(40, 199, 111, 0.16) !important;
        color: #28c76f !important;
      }

      .bg-label-warning {
        background-color: rgba(255, 171, 0, 0.16) !important;
        color: #ffab00 !important;
      }

      .bg-label-danger {
        background-color: rgba(255, 62, 29, 0.16) !important;
        color: #ff3e1d !important;
      }

      .table-light {
        --bs-table-bg: rgba(105, 108, 255, 0.04);
      }

      .card-header {
        border-bottom: 1px solid rgba(105, 108, 255, 0.1);
      }

      /* Add these styles to your existing CSS */
      .birthday-calendar {
        max-height: 60vh;
        overflow-y: auto;
      }

      .month-grid {
        display: grid;
        gap: 1.5rem;
      }

      .month-card {
        background: #fff;
        border-radius: 0.5rem;
        border: 1px solid rgba(105, 108, 255, 0.1);
        overflow: hidden;
      }

      .month-card.current-month {
        border: 1px solid rgba(105, 108, 255, 0.3);
        box-shadow: 0 0 0.5rem rgba(105, 108, 255, 0.1);
      }

      .month-title {
        padding: 1rem;
        margin: 0;
        background: rgba(105, 108, 255, 0.04);
        border-bottom: 1px solid rgba(105, 108, 255, 0.1);
      }

      .birthday-list .birthday-item {
        transition: all 0.3s ease;
      }

      .birthday-list .birthday-item:hover {
        background: rgba(105, 108, 255, 0.04);
      }

      .avatar-md {
        width: 45px;
        height: 45px;
      }

      #birthdaySearch:focus,
      #birthdayFilter:focus {
        border-color: #696cff;
        box-shadow: 0 0 0 0.25rem rgba(105, 108, 255, 0.1);
      }

      .modal-dialog-scrollable .modal-content {
        max-height: 80vh;
      }

      /* Custom scrollbar for the birthday calendar */
      .birthday-calendar::-webkit-scrollbar {
        width: 6px;
      }

      .birthday-calendar::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
      }

      .birthday-calendar::-webkit-scrollbar-thumb {
        background: #696cff;
        border-radius: 3px;
      }

      .birthday-calendar::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
  </style>

  <!-- Send Wishes Modal -->
  <div class="modal fade" id="sendWishesModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary bg-opacity-10">
          <h5 class="modal-title">
            <i class="ti tabler-mail me-2 text-primary"></i>
            Send Birthday Wishes
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary">JS</span>
                </div>
                <div>
                  <h6 class="mb-0">John Smith</h6>
                  <small class="text-muted">Regular Client</small>
                </div>
              </div>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Select Template</label>
              <select class="form-select">
                <option value="1">Birthday Greeting - Standard</option>
                <option value="2">Birthday Greeting - VIP Client</option>
                <option value="3">Birthday Greeting - Premium</option>
                <option value="4">Custom Message</option>
              </select>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" rows="4">
Dear [Client Name],

Happy Birthday! 🎉 We hope your special day is filled with joy and wonderful moments. As a valued client of Imajica, we want to make your birthday extra special.

Best wishes,
The Imajica Team</textarea>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="sendCopy" />
                <label class="form-check-label" for="sendCopy">
                  Send me a copy of this message
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">
            <i class="ti tabler-send me-1"></i>
            Send Wishes
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Send Offers Modal -->
  <div class="modal fade" id="sendOffersModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary bg-opacity-10">
          <h5 class="modal-title">
            <i class="ti tabler-gift me-2 text-primary"></i>
            Send Birthday Offer
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="avatar avatar-sm me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary">JS</span>
                </div>
                <div>
                  <h6 class="mb-0">John Smith</h6>
                  <small class="text-muted">Regular Client</small>
                </div>
              </div>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Select Offer Type</label>
              <select class="form-select mb-3">
                <option value="1">Birthday Discount - 20% Off</option>
                <option value="2">Birthday Spa Package</option>
                <option value="3">Free Service Add-on</option>
                <option value="4">Custom Offer</option>
              </select>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Validity Period</label>
              <div class="input-group">
                <input type="number" class="form-control" value="30" />
                <span class="input-group-text">days</span>
              </div>
              <small class="text-muted">Number of days the offer will be valid</small>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Offer Message</label>
              <textarea class="form-control" rows="4">
Dear [Client Name],

As a birthday treat, we're delighted to offer you a special 20% discount on any service of your choice. This exclusive offer is valid for 30 days from your birthday.

Terms & Conditions:
- Valid for one-time use only
- Cannot be combined with other offers
- Must be redeemed within the validity period

Happy Birthday!
The Imajica Team</textarea>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="sendSMS" checked />
                <label class="form-check-label" for="sendSMS">
                  Also send offer via SMS
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">
            <i class="ti tabler-gift me-1"></i>
            Send Offer
          </button>
        </div>
      </div>
    </div>
  </div>

  <style>
    /* Add these styles to your existing CSS */
    .modal-header {
      border-bottom: 1px solid rgba(105, 108, 255, 0.1);
    }

    .modal-footer {
      border-top: 1px solid rgba(105, 108, 255, 0.1);
    }

    .form-check-input:checked {
      background-color: #696cff;
      border-color: #696cff;
    }

    .modal .btn-close {
      background-color: transparent;
      border-radius: 50%;
      padding: 0.5rem;
      transition: all 0.2s ease;
    }

    .modal .btn-close:hover {
      background-color: rgba(105, 108, 255, 0.1);
      transform: scale(1.1);
    }

    .modal textarea {
      resize: none;
    }

    .modal .form-control:focus,
    .modal .form-select:focus {
      border-color: #696cff;
      box-shadow: 0 0 0 0.25rem rgba(105, 108, 255, 0.1);

    }
  </style>


  <script>
    // Add this to your existing JavaScript
    document.addEventListener("DOMContentLoaded", function () {
      // Function to open Send Wishes Modal
      function openSendWishesModal() {
        const modal = new bootstrap.Modal(
          document.getElementById("sendWishesModal")
        );
        modal.show();
      }

      // Function to open Send Offers Modal
      function openSendOffersModal() {
        const modal = new bootstrap.Modal(
          document.getElementById("sendOffersModal")
        );
        modal.show();
      }

      // Add click event listeners to the menu items
      document
        .querySelectorAll('[data-action="send-wishes"]')
        .forEach((button) => {
          button.addEventListener("click", openSendWishesModal);
        });

      document
        .querySelectorAll('[data-action="send-offers"]')
        .forEach((button) => {
          button.addEventListener("click", openSendOffersModal);
        });
    });
  </script>

  <!-- All Birthdays Modal -->
  <div class="modal fade" id="allBirthdaysModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary bg-opacity-10">
          <h5 class="modal-title">
            <i class="ti tabler-gift me-2 text-primary"></i>
            All Client Birthdays
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Filter Section -->
          <div class="row mb-4">
            <div class="col-md-12">
              <select class="form-select" id="birthdayFilter">
                <option value="all">All Months</option>
                <option value="current">Current Month</option>
                <option value="upcoming">Upcoming Birthdays</option>
                <option value="past">Past Birthdays</option>
              </select>
            </div>
          </div>

          <!-- Birthday Calendar View -->
          <div class="birthday-calendar mb-4">
            <div class="month-grid">
              <!-- March -->
              <div class="month-card current-month">
                <h6 class="month-title">March 2024</h6>
                <div class="birthday-list">
                  <div class="birthday-item d-flex align-items-center p-3 border-bottom">
                    <div class="avatar avatar-md me-3">
                      <span class="avatar-initial rounded-circle bg-label-danger">ET</span>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">Emily Thompson</h6>
                      <div class="d-flex align-items-center">
                        <i class="ti tabler-calendar-event text-muted me-1"></i>
                        <small class="text-muted">March 22</small>
                        <span class="badge bg-label-danger ms-2">Today</span>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti tabler-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-wishes"><i
                              class="ti tabler-mail me-2"></i>Send Wishes</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-offers"><i
                              class="ti tabler-gift me-2"></i>Send Offer</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-calendar-plus me-2"></i>Schedule
                            Service</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="birthday-item d-flex align-items-center p-3 border-bottom">
                    <div class="avatar avatar-md me-3">
                      <span class="avatar-initial rounded-circle bg-label-primary">MG</span>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">Maria Garcia</h6>
                      <div class="d-flex align-items-center">
                        <i class="ti tabler-calendar-event text-muted me-1"></i>
                        <small class="text-muted">March 25</small>
                        <span class="badge bg-label-primary ms-2">In 3 days</span>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti tabler-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-wishes"><i
                              class="ti tabler-mail me-2"></i>Send Wishes</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-offers"><i
                              class="ti tabler-gift me-2"></i>Send Offer</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-calendar-plus me-2"></i>Schedule
                            Service</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- April -->
              <div class="month-card">
                <h6 class="month-title">April 2024</h6>
                <div class="birthday-list">
                  <div class="birthday-item d-flex align-items-center p-3 border-bottom">
                    <div class="avatar avatar-md me-3">
                      <span class="avatar-initial rounded-circle bg-label-info">RJ</span>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">Robert Johnson</h6>
                      <div class="d-flex align-items-center">
                        <i class="ti tabler-calendar-event text-muted me-1"></i>
                        <small class="text-muted">April 5</small>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti tabler-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-wishes"><i
                              class="ti tabler-mail me-2"></i>Send Wishes</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-offers"><i
                              class="ti tabler-gift me-2"></i>Send Offer</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-calendar-plus me-2"></i>Schedule
                            Service</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- May -->
              <div class="month-card">
                <h6 class="month-title">May 2024</h6>
                <div class="birthday-list">
                  <div class="birthday-item d-flex align-items-center p-3 border-bottom">
                    <div class="avatar avatar-md me-3">
                      <span class="avatar-initial rounded-circle bg-label-success">SL</span>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">Sarah Lee</h6>
                      <div class="d-flex align-items-center">
                        <i class="ti tabler-calendar-event text-muted me-1"></i>
                        <small class="text-muted">May 15</small>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti tabler-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-wishes"><i
                              class="ti tabler-mail me-2"></i>Send Wishes</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#" data-action="send-offers"><i
                              class="ti tabler-gift me-2"></i>Send Offer</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-calendar-plus me-2"></i>Schedule
                            Service</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Add this to your existing JavaScript
    document.addEventListener("DOMContentLoaded", function () {
      // Update the View All button click handler
      const viewAllButton = document.querySelector(
        "button[onclick=\"window.location.href='all-birthdays.html'\"]"
      );
      if (viewAllButton) {
        viewAllButton.onclick = function (e) {
          e.preventDefault();
          const modal = new bootstrap.Modal(
            document.getElementById("allBirthdaysModal")
          );
          modal.show();
        };
      }

      // Search functionality
      const searchInput = document.getElementById("birthdaySearch");
      if (searchInput) {
        searchInput.addEventListener("input", function (e) {
          const searchTerm = e.target.value.toLowerCase();
          const birthdayItems = document.querySelectorAll(".birthday-item");

          birthdayItems.forEach((item) => {
            const name = item.querySelector("h6").textContent.toLowerCase();
            if (name.includes(searchTerm)) {
              item.style.display = "flex";
            } else {
              item.style.display = "none";
            }
          });
        });
      }

      // Filter functionality
      const filterSelect = document.getElementById("birthdayFilter");
      if (filterSelect) {
        filterSelect.addEventListener("change", function (e) {
          const filterValue = e.target.value;
          const monthCards = document.querySelectorAll(".month-card");

          monthCards.forEach((card) => {
            switch (filterValue) {
              case "current":
                card.style.display = card.classList.contains("current-month")
                  ? "block"
                  : "none";
                break;
              case "upcoming":
                // Add logic for upcoming months
                break;
              case "past":
                // Add logic for past months
                break;
              default:
                card.style.display = "block";
            }
          });
        });
      }
    });
  </script>

  <!-- View All Bookings Modal -->
  <div class="modal fade" id="viewAllBookingsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header bg-primary bg-opacity-10">
          <h5 class="modal-title">
            <i class="ti tabler-calendar me-2 text-primary"></i>
            All Bookings
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Filter and Search Tools -->
          <div class="row g-3 mb-4">
            <div class="col-md-6 col-lg-3">
              <div class="input-group">
                <span class="input-group-text"><i class="ti tabler-search"></i></span>
                <input type="text" class="form-control" id="searchBookings" placeholder="Search bookings..." />
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <select class="form-select" id="statusFilter">
                <option value="all">All Status</option>
                <option value="completed">Completed</option>
                <option value="pending">Pending</option>
                <option value="cancelled">Cancelled</option>
              </select>
            </div>
            <div class="col-md-6 col-lg-3">
              <input type="date" class="form-control" id="dateFilter" />
            </div>
            <div class="col-md-6 col-lg-3">
              <button class="btn btn-primary w-100" id="exportBookings">
                <i class="ti tabler-download me-1"></i>Export
              </button>
            </div>
          </div>

          <!-- Bookings Table -->
          <div class="table-responsive">
            <table class="table table-hover booking-table">
              <thead class="table-light">
                <tr>
                  <th>Booking ID</th>
                  <th>Client</th>
                  <th>Service</th>
                  <th>Date & Time</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- First Row -->
                <tr class="booking-row">
                  <td><span class="fw-semibold">#BK001</span></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2">
                        <span class="avatar-initial rounded-circle bg-label-primary">JS</span>
                      </div>
                      <div>
                        <h6 class="mb-0 fw-semibold">John Smith</h6>
                        <small class="text-muted">Regular Client</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div>
                      <h6 class="mb-0">Hair Cut & Style</h6>
                      <small class="text-muted">45 mins</small>
                    </div>
                  </td>
                  <td>
                    <div>
                      <h6 class="mb-0">Mar 15, 2024</h6>
                      <small class="text-muted">10:30 AM</small>
                    </div>
                  </td>
                  <td>
                    <h6 class="mb-0">₱1,500</h6>
                  </td>
                  <td>
                    <span class="badge bg-label-success rounded-pill">Completed</span>
                  </td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti tabler-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-edit me-1"></i>Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-calendar me-1"></i>Reschedule</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-trash me-1"></i>Cancel</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>

                <!-- Second Row -->
                <tr class="booking-row">
                  <td><span class="fw-semibold">#BK002</span></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-2">
                        <span class="avatar-initial rounded-circle bg-label-info">MG</span>
                      </div>
                      <div>
                        <h6 class="mb-0 fw-semibold">Maria Garcia</h6>
                        <small class="text-muted">VIP Client</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div>
                      <h6 class="mb-0">Full Body Massage</h6>
                      <small class="text-muted">90 mins</small>
                    </div>
                  </td>
                  <td>
                    <div>
                      <h6 class="mb-0">Mar 15, 2024</h6>
                      <small class="text-muted">2:00 PM</small>
                    </div>
                  </td>
                  <td>
                    <h6 class="mb-0">₱2,500</h6>
                  </td>
                  <td>
                    <span class="badge bg-label-warning rounded-pill">Pending</span>
                  </td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti tabler-dots-vertical"></i>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-edit me-1"></i>Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-calendar me-1"></i>Reschedule</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"><i class="ti tabler-trash me-1"></i>Cancel</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted">Showing 1 to 10 of 50 entries</div>
            <nav aria-label="Page navigation">
              <ul class="pagination mb-0">
                <li class="page-item prev">
                  <a class="page-link" href="#"><i class="ti tabler-chevron-left"></i></a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item next">
                  <a class="page-link" href="#"><i class="ti tabler-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add this CSS -->
  <style>
    /* Modal styles */
    .modal-xl {
      max-width: 1200px;
    }

    /* Table styles */
    .booking-table th {
      white-space: nowrap;
    }

    .booking-row {
      transition: all 0.3s ease;
    }

    .booking-row:hover {
      background-color: rgba(105, 108, 255, 0.04);
      transform: translateX(5px);
    }

    /* Form control focus states */
    .form-control:focus,
    .form-select:focus {
      border-color: #696cff;
      box-shadow: 0 0 0 0.25rem rgba(105, 108, 255, 0.1);
    }

    /* Pagination styles */
    .pagination .page-link {
      color: #696cff;
    }

    .pagination .active .page-link {
      background-color: #696cff;
      border-color: #696cff;
      color: #fff;
    }

    /* Badge hover effect */
    .badge {
      transition: all 0.3s ease;
    }

    .badge:hover {
      transform: scale(1.1);
    }
  </style>

  <!-- Add this JavaScript -->
  {{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Search functionality
      const searchInput = document.getElementById("searchBookings");
      searchInput.addEventListener("input", function (e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll(".booking-table tbody tr");

        rows.forEach((row) => {
          const text = row.textContent.toLowerCase();
          row.style.display = text.includes(searchTerm) ? "" : "none";
        });
      });

      // Status filter
      const statusFilter = document.getElementById("statusFilter");
      statusFilter.addEventListener("change", function (e) {
        const status = e.target.value.toLowerCase();
        const rows = document.querySelectorAll(".booking-table tbody tr");

        rows.forEach((row) => {
          if (status === "all") {
            row.style.display = "";
            return;
          }

          const statusCell = row
            .querySelector(".badge")
            .textContent.toLowerCase();
          row.style.display = statusCell === status ? "" : "none";
        });
      });

      // Date filter
      const dateFilter = document.getElementById("dateFilter");
      dateFilter.addEventListener("change", function (e) {
        const selectedDate = new Date(e.target.value);
        const rows = document.querySelectorAll(".booking-table tbody tr");

        rows.forEach((row) => {
          const dateCell =
            row.querySelector("td:nth-child(4) h6").textContent;
          const bookingDate = new Date(dateCell);

          if (isNaN(selectedDate.getTime())) {
            row.style.display = "";
            return;
          }

          row.style.display =
            selectedDate.toDateString() === bookingDate.toDateString()
              ? ""
              : "none";
        });
      });

      // Export functionality
      document
        .getElementById("exportBookings")
        .addEventListener("click", function () {
          // Add your export logic here
          alert("Export functionality will be implemented here");
        });
    });
  </script> --}}

</body>

</html>