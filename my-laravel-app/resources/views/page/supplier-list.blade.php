@extends('layouts.app')
@extends('layouts.layout-collapsed-menu-dark')
@extends('layouts.layout-container-dark')
@extends('layouts.layout-content-navbar-and-sidebar-dark')
@extends('layouts.layout-without-navbar-dark')
@extends('layouts.layout-content-navbar-dark')
@extends('layouts.layout-fluid-dark')
@extends('layouts.layout-without-menu-dark')

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
    <link rel="icon" type="image/x-icon" href="logo.png" />

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

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/flatpickr/flatpickr.css"
    />
    <!-- Row Group CSS -->
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css"
    />
    <!-- Form Validation -->
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/%40form-validation/form-validation.css"
    />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../../assets/js/config.js"></script>
    <style>
      /* Add to your existing CSS */
      .backdrop-blur {
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
      }

      .modal-content {
        background: #f5f5f9;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 8px 32px 0 rgba(10, 54, 34, 0.37);
      }

      .modal-header {
        background-color: #0a3622 !important;
        color: white;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        padding: 1.5rem;
      }

      .modal-body {
        padding: 2rem;
      }

      .card {
        background: white;
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s;
      }

      .text-primary {
        color: #0a3622 !important;
      }

      .btn-light-secondary {
        background-color: #e7efe9;
        color: #0a3622;
        border: none;
      }

      .btn-light-secondary:hover {
        background-color: #0a3622;
        color: white;
      }

      .text-muted {
        color: #697a8d !important;
      }

      .card:hover {
        box-shadow: 0 4px 12px rgba(10, 54, 34, 0.15);
      }

      /* Update existing CSS */
      .modal-content {
        background: #f5f5f9;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 8px 32px 0 rgba(10, 54, 34, 0.37);
      }

      .modal-header {
        background-color: #0a3622 !important;
        color: white;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        padding: 1.5rem;
      }

      .card-subtitle {
        color: #0a3622 !important;
        font-weight: 600;
      }

      .text-primary {
        color: #0a3622 !important;
      }

      .text-muted {
        color: #4a6153 !important;
      }

      .badge.bg-success {
        background-color: #0a3622 !important;
        color: white;
      }

      .btn-light-secondary {
        background-color: #e7efe9;
        color: #0a3622;
        border: none;
      }

      .btn-light-secondary:hover {
        background-color: #0a3622;
        color: white;
      }

      .card {
        background: white;
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 4px 12px rgba(10, 54, 34, 0.1);
      }

      .card:hover {
        box-shadow: 0 4px 12px rgba(10, 54, 34, 0.15);
      }

      .icon-base {
        color: #0a3622;
      }

      .modal-header .modal-title,
      .modal-header .modal-title span {
        color: white !important;
      }

      .supplier-images {
        background: #f8f9fa;
        padding: 1rem;
        border: 1px solid #e9ecef;
      }

      .supplier-images img {
        width: 150px; /* Reduced from 120px */
        height: 150px; /* Reduced from 120px */
        object-fit: cover;
        border-radius: 0.5rem;
        border: 2px solid #fff;
        box-shadow: 0 2px 8px rgba(10, 54, 34, 0.1);
      }

      .modal-body {
        padding: 1.5rem;
      }

      .modal-header {
        padding: 1rem 1.5rem;
      }

      .modal-footer {
        padding: 1rem 1.5rem;
      }

      /* Add these new styles */
      .supplier-detail-card {
        background: #fff;
        border-radius: 1rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
      }

      .supplier-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.75rem;
      }

      .supplier-info-icon {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e7efe9;
        color: #0a3622;
        border-radius: 0.5rem;
        margin-right: 1rem;
      }

      .supplier-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
      }

      .supplier-image-card {
        background: white;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(10, 54, 34, 0.1);
        transition: transform 0.2s;
      }

      .supplier-image-card:hover {
        transform: translateY(-5px);
      }

      .supplier-image-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
      }

      .supplier-image-card .card-body {
        padding: 1rem;
      }

      .supplier-image-card .card-title {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        color: #0a3622;
      }

      .supplier-image-card .card-text {
        font-size: 0.8125rem;
        color: #6c757d;
      }

      .modal-xl {
        max-width: 1200px;
      }

      .supplier-detail-card {
        background: #fff;
        border-radius: 0.75rem;
        padding: 1.25rem;
        height: 100%;
        box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
      }

      .supplier-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
      }

      .supplier-info-icon {
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

      .supplier-gallery-compact {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
      }

      .supplier-gallery-compact img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 0.5rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .modal-content {
        border-radius: 1rem;
      }

      .modal-header {
        padding: 1rem 1.5rem;
        background: linear-gradient(
          135deg,
          #0a3622 0%,
          #1a5c3c 100%
        ) !important;
      }

      .modal-body {
        padding: 1.5rem;
      }

      .modal-xl {
        max-width: 1140px; /* Match client modal width */
      }

      .supplier-detail-card {
        background: #fff;
        border-radius: 0.75rem;
        padding: 1.25rem;
        height: 100%;
        box-shadow: 0 0.125rem 0.25rem rgba(10, 54, 34, 0.075);
      }

      .supplier-info-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 0.5rem;
        border-radius: 0.5rem;
      }

      .supplier-info-icon {
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

      .supplier-gallery-compact {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
      }

      .supplier-gallery-compact img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 0.5rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .modal-content {
        border-radius: 1rem;
      }

      .modal-header {
        background: linear-gradient(
          135deg,
          #0a3622 0%,
          #1a5c3c 100%
        ) !important;
        padding: 1rem 1.5rem;
      }

      .modal-header .btn-outline-light {
        border-width: 1px;
        font-size: 0.875rem;
        padding: 0.375rem 1rem;
        transition: all 0.2s ease-in-out;
      }

      .modal-header .btn-outline-light:hover {
        background-color: rgba(255, 255, 255, 0.1);
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
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div
              class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
            >
              <a
                class="nav-item nav-link px-0 me-xl-6"
                href="javascript:void(0)"
              >
                <i class="icon-base ti tabler-menu-2 icon-md"></i>
              </a>
            </div>

            <div
              class="navbar-nav-right d-flex align-items-center justify-content-end"
              id="navbar-collapse"
            >
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                  <a
                    class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                    href="javascript:void(0);"
                  >
                    <span
                      class="d-inline-block text-body-secondary fw-normal"
                      id="autocomplete"
                    ></span>
                  </a>
                </div>
              </div>

              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill"
                    id="nav-theme"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <i
                      class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"
                    ></i>
                    <span class="d-none ms-2" id="nav-theme-text"
                      >Toggle theme</span
                    >
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="nav-theme-text"
                  >
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center active"
                        data-bs-theme-value="light"
                        aria-pressed="false"
                      >
                        <span
                          ><i
                            class="icon-base ti tabler-sun icon-22px me-3"
                            data-icon="sun"
                          ></i
                          >Light</span
                        >
                      </button>
                    </li>
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center"
                        data-bs-theme-value="dark"
                        aria-pressed="true"
                      >
                        <span
                          ><i
                            class="icon-base ti tabler-moon-stars icon-22px me-3"
                            data-icon="moon-stars"
                          ></i
                          >Dark</span
                        >
                      </button>
                    </li>
                    <li>
                      <button
                        type="button"
                        class="dropdown-item align-items-center"
                        data-bs-theme-value="system"
                        aria-pressed="false"
                      >
                        <span
                          ><i
                            class="icon-base ti tabler-device-desktop-analytics icon-22px me-3"
                            data-icon="device-desktop-analytics"
                          ></i
                          >System</span
                        >
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
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <div class="avatar avatar-online">
                      <img
                        src="../../assets/img/avatars/1.png"
                        alt
                        class="rounded-circle"
                      />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item mt-0"
                        href="pages-account-settings-account.html"
                      >
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img
                                src="../../assets/img/avatars/1.png"
                                alt
                                class="rounded-circle"
                              />
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
                        <i class="icon-base ti tabler-user me-3 icon-md"></i
                        ><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="icon-base ti tabler-settings me-3 icon-md"></i
                        ><span class="align-middle">Settings</span>
                      </a>
                    </li>

                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>

                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                        <a
                          class="btn btn-sm btn-danger d-flex"
                          href="#"
                          target="_blank"
                        >
                          <small class="align-middle">Logout</small>
                          <i
                            class="icon-base ti tabler-logout ms-2 icon-14px"
                          ></i>
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

          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                <!-- Table Header with Search -->
                <div class="px-4 py-3">
                  <div class="row justify-content-end">
                    <div class="col-md-6 text-end">
                      <div
                        class="d-flex justify-content-end align-items-center mb-1"
                      >
                        <div
                          class="dataTables_length me-3"
                          id="servicesTable_length"
                        >
                          <!-- Entries per page dropdown will be inserted here by DataTables -->
                        </div>
                        <div
                          class="dataTables_filter"
                          id="servicesTable_filter"
                        >
                          <!-- Search input will be inserted here by DataTables -->
                        </div>
                      </div>
                      <small class="text-muted d-block mt-1">
                        <i class="ti tabler-info-circle me-1"></i>
                        Search by supplier name
                      </small>
                    </div>
                  </div>
                </div>

                <!-- Table -->
                <div class="table-responsive text-nowrap px-3">
                  <table id="servicesTable" class="table table-striped">
                    <thead class="table-light">
                      <tr>
                        <th>Supplier Name</th>
                        <th>Contact Number</th>
                        <th>Supplier Type</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="servicesTableBody">
                      <tr>
                        <td>Supplier A</td>
                        <td>+63 912 345 6789</td>
                        <td>
                          <span class="badge bg-label-success"
                            >Equipment Supplier</span
                          >
                        </td>
                        <td>
                          <button
                            class="btn btn-sm btn-success view-supplier"
                            data-bs-toggle="modal"
                            data-bs-target="#supplierModal"
                            data-company="Supplier A"
                            data-contact="+63 912 345 6789"
                            data-type="Equipment Supplier"
                          >
                            View
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <script>
                  // Add this mockup data object before your existing DOMContentLoaded event listener
                  const supplierMockData = {
                    "Glow & Grace Beauty Co.": {
                      contact: "+63 917 123 4567",
                      email: "contact@glowandgrace.com",
                      address:
                        "Unit 1234 Glorietta Complex, Ayala Center, Makati City",
                      type: "Product Supplier",
                      products:
                        "Premium skincare products, Professional beauty equipment, Dermatological supplies",
                    },
                    "Pristine Aesthetics PH": {
                      contact: "+63 918 234 5678",
                      email: "info@pristineaesthetics.ph",
                      address: "456 The Podium, Ortigas Center, Pasig City",
                      type: "Equipment Supplier",
                      products:
                        "Medical-grade facial machines, Advanced laser equipment, Professional massage beds",
                    },
                    "Radiant Beauty Solutions": {
                      contact: "+63 919 345 6789",
                      email: "sales@radiantbeauty.com",
                      address: "789 SM Megamall, Mandaluyong City",
                      type: "Service Provider",
                      products:
                        "Beauty treatment supplies, Spa essentials, Professional beauty tools",
                    },
                    "Lumiere Skin Clinic": {
                      contact: "+63 920 456 7890",
                      email: "info@lumiereclinic.com",
                      address: "123 Bonifacio High Street, BGC, Taguig City",
                      type: "Equipment Supplier",
                      products:
                        "High-end aesthetic equipment, Professional skincare machines, Clinical beauty tools",
                    },
                  };

                  document.addEventListener("DOMContentLoaded", function () {
                    const tableBody =
                      document.getElementById("servicesTableBody");
                    const supplierTypes = [
                      { type: "Equipment Supplier", badge: "bg-label-primary" },
                      { type: "Product Supplier", badge: "bg-label-info" },
                      { type: "Service Provider", badge: "bg-label-warning" },
                    ];

                    // Clear existing content
                    tableBody.innerHTML = "";

                    const aestheticCompanyNames = [
                      "Glow & Grace Beauty Co.",
                      "Pristine Aesthetics PH",
                      "Radiant Beauty Solutions",
                      "Lumiere Skin Clinic",
                      "Beauty Haven Manila",
                      "Ethereal Wellness Spa",
                      "Divine Beauty Essentials",
                      "Skin Perfection Center",
                      "Luxe Beauty Supplies",
                      "Bella Vita Aesthetics",
                      "Pure Glow Solutions",
                      "Serenity Beauty Labs",
                      "Crystal Clear Beauty",
                      "Bloom & Glow Manila",
                      "Aesthetic Elements PH",
                      "Beauty Fusion Manila",
                      "Royal Skin Essentials",
                      "Glamour Grove Supply",
                      "Zenith Beauty Systems",
                      "Eternal Beauty Works",
                      "Pearl Aesthetics Co.",
                      "Luminous Beauty Pro",
                      "Radiance Medical Spa",
                      "Elite Beauty Arsenal",
                      "Derma Care Solutions",
                      "Skin Science Manila",
                      "Beauty Botanicals PH",
                      "Pure Bliss Aesthetics",
                      "Glam Tech Beauty Co.",
                      "Aesthetic Authority PH",
                    ];

                    // Modify the row generation code:
                    for (let i = 0; i < 30; i++) {
                      const randomType =
                        supplierTypes[
                          Math.floor(Math.random() * supplierTypes.length)
                        ];

                      const row = `
                        <tr>
                          <td>${aestheticCompanyNames[i]}</td>
                          <td>+63 9${Math.floor(
                            100000000 + Math.random() * 900000000
                          )}</td>
                          <td><span class="badge ${randomType.badge}">${
                        randomType.type
                      }</span></td>
                          <td>
                            <div class="d-flex gap-2">
                              <button 
                                class="btn btn-sm btn-success view-supplier" 
                                data-bs-toggle="modal" 
                                data-bs-target="#supplierModal"
                                data-company="${aestheticCompanyNames[i]}"
                                data-contact="+63 9${Math.floor(
                                  100000000 + Math.random() * 900000000
                                )}"
                                data-email="info@${aestheticCompanyNames[i]
                                  .toLowerCase()
                                  .replace(/[^a-z0-9]/g, "")}.com"
                                data-address="${generateRandomAddress()}"
                                data-type="${randomType.type}"
                                data-products="Premium ${
                                  randomType.type
                                } for aesthetic and beauty services"
                              >
                                View
                              </button>
                              <button class="btn btn-sm btn-info">
                                Edit
                              </button>
                              <button class="btn btn-sm btn-danger">
                                Delete
                              </button>
                            </div>
                          </td>
                        </tr>`;
                      tableBody.insertAdjacentHTML("beforeend", row);
                    }

                    // Add click handler for view buttons
                    document
                      .querySelectorAll(".view-supplier")
                      .forEach((button) => {
                        button.addEventListener("click", function () {
                          document.getElementById(
                            "modalCompanyName"
                          ).textContent = this.dataset.company;
                          document.getElementById("modalContact").textContent =
                            this.dataset.contact;
                          document.getElementById("modalEmail").textContent =
                            this.dataset.email;
                          document.getElementById("modalType").textContent =
                            this.dataset.type;

                          // Update status with appropriate badge color
                          const statusElement =
                            document.getElementById("modalStatus");
                          statusElement.textContent = this.dataset.status;
                          statusElement.className =
                            "badge " +
                            (this.dataset.status === "Active"
                              ? "bg-success"
                              : this.dataset.status === "Inactive"
                              ? "bg-danger"
                              : "bg-warning");

                          document.getElementById(
                            "modalLastOrder"
                          ).textContent = this.dataset.lastorder;
                        });
                      });
                  });

                  // Update the click handler
                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        document.getElementById(
                          "modalCompanyName"
                        ).textContent = this.dataset.company;
                        document.getElementById("modalContact").textContent =
                          this.dataset.contact;
                        document.getElementById("modalType").textContent =
                          this.dataset.type;
                      });
                    });

                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        document.getElementById(
                          "modalCompanyName"
                        ).textContent = this.dataset.company;
                        document.getElementById("modalContact").textContent =
                          this.dataset.contact;
                        document.getElementById("modalEmail").textContent =
                          this.dataset.email || "company@example.com";
                        document.getElementById("modalAddress").textContent =
                          this.dataset.address ||
                          "123 Business Street, Metro Manila";
                        document.getElementById("modalType").textContent =
                          this.dataset.type;
                        document.getElementById("modalProducts").textContent =
                          this.dataset.products ||
                          "Various equipment and supplies";
                      });
                    });

                  // Add this to your existing JavaScript
                  const supplierTypeImages = {
                    "Equipment Supplier": [
                      "../../assets/img/suppliers/equipment1.jpg",
                      "../../assets/img/suppliers/equipment2.jpg",
                      "../../assets/img/suppliers/equipment3.jpg",
                    ],
                    "Product Supplier": [
                      "../../assets/img/suppliers/product1.jpg",
                      "../../assets/img/suppliers/product2.jpg",
                      "../../assets/img/suppliers/product3.jpg",
                    ],
                    "Service Provider": [
                      "../../assets/img/suppliers/service1.jpg",
                      "../../assets/img/suppliers/service2.jpg",
                      "../../assets/img/suppliers/service3.jpg",
                    ],
                  };

                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        // ... existing modal population code ...

                        // Add images based on supplier type
                        const supplierType = this.dataset.type;
                        const imagesContainer =
                          document.getElementById("supplierTypeImages");
                        imagesContainer.innerHTML = ""; // Clear existing images

                        if (supplierTypeImages[supplierType]) {
                          supplierTypeImages[supplierType].forEach((imgSrc) => {
                            imagesContainer.innerHTML += `
          <div class="supplier-image">
            <img src="${imgSrc}" alt="${supplierType} example" />
          </div>
        `;
                          });
                        }
                      });
                    });

                  // Update the view button click handler
                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        const companyName = this.dataset.company;
                        // Get data from mockup or generate if not in mockup
                        const data = supplierMockData[companyName] || {
                          contact:
                            "+63 9" +
                            Math.floor(Math.random() * 900000000 + 100000000),
                          email: `info@${companyName
                            .toLowerCase()
                            .replace(/[^a-z0-9]/g, "")}.com`,
                          address: generateRandomAddress(),
                          type: this.dataset.type,
                          products: `Premium ${this.dataset.type} equipment and supplies for aesthetic clinics and beauty centers`,
                        };

                        // Update modal with data
                        document.getElementById(
                          "modalCompanyName"
                        ).textContent = companyName;
                        document.getElementById("modalContact").textContent =
                          data.contact;
                        document.getElementById("modalEmail").textContent =
                          data.email;
                        document.getElementById("modalAddress").textContent =
                          data.address;
                        document.getElementById("modalType").textContent =
                          data.type;
                        document.getElementById("modalProducts").textContent =
                          data.products;
                      });
                    });

                  // Update the random address generator to be more realistic
                  function generateRandomAddress() {
                    const buildings = [
                      "SM",
                      "Ayala",
                      "Robinsons",
                      "The Podium",
                      "Market Market",
                      "Greenbelt",
                    ];
                    const areas = [
                      "Makati",
                      "BGC",
                      "Ortigas",
                      "Alabang",
                      "Quezon City",
                      "Manila",
                    ];
                    const streets = [
                      "Corporate Center",
                      "Business District",
                      "Commercial Avenue",
                      "Plaza",
                      "Mall Complex",
                    ];

                    const building =
                      buildings[Math.floor(Math.random() * buildings.length)];
                    const area =
                      areas[Math.floor(Math.random() * areas.length)];
                    const street =
                      streets[Math.floor(Math.random() * streets.length)];

                    return `${building} ${street}, ${area}, Metro Manila`;
                  }

                  // Update your view-supplier click handler
                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        // Example mockup data for display
                        const mockupData = {
                          contact: "+63 917 123 4567",
                          email: "contact@glowandgrace.com",
                          address:
                            "Unit 1234 Glorietta Complex, Ayala Center, Makati City",
                          type: "Product Supplier",
                          products:
                            "• Premium Facial Equipment\n• Dermatological Supplies\n• Professional Beauty Tools\n• Skincare Products\n• Treatment Machines",
                        };

                        // Update modal with mockup data
                        document.getElementById("modalContact").textContent =
                          mockupData.contact;
                        document.getElementById("modalEmail").textContent =
                          mockupData.email;
                        document.getElementById("modalAddress").textContent =
                          mockupData.address;
                        document.getElementById("modalType").textContent =
                          mockupData.type;
                        document.getElementById("modalProducts").textContent =
                          mockupData.products;
                      });
                    });

                  // Update the view-supplier click handler with static mockup data
                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        const mockData = {
                          "Glow & Grace Beauty Co.": {
                            contact: "+63 917 123 4567",
                            email: "info@glowandgrace.com",
                            address:
                              "Unit 1234 Glorietta Complex, Ayala Center, Makati City",
                            type: "Product Supplier",
                            products: [
                              "Premium Facial Equipment",
                              "Dermatological Supplies",
                              "Professional Beauty Tools",
                              "Skincare Products",
                              "Treatment Machines",
                            ].join("\n• "),
                          },
                        };

                        // Always use the same mockup data for demonstration
                        document.getElementById("modalContact").textContent =
                          mockData["Glow & Grace Beauty Co."].contact;
                        document.getElementById("modalEmail").textContent =
                          mockData["Glow & Grace Beauty Co."].email;
                        document.getElementById("modalAddress").textContent =
                          mockData["Glow & Grace Beauty Co."].address;
                        document.getElementById("modalType").textContent =
                          mockData["Glow & Grace Beauty Co."].type;
                        document.getElementById("modalProducts").textContent =
                          "• " + mockData["Glow & Grace Beauty Co."].products;
                      });
                    });

                  document
                    .querySelectorAll(".view-supplier")
                    .forEach((button) => {
                      button.addEventListener("click", function () {
                        // Update modal with data from button attributes
                        document.getElementById("modalContact").textContent =
                          this.dataset.contact;
                        document.getElementById("modalEmail").textContent =
                          this.dataset.email;
                        document.getElementById("modalAddress").textContent =
                          this.dataset.address;
                        document.getElementById("modalType").textContent =
                          this.dataset.type;
                        document.getElementById("modalProducts").textContent =
                          this.dataset.products;
                      });
                    });
                </script>
              </div>
            </div>
          </div>

          <!-- Content wrapper -->

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

    <!-- Replace the existing modal HTML -->
    <div class="modal fade" id="supplierModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0">
          <div
            class="modal-header bg-primary text-white border-0 d-flex justify-content-end align-items-center"
          >
            <button
              type="button"
              class="btn btn-sm btn-outline-light px-3"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
          <div class="modal-body p-4">
            <div class="row g-3">
              <!-- Column 1: Contact Information -->
              <div class="col-md-6">
                <div class="supplier-detail-card h-100">
                  <h6 class="text-primary mb-3">Contact Information</h6>
                  <div class="supplier-info-item">
                    <div class="supplier-info-icon">
                      <i class="ti tabler-phone"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Phone Number</small>
                      <span id="modalContact" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="supplier-info-item">
                    <div class="supplier-info-icon">
                      <i class="ti tabler-mail"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Email Address</small>
                      <span id="modalEmail" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="supplier-info-item mb-0">
                    <div class="supplier-info-icon">
                      <i class="ti tabler-map-pin"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Supplier Address</small>
                      <span id="modalAddress" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Column 2: Product Details -->
              <div class="col-md-6">
                <div class="supplier-detail-card h-100">
                  <h6 class="text-primary mb-3">Product Details</h6>
                  <div class="supplier-info-item">
                    <div class="supplier-info-icon">
                      <i class="ti tabler-category"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block">Supplier Type</small>
                      <span id="modalType" class="fw-semibold"></span>
                    </div>
                  </div>
                  <div class="supplier-info-item mb-0">
                    <div class="supplier-info-icon">
                      <i class="ti tabler-package"></i>
                    </div>
                    <div>
                      <small class="text-muted d-block"
                        >Products/Services</small
                      >
                      <span id="modalProducts" class="fw-semibold"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Form Validation -->
    <script src="../../assets/vendor/libs/%40form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/%40form-validation/auto-focus.js"></script>
    <script>
      $(document).ready(function () {
        var table = $("#servicesTable").DataTable({
          searching: true,
          responsive: true,
          dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
          language: {
            search: "Search:",
            searchPlaceholder: "Search company name...",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "Showing 0 to 0 of 0 entries",
            infoFiltered: "(filtered from _MAX_ total entries)",
          },
          columnDefs: [
            {
              targets: [0], // Only company name column is searchable
              searchable: true,
            },
            {
              targets: [1, 2, 3], // Make other columns non-searchable
              searchable: false,
            },
          ],
          order: [[0, "asc"]], // Sort by company name by default
        });
  </body>
</html>
