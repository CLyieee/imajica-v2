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
    <title>Sales Report Summary - Imajica</title>
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

    <!-- End Google Tag Manager -->

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
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/chartjs/chartjs.css"
    />

    <!-- Vendors CSS -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    />

    <!-- endbuild -->

    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/apex-charts/apex-charts.css"
    />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"
    />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Page CSS -->
    <link
      rel="stylesheet"
      href="../../assets/vendor/css/pages/cards-advance.css"
    />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../../assets/js/config.js"></script>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #eef2f3, #d0d0d2);
        color: #333;
        padding: 0;
        display: flex;
        min-height: 100vh;
      }

      .container {
        max-width: 1200px;
        margin: auto;
        flex: 1;
        padding: 2rem;
        background: linear-gradient(135deg, #eef2f3, #f5f5f5);
        margin-left: auto;
        margin-right: auto;
        margin-top: 15px;
        width: 100%;
      }

      .container-p-y {
        display: flex;
        justify-content: center;
        width: 100%;
        padding: 0 20px;
        margin-left: 280px;
      }

      @media (max-width: 1199px) {
        .container-p-y {
          margin-left: 0;
        }
      }

      .card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        max-width: 100%;
        width: 100%;
        margin: 0 auto;
      }

      /* Removed .card:hover transform effect */

      .header {
        text-align: center;
        margin-bottom: 30px;
      }

      .header h1 {
        font-weight: 600;
      }

      .btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease-in-out;
      }

      .btn-primary {
        background: #007bff;
        color: #fff;
      }

      .btn-primary:hover {
        background: #0056b3;
      }

      .metrics {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
      }

      .metric-card {
        text-align: center;
        padding: 15px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
        min-width: 200px;
        max-width: 300px;
        flex: 1;
      }

      .metric-card i {
        font-size: 24px;
        margin-bottom: 1rem;
      }

      .metric-card h5 {
        margin-bottom: 1.5rem;
        color: #2b2c2d;
      }

      .metric-card h4 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
      }

      #layout-menu {
        width: 280px;
        background: white;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        padding: 1rem;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
      }

      .menu-mobile-toggler {
        display: none;
        position: fixed;
        top: 1rem;
        left: 1rem;
        z-index: 1000;
      }

      /* Mobile responsiveness */
      @media (max-width: 1199px) {
        #layout-menu {
          transform: translateX(-100%);
          transition: transform 0.3s ease;
          z-index: 999;
        }

        #layout-menu.show {
          transform: translateX(0);
        }

        .container {
          margin-left: 0;
          padding-top: 4rem;
        }

        .menu-mobile-toggler {
          display: block;
        }
      }
    </style>
    <!-- Add these libraries in the head section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.29/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
  </head>

  <body>
    @include('components.sidebar')
    <div class="menu-mobile-toggler d-xl-none rounded-1 layout-wrapper">
      <a
        href="javascript:void(0);"
        class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1"
      >
        <i class="ti tabler-menu icon-base"></i>
        <i class="ti tabler-chevron-right icon-base"></i>
      </a>
    </div>
<div class="container-p-y">
    <div class="container rounded">
      <div class="header">
        <h1>Expenses Report Summary</h1>
      </div>

      <div class="metrics">
        <div class="metric-card">
          <i class="ti tabler-receipt mb-2" style="font-size: 24px; color: #dc3545;"></i>
          <h5>Total Expenses</h5>
          <h4>₱85,430.00</h4>
        </div>
        <div class="metric-card">
          <i class="ti tabler-chart-pie mb-2" style="font-size: 24px; color: #fd7e14;"></i>
          <h5>Highest Category</h5>
          <h4>Utilities</h4>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="m-0">Expense Transactions</h3>
            <div class="d-flex gap-2">
              <div class="form-group" style="width: 150px;">
                <div style="height: 21px;"><!-- Spacer to match label height --></div>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="ti tabler-search"></i>
                  </span>
                  <input 
                    type="text" 
                    class="form-control form-control-sm" 
                    id="searchInput" 
                    placeholder="Search..."
                    style="border-radius: 0; padding-right: 30px;"
                  >
                  <button 
                    type="button"
                    class="btn-close clear-search"
                    id="clearSearch"
                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); 
                           z-index: 5; display: none; background-size: 8px; cursor: pointer;
                           border: none; background-color: transparent; padding: 0.75rem;"
                    aria-label="Clear search"
                  ></button>
                </div>
              </div>
              <div class="d-flex gap-2">
                <div class="form-group" style="width: 150px;">
                  <label class="form-label small text-muted mb-1">Date From</label>
                  <input type="date" id="dateFrom" class="form-control form-control-sm" onchange="filterByDateRange()">
                </div>
                <div class="form-group" style="width: 150px;">
                  <label class="form-label small text-muted mb-1">Date To</label>
                  <input type="date" id="dateTo" class="form-control form-control-sm" onchange="filterByDateRange()">
                </div>
              </div>
              <div class="form-group" style="width: 150px;">
                <label class="form-label small text-muted mb-1">Filter By Date</label>
                <select class="form-select form-select-sm" id="dateFilter" onchange="applyDateFilter()">
                  <option value="">Select Date Range</option>
                  <option value="today">Today</option>
                  <option value="yesterday">Yesterday</option>
                  <option value="last7">Last 7 Days</option>
                  <option value="last30">Last 30 Days</option>
                  <option value="thisMonth">This Month</option>
                  <option value="lastMonth">Last Month</option>
                  <option value="thisYear">This Year</option>
                </select>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr style="background-color: #1e4d2b;">
                  <th style="color: white; font-weight: 500;">Date</th>
                  <th style="color: white; font-weight: 500;">Receipt/Invoice No.</th>
                  <th style="color: white; font-weight: 500;">Expense Name</th>
                  <th style="color: white; font-weight: 500;">Expense Category</th>
                  <th style="color: white; font-weight: 500;">Payment Status</th>
                  <th style="color: white; font-weight: 500;">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2024-01-15</td>
                  <td>INV-2024-001</td>
                  <td>Electricity Bill Payment</td>
                  <td>Utilities</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-14</td>
                  <td>INV-2024-002</td>
                  <td>Office Supplies Purchase</td>
                  <td>Supplies</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-13</td>
                  <td>INV-2024-003</td>
                  <td>Equipment Maintenance</td>
                  <td>Maintenance</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-12</td>
                  <td>INV-2024-004</td>
                  <td>Marketing Campaign</td>
                  <td>Marketing</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-11</td>
                  <td>INV-2024-005</td>
                  <td>Monthly Payroll</td>
                  <td>Payroll</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-10</td>
                  <td>INV-2024-006</td>
                  <td>Internet Service</td>
                  <td>Utilities</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-09</td>
                  <td>INV-2024-007</td>
                  <td>Office Rent</td>
                  <td>Rent</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-08</td>
                  <td>INV-2024-008</td>
                  <td>Software Licenses</td>
                  <td>IT Services</td>
                  <td><span class="badge bg-label-warning">Pending</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-07</td>
                  <td>INV-2024-009</td>
                  <td>Water Bill</td>
                  <td>Utilities</td>
                  <td><span class="badge bg-label-success">Paid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2024-01-06</td>
                  <td>INV-2024-010</td>
                  <td>Equipment Purchase</td>
                  <td>Assets</td>
                  <td><span class="badge bg-label-danger">Unpaid</span></td>
                  <td>
                    <button class="btn btn-sm" style="background-color: #1e4d2b; color: white;" onclick="downloadRowAsExcel(this)">
                    <i class="ti tabler-download me-1"></i><span class="fw-bold">Export</span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>      
</div>

<!-- Expense Details Modal -->
<div class="modal fade" id="expenseModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content shadow-lg rounded-3">
      <div class="modal-header text-white" style="background-color: #1e4d2b;">
        <h5 class="modal-title text-white">Expense Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4">
          <!-- Expense Info Card -->
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-header bg-light d-flex align-items-center justify-content-between">
                <h6 class="card-title mb-0">Basic Information</h6>
                <small class="text-muted">Invoice: #INV-2024-001</small>
              </div>
              <div class="card-body d-flex flex-column gap-4 pt-4">
                <div><strong>Expense Name:</strong> Electricity Bill Payment</div>
                <div><strong>Category:</strong> Utilities</div>
                <div><strong>Amount:</strong> <span class="text-success">₱12,450.00</span></div>
                <div><strong>Date:</strong> January 15, 2024</div>
                <div><strong>Payment Status:</strong> <span class="badge bg-success">Paid</span></div>
              </div>
            </div>
          </div>

          <!-- Payment Details -->
          <div class="col-md-6 col-lg-8">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-header bg-light">
                <h6 class="card-title mb-0">Payment Details</h6>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <tbody>
                    <tr><td><strong>Payment Method:</strong></td><td>Bank Transfer</td></tr>
                    <tr><td><strong>Transaction ID:</strong></td><td>TXN-987654321</td></tr>
                    <tr><td><strong>Payment Date:</strong></td><td>January 15, 2024</td></tr>
                    <tr><td><strong>Processed By:</strong></td><td>John Smith</td></tr>
                    <tr><td><strong>Notes:</strong></td><td>Monthly electricity consumption for main office</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Monthly Comparison -->
          <div class="col-md-6">
            <div class="card border-0 shadow-sm">
              <div class="card-header bg-light">
                <h6 class="card-title mb-0">Monthly Comparison</h6>
              </div>
              <div class="card-body">
                <canvas id="expenseChart" height="300"></canvas>
              </div>
            </div>
          </div>

          <!-- Attached Documents -->
          <div class="col-md-6">
            <div class="card border-0 shadow-sm">
              <div class="card-header bg-light">
                <h6 class="card-title mb-0">Attached Documents</h6>
              </div>
              <div class="card-body d-flex flex-column gap-4 pt-4">
                <div class="d-flex align-items-center p-3 border rounded bg-light mt-2">
                  <i class="ti ti-file-invoice text-primary" style="font-size: 24px;"></i>
                  <div class="ms-2">
                    <h6 class="mb-0">Invoice_2024001.pdf</h6>
                    <small class="text-muted">PDF, 2.3 MB</small>
                  </div>
                  <a href="{{ asset('storage/documents/Invoice_2024001.pdf') }}" 
                     class="btn btn-sm btn-outline-primary ms-auto"
                     download="Invoice_2024001.pdf">
                    <i class="ti ti-download"></i>
                  </a>
                </div>
                <div class="d-flex align-items-center p-3 border rounded bg-light">
                  <i class="ti ti-file-text text-success" style="font-size: 24px;"></i>
                  <div class="ms-2">
                    <h6 class="mb-0">Receipt_2024001.pdf</h6>
                    <small class="text-muted">PDF, 1.1 MB</small>
                  </div>
                  <a href="{{ asset('storage/documents/Receipt_2024001.pdf') }}" 
                     class="btn btn-sm btn-outline-primary ms-auto"
                     download="Receipt_2024001.pdf">
                    <i class="ti ti-download"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light" style="padding: 1rem 1.5rem;">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
      document
        .querySelector(".menu-mobile-toggler")
        .addEventListener("click", function () {
          document.querySelector("#layout-menu").classList.toggle("show");
        });

      // Search functionality
      const searchInput = document.getElementById('searchInput');
      const clearButton = document.getElementById('clearSearch');

      searchInput.addEventListener('input', function() {
        let searchValue = this.value.toLowerCase();
        filterTable(searchValue, null);
        clearButton.style.display = searchValue ? 'block' : 'none';
      });

      clearButton.addEventListener('click', function() {
        searchInput.value = '';
        filterTable('', null);
        this.style.display = 'none';
        searchInput.focus(); // Return focus to search input
      });

      function filterTable(searchValue, dateRange) {
        let tableRows = document.querySelectorAll('tbody tr');
        
        tableRows.forEach(row => {
          let showRow = true;
          
          // Text search filter
          if (searchValue) {
            let name = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            let category = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
            if (!name.includes(searchValue) && !category.includes(searchValue)) {
              showRow = false;
            }
          }
          
          // Date filter
          if (dateRange && showRow) {
            let dateCell = row.querySelector('td:nth-child(1)').textContent;
            let rowDate = new Date(dateCell);
            if (rowDate < dateRange.start || rowDate > dateRange.end) {
              showRow = false;
            }
          }
          
          row.style.display = showRow ? '' : 'none';
        });
      }

      function applyDateFilter() {
        // Clear date range inputs when using predefined filters
        document.getElementById('dateFrom').value = '';
        document.getElementById('dateTo').value = '';

        const filterValue = document.getElementById('dateFilter').value;
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        let startDate = null;
        let endDate = null;
        
        switch(filterValue) {
          case 'today':
            startDate = today;
            endDate = new Date(today);
            break;
          case 'yesterday':
            startDate = new Date(today);
            startDate.setDate(today.getDate() - 1);
            endDate = new Date(startDate);
            break;
          case 'last7':
            startDate = new Date(today);
            startDate.setDate(today.getDate() - 6);
            endDate = new Date(today);
            break;
          case 'last30':
            startDate = new Date(today);
            startDate.setDate(today.getDate() - 29);
            endDate = new Date(today);
            break;
          case 'thisMonth':
            startDate = new Date(today.getFullYear(), today.getMonth(), 1);
            endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);
            break;
          case 'lastMonth':
            startDate = new Date(today.getFullYear(), today.getMonth() - 1, 1);
            endDate = new Date(today.getFullYear(), today.getMonth(), 0);
            break;
          case 'thisYear':
            startDate = new Date(today.getFullYear(), 0, 1);
            endDate = new Date(today.getFullYear(), 11, 31);
            break;
          default:
            // Show all rows if no filter is selected
            document.querySelectorAll('tbody tr').forEach(row => {
              row.style.display = '';
            });
            return;
        }
        
        // Set end date to end of day
        if (endDate) {
          endDate.setHours(23, 59, 59, 999);
        }

        document.querySelectorAll('tbody tr').forEach(row => {
          const dateCell = row.querySelector('td:nth-child(1)').textContent;
          const rowDate = new Date(dateCell);
          rowDate.setHours(0, 0, 0, 0); // Normalize row date to start of day
          
          if (startDate && endDate) {
            row.style.display = (rowDate >= startDate && rowDate <= endDate) ? '' : 'none';
          }
        });
      }

      function filterByDateRange() {
        const dateFrom = document.getElementById('dateFrom').value;
        const dateTo = document.getElementById('dateTo').value;
        const tableRows = document.querySelectorAll('tbody tr');
        
        tableRows.forEach(row => {
            const dateCell = row.querySelector('td:nth-child(1)').textContent;
            const rowDate = new Date(dateCell);
            let showRow = true;
            
            if (dateFrom && dateTo) {
                const fromDate = new Date(dateFrom);
                const toDate = new Date(dateTo);
                // Set toDate to end of day for inclusive comparison
                toDate.setHours(23, 59, 59, 999);
                
                showRow = rowDate >= fromDate && rowDate <= toDate;
            } else if (dateFrom) {
                const fromDate = new Date(dateFrom);
                showRow = rowDate >= fromDate;
            } else if (dateTo) {
                const toDate = new Date(dateTo);
                toDate.setHours(23, 59, 59, 999);
                showRow = rowDate <= toDate;
            }
            
            row.style.display = showRow ? '' : 'none';
        });
        
        // Clear the date filter dropdown when using date range
        document.getElementById('dateFilter').value = '';
      }

// Add event listeners to view buttons
document.querySelectorAll('.btn-success').forEach(button => {
  button.addEventListener('click', () => {
    const modal = new bootstrap.Modal(document.getElementById('expenseModal'));
    modal.show();
  });
});

// Initialize chart when modal is shown
document.getElementById('expenseModal').addEventListener('shown.bs.modal', function () {
  const ctx = document.getElementById('expenseChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
      datasets: [{
        label: 'Monthly Expenses (₱)',
        data: [11200, 10800, 11500, 12100, 11900, 12450],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: "rgba(75, 192, 192, 1)",
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    }
  });
});

// Add this new code after the existing scripts
document.querySelectorAll('[data-export]').forEach(button => {
    button.addEventListener('click', function() {
        const exportType = this.getAttribute('data-export');
        const tableData = getTableData();
        
        switch(exportType) {
            case 'pdf':
                exportToPDF(tableData);
                break;
            case 'excel':
                exportToExcel(tableData);
                break;
            case 'csv':
                exportToCSV(tableData);
                break;
        }
    });
});

function getTableData() {
    const table = document.querySelector('.table');
    const headers = [...table.querySelectorAll('thead th')]
        .map(header => header.textContent.trim());
    
    const rows = [...table.querySelectorAll('tbody tr')]
        .map(row => [...row.querySelectorAll('td')]
            .map(cell => cell.textContent.trim()));
    
    return { headers, rows };
}

function exportToPDF(data) {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    
    doc.text('Expenses Report', 14, 15);
    doc.autoTable({
        head: [data.headers],
        body: data.rows,
        startY: 20,
        theme: 'grid',
        styles: { fontSize: 8 },
        headStyles: { fillColor: [30, 77, 43] }
    });
    
    doc.save('expenses-report.pdf');
}

function exportToExcel(data) {
    const worksheet = XLSX.utils.aoa_to_sheet([
        data.headers,
        ...data.rows
    ]);
    
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Expenses');
    
    XLSX.writeFile(workbook, 'expenses-report.xlsx');
}

function exportToCSV(data) {
    const csvContent = [
        data.headers.join(','),
        ...data.rows.map(row => row.join(','))
    ].join('\n');
    
    const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    const url = URL.createObjectURL(blob);
    
    link.setAttribute('href', url);
    link.setAttribute('download', 'expenses-report.csv');
    link.style.visibility = 'hidden';
    
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function downloadRowAsExcel(button) {
    // Get the row data
    const row = button.closest('tr');
    const cells = row.querySelectorAll('td');
    const rowData = Array.from(cells).slice(0, -1).map(cell => {
        // For cells with badge spans, get the text content
        const badge = cell.querySelector('.badge');
        return badge ? badge.textContent : cell.textContent;
    });
    
    // Get invoice number for the filename
    const invoiceNo = rowData[1];
    
    // Create headers array
    const headers = ['Date', 'Receipt/Invoice No.', 'Expense Name', 'Expense Category', 'Payment Status'];
    
    // Create workbook and worksheet
    const wb = XLSX.utils.book_new();
    const ws = XLSX.utils.aoa_to_sheet([headers, rowData]);
    
    // Add worksheet to workbook
    XLSX.utils.book_append_sheet(wb, ws, 'Expense Details');
    
    // Save the file
    XLSX.writeFile(wb, `Expense_${invoiceNo}.xlsx`);
}
</script>

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

  <!-- Footer -->
 
  <!-- / Footer -->

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
  <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

  <!-- Main JS -->

  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/vendor/libs/chartjs/chartjs.js"></script>
  <script src="../../assets/js/charts-chartjs-legend.js"></script>
  <script src="../../assets/js/charts-chartjs.js"></script>
  
</body>


</html>
