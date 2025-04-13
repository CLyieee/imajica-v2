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
        background:rgb(20, 104, 195);
        color: #fff;
      }

      .btn-primary:hover {
        background:rgb(15, 95, 181);
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
        background: rgba(236, 239, 243, 0.9);
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
    <script src="https://cdn.sheetjs.com/xlsx-0.20.1/package/dist/xlsx.full.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
            <h1>Employee Report Summary</h1>
        </div>

        <div class="card">
        <div class="metrics">
            <div class="metric-card">
                <i class="ti tabler-cash mb-2" style="font-size: 24px; color: #28a745;"></i>
                <h5>Total Sales</h5>
                <h4>₱2.5M</h4>
            </div>
            <div class="metric-card">
                <i class="ti tabler-trophy mb-2" style="font-size: 24px; color: #007bff;"></i>
                <h5>Top Employee Sales</h5>
                <h4>₱450K</h4>
            </div>
            <div class="metric-card">
                <i class="ti tabler-user-star mb-2" style="font-size: 24px; color: #dc3545;"></i>
                <h5>Top Employee</h5>
                <h4>Maria Garcia</h4>
            </div>
        </div>

      </div>

        <div class="card mt-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Employee Sales</h4>
                    <div class="d-flex gap-2 align-items-end">

              <div class="d-flex flex-column" style="width: 150px;">
                <div class="input-group input-group-sm h-100">
                  <span class="input-group-text">
                    <i class="ti tabler-search"></i>
                  </span>
                  <input 
                    type="text" 
                    class="form-control form-control-sm" 
                    id="searchInput" 
                    placeholder="Search by name..."
                    style="border-radius: 0 4px 4px 0;"
                  >
                </div>
              </div>

              <div class="d-flex gap-2 align-items-end">
                <div class="d-flex flex-column" style="width: 150px;">
                  <label class="form-label mb-1 small">Date From</label>
                  <div class="input-group input-group-sm">
                    <input type="date" class="form-control form-control-sm" id="dateFrom">
                  </div>
                </div>
                <div class="d-flex flex-column" style="width: 150px;">
                  <label class="form-label mb-1 small">Date To</label>
                  <div class="input-group input-group-sm">
                    <input type="date" class="form-control form-control-sm" id="dateTo">
                  </div>
                </div>
              </div>

              <div class="d-flex flex-column" style="width: 180px;">
                <label class="form-label mb-1 small">Sort By</label>
                <div class="dropdown w-100">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle w-100 text-start d-flex justify-content-between align-items-center" 
                          type="button" 
                          id="sortByBtn" 
                          data-bs-toggle="dropdown" 
                          style="height: 31px; font-size: 0.875rem;">
                    <span class="me-2">Sort By</span>
                  </button>
                  <div class="dropdown-menu p-2" style="min-width: 180px;">
                    <select class="form-select form-select-sm" id="sortBy">
                      <option value="">Default</option>
                      <option value="totalSales">Total Sales</option>
                      <option value="serviceSales">Service Sales </option>
                      <option value="productSales">Product Sales</option>
                      <option value="clients">Number of Clients</option>
                      <option value="name">Employee Name</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-column" style="width: 150px;">
                <label class="form-label mb-1 small">Filter by Date</label>
                <div class="dropdown w-100">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle w-100 py-1" type="button" id="dateFilterBtn" data-bs-toggle="dropdown" style="height: 31px;">
                    Filter By Date
                  </button>
                  <div class="dropdown-menu p-2" style="min-width: 150px;">
                    <select class="form-select form-select-sm" id="dateFilter">
                      <option value="">All Time</option>
                      <option value="today">Today</option>
                      <option value="yesterday">Yesterday</option>
                      <option value="last7days">Last 7 Days</option>
                      <option value="last30days">Last 30 Days</option>
                      <option value="thisMonth">This Month</option>
                      <option value="lastMonth">Last Month</option>
                      <option value="thisYear">This Year</option>
                    </select>
                  </div>
                </div>
              </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="employeeReport">
                        <thead>
                            <tr style="background-color: #1e4d2b;">
                                <th class="text-white">Rank</th>
                                <th class="text-white">Employee Name</th>
                                <th class="text-white">Date</th>
                                <th class="text-white">No. of Service Sales</th>
                                <th class="text-white">No. of Product Sales</th>
                                <th class="text-white">No. of Clients</th>
                                <th class="text-white">Total Service Sales</th>
                                <th class="text-white">Total Product Sales</th>
                                <th class="text-white">Total Sales</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Maria Garcia</td>
                                <td>2023-11-15</td>
                                <td>45</td>
                                <td>78</td>
                                <td>120</td>
                                <td>₱250,000</td>
                                <td>₱200,000</td>
                                <td>₱450,000</td>
                                <td>
                                <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>John Davis</td>
                                <td>2023-11-14</td>
                                <td>42</td>
                                <td>65</td>
                                <td>105</td>
                                <td>₱220,000</td>
                                <td>₱180,000</td>
                                <td>₱400,000</td>
                                <td>
                                <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sarah Wilson</td>
                                <td>2023-11-13</td>
                                <td>38</td>
                                <td>58</td>
                                <td>95</td>
                                <td>₱200,000</td>
                                <td>₱150,000</td>
                                <td>₱350,000</td>
                                <td>
                                <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Michael Chen</td>
                                <td>2023-11-12</td>
                                <td>35</td>
                                <td>52</td>
                                <td>88</td>
                                <td>₱180,000</td>
                                <td>₱140,000</td>
                                <td>₱320,000</td>
                                <td>
                                    <button class="btn btn-sm" onclick="downloadRow(this, 'excel')" style="background-color: #134013; color: white;">
                                        <i class="ti tabler-download me-1"></i>Export
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Emily Brown</td>
                                <td>2023-11-11</td>
                                <td>32</td>
                                <td>48</td>
                                <td>82</td>
                                <td>₱170,000</td>
                                <td>₱130,000</td>
                                <td>₱300,000</td>
                                <td>
                                    <button class="btn btn-sm" onclick="downloadRow(this, 'excel')" style="background-color: #134013; color: white;">
                                        <i class="ti tabler-download me-1"></i>Export
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>David Lee</td>
                                <td>2023-11-10</td>
                                <td>30</td>
                                <td>45</td>
                                <td>76</td>
                                <td>₱160,000</td>
                                <td>₱120,000</td>
                                <td>₱280,000</td>
                                <td>
                                    <button class="btn btn-sm" onclick="downloadRow(this, 'excel')" style="background-color: #134013; color: white;">
                                        <i class="ti tabler-download me-1"></i>Export
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Sofia Rodriguez</td>
                                <td>2023-11-09</td>
                                <td>28</td>
                                <td>42</td>
                                <td>72</td>
                                <td>₱150,000</td>
                                <td>₱110,000</td>
                                <td>₱260,000</td>
                                <td>
                                    <button class="btn btn-sm" onclick="downloadRow(this, 'excel')" style="background-color: #134013; color: white;">
                                        <i class="ti tabler-download me-1"></i>Export
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

<div class="modal fade" id="employeeViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content shadow-lg rounded-3">
      <div class="modal-header" style="background-color: #1e4d2b;">
        <h5 class="modal-title fw-bold">Employee Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-4">
          <!-- Employee Info Card -->
          <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm border-0 rounded-lg">
              <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-semibold">Employee Information</h6>
                <span class="badge bg-secondary">ID: #EMP12345</span>
              </div>
              <div class="card-body p-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Full Name:</strong> <span class="text-muted" id="employeeName">Maria Garcia</span></li>
                  <li class="list-group-item"><strong>Position:</strong> <span class="text-muted" id="employeePosition">Senior Hairstylist</span></li>
                  <li class="list-group-item"><strong>Email:</strong> <span class="text-muted" id="employeeEmail">maria.garcia@imajica.com</span></li>
                  <li class="list-group-item"><strong>Phone:</strong> <span class="text-muted" id="employeePhone">+63 912 345 6789</span></li>
                  <li class="list-group-item"><strong>Employed Since:</strong> <span class="text-muted">January 15, 2022</span></li>
                  <li class="list-group-item"><strong>Total Sales:</strong> <span class="text-muted">₱450,000</span></li>
                  <li class="list-group-item d-flex align-items-center">
                    <strong>Rating:</strong>
                    <div class="ms-2 text-warning">
                      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                      <span class="text-muted ms-1">(4.5)</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Recent Transactions -->
          <div class="col-md-6 col-lg-8">
            <div class="card shadow-sm border-0 rounded-lg">
              <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-semibold">Recent Sales</h6>
                <div class="btn-group">
                  <button class="btn btn-sm btn-outline-primary"><i class="fas fa-filter"></i> Filter</button>
                  <button class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i> Export</button>
                </div>
              </div>
              <div class="card-body p-3">
                <div class="table-responsive">
                  <table class="table align-middle">
                    <thead class="table-light">
                      <tr>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Service Type</th>
                        <th>Client</th>
                        <th>Status</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#TRX001</td>
                        <td>2023-11-15</td>
                        <td>Hair Coloring</td>
                        <td>Sarah Johnson</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>₱5,500</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortBy = document.getElementById('sortBy');
    const dateFilter = document.getElementById('dateFilter');
    const sortByBtn = document.getElementById('sortByBtn');
    const dateFilterBtn = document.getElementById('dateFilterBtn');
    
    // Initialize dropdowns
    const sortByDropdown = new bootstrap.Dropdown(sortByBtn);
    const dateFilterDropdown = new bootstrap.Dropdown(dateFilterBtn);

    // Handle sort dropdown changes
    sortBy.addEventListener('change', function() {
        const selectedText = this.options[this.selectedIndex].text;
        sortByBtn.innerHTML = `${selectedText} <i class="ti tabler-chevron-down ms-1"></i>`;
        applySort();
        sortByDropdown.hide();
    });

    function applySort() {
        const selectedSort = sortBy.value;
        const tbody = document.querySelector('#employeeReport tbody');
        const rows = Array.from(tbody.getElementsByTagName('tr'));

        if (!selectedSort) {
            // Reset to original order if no sort selected
            updateTableContent(rows);
            return;
        }

        rows.sort((a, b) => {
            let aValue, bValue;

            switch(selectedSort) {
                case 'totalSales':
                    aValue = parseCurrency(a.cells[8].textContent);
                    bValue = parseCurrency(b.cells[8].textContent);
                    return bValue - aValue;
                case 'serviceSales': 
                    aValue = parseCurrency(a.cells[6].textContent);
                    bValue = parseCurrency(b.cells[6].textContent);
                    return bValue - aValue;
                case 'productSales':
                    aValue = parseCurrency(a.cells[7].textContent);
                    bValue = parseCurrency(b.cells[7].textContent);
                    return bValue - aValue;
                case 'clients':
                    aValue = parseInt(a.cells[5].textContent);
                    bValue = parseInt(b.cells[5].textContent);
                    return bValue - aValue;
                case 'name':
                    aValue = a.cells[1].textContent.toLowerCase();
                    bValue = b.cells[1].textContent.toLowerCase();
                    return aValue.localeCompare(bValue);
                default:
                    return 0;
            }
        });

        // Update table content with sorted rows
        updateTableContent(rows);

        // Update metrics after sorting
        updateMetrics(rows);

        // Update dropdown button text with sort information
        const selectedText = sortBy.options[sortBy.selectedIndex].text;
        sortByBtn.innerHTML = `${selectedText} <i class="ti tabler-chevron-down ms-1"></i>`;
    }

    function parseCurrency(value) {
        return parseFloat(value.replace(/[₱,]/g, '')) || 0;
    }

    function updateMetrics(rows) {
        let totalSales = 0;
        let topEmployeeSales = 0;
        let topEmployee = '';

        rows.forEach(row => {
            if (row.style.display !== 'none') {
                const sales = parseCurrency(row.cells[8].textContent);
                totalSales += sales;
                if (sales > topEmployeeSales) {
                    topEmployeeSales = sales;
                    topEmployee = row.cells[1].textContent;
                }
            }
        });

        // Update the metrics display
        document.querySelector('.metric-card:nth-child(1) h4').textContent = 
            '₱' + totalSales.toLocaleString(undefined, {maximumFractionDigits: 0});
        document.querySelector('.metric-card:nth-child(2) h4').textContent = 
            '₱' + topEmployeeSales.toLocaleString(undefined, {maximumFractionDigits: 0});
        document.querySelector('.metric-card:nth-child(3) h4').textContent = topEmployee;
    }

    // Modify existing updateTable function
    function updateTable() {
        const rows = Array.from(document.querySelectorAll('#employeeReport tbody tr'));
        const selectedFilter = dateFilter.value;
        
        if (!selectedFilter) {
            // Reset to show all rows if no filter selected
            rows.forEach(row => row.style.display = '');
            updateRanks(rows);
            updateMetrics(rows);
            return;
        }

        const today = new Date();
        today.setHours(0, 0, 0, 0);

        rows.forEach(row => {
            const dateCell = row.cells[2];
            const rowDate = new Date(dateCell.textContent);
            rowDate.setHours(0, 0, 0, 0);
            let showRow = false;

            switch(selectedFilter) {
                case 'today':
                    showRow = rowDate.getTime() === today.getTime();
                    break;
                case 'yesterday':
                    const yesterday = new Date(today);
                    yesterday.setDate(yesterday.getDate() - 1);
                    showRow = rowDate.getTime() === yesterday.getTime();
                    break;
                case 'last7days':
                    const last7Days = new Date(today);
                    last7Days.setDate(last7Days.getDate() - 7);
                    showRow = rowDate >= last7Days;
                    break;
                case 'last30days':
                    const last30Days = new Date(today);
                    last30Days.setDate(last30Days.getDate() - 30);
                    showRow = rowDate >= last30Days;
                    break;
                case 'thisMonth':
                    showRow = rowDate.getMonth() === today.getMonth() && 
                             rowDate.getFullYear() === today.getFullYear();
                    break;
                case 'lastMonth':
                    const lastMonth = new Date(today);
                    lastMonth.setMonth(lastMonth.getMonth() - 1);
                    showRow = rowDate.getMonth() === lastMonth.getMonth() && 
                             rowDate.getFullYear() === lastMonth.getFullYear();
                    break;
                case 'thisYear':
                    showRow = rowDate.getFullYear() === today.getFullYear();
                    break;
                default:
                    showRow = true;
            }

            row.style.display = showRow ? '' : 'none';
        });

        // Update ranks and metrics for visible rows
        const visibleRows = rows.filter(row => row.style.display !== 'none');
        updateRanks(visibleRows);
        updateMetrics(visibleRows);

        // Update the filter button text with count
        const selectedText = dateFilter.options[dateFilter.selectedIndex].text;
        dateFilterBtn.innerHTML = `${selectedText} (${visibleRows.length})`;
    }

    function updateRanks(rows) {
        rows.forEach((row, index) => {
            if (row.style.display !== 'none') {
                row.cells[0].textContent = index + 1;
            }
        });
    }

    function filterRowsByDate(rows, filter) {
        if (!filter) return rows;

        const today = new Date();
        today.setHours(0, 0, 0, 0);

        const filteredRows = rows.filter(row => {
            const dateCell = row.cells[2];
            const rowDate = new Date(dateCell.textContent);
            rowDate.setHours(0, 0, 0, 0);

            switch(filter) {
                case 'today':
                    return rowDate.getTime() === today.getTime();
                case 'yesterday':
                    const yesterday = new Date(today);
                    yesterday.setDate(yesterday.getDate() - 1);
                    return rowDate.getTime() === yesterday.getTime();
                case 'last7days':
                    const last7Days = new Date(today);
                    last7Days.setDate(last7Days.getDate() - 7);
                    return rowDate >= last7Days;
                case 'last30days':
                    const last30Days = new Date(today);
                    last30Days.setDate(last30Days.getDate() - 30);
                    return rowDate >= last30Days;
                case 'thisMonth':
                    return rowDate.getMonth() === today.getMonth() && 
                           rowDate.getFullYear() === today.getFullYear();
                case 'lastMonth':
                    const lastMonth = new Date(today);
                    lastMonth.setMonth(lastMonth.getMonth() - 1);
                    return rowDate.getMonth() === lastMonth.getMonth() && 
                           rowDate.getFullYear() === lastMonth.getFullYear();
                case 'thisYear':
                    return rowDate.getFullYear() === today.getFullYear();
                default:
                    return true;
            }
        });

        // Update the Filter By button text with the count of filtered rows
        const filterText = dateFilter.options[dateFilter.selectedIndex].text;
        dateFilterBtn.innerHTML = `${filterText} (${filteredRows.length})`;
        
        return filteredRows;
    }

    function updateTableContent(rows) {
        const tbody = document.querySelector('#employeeReport tbody');
        tbody.innerHTML = '';
        
        if (rows.length === 0) {
            // Show "No results found" message
            const noDataRow = document.createElement('tr');
            noDataRow.innerHTML = '<td colspan="10" class="text-center">No results found</td>';
            tbody.appendChild(noDataRow);
        } else {
            // Update table with filtered rows
            rows.forEach((row, index) => {
                row.cells[0].textContent = index + 1; // Update rank
                tbody.appendChild(row);
            });
        }
    }

    // Prevent dropdown menus from closing when selecting options
    document.querySelectorAll('.dropdown-menu').forEach(dropdown => {
        dropdown.addEventListener('click', e => e.stopPropagation());
    });

    // Initialize the table
    updateTable();
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];

    searchInput.addEventListener('input', function() {
        const searchText = this.value.toLowerCase();
        const rows = tbody.getElementsByTagName('tr');

        Array.from(rows).forEach(row => {
            const employeeName = row.cells[1].textContent.toLowerCase();
            row.style.display = employeeName.includes(searchText) ? '' : 'none';
        });

        let rank = 1;
        Array.from(rows).forEach(row => {
            if (row.style.display !== 'none') {
                row.cells[0].textContent = rank++;
            }
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateFrom = document.getElementById('dateFrom');
    const dateTo = document.getElementById('dateTo');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];

    function filterByDateRange() {
        const fromDate = dateFrom.value ? new Date(dateFrom.value) : null;
        const toDate = dateTo.value ? new Date(dateTo.value) : null;
        const rows = tbody.getElementsByTagName('tr');

        Array.from(rows).forEach(row => {
            const dateCell = row.cells[2];
            const rowDate = new Date(dateCell.textContent);
            
            let showRow = true;
            
            if (fromDate && toDate) {
                rowDate.setHours(0,0,0,0);
                fromDate.setHours(0,0,0,0);
                toDate.setHours(0,0,0,0);
                
                showRow = rowDate >= fromDate && rowDate <= toDate;
            } else if (fromDate) {
                showRow = rowDate >= fromDate;
            } else if (toDate) {
                showRow = rowDate <= toDate;
            }

            row.style.display = showRow ? '' : 'none';
        });

        let rank = 1;
        Array.from(rows).forEach(row => {
            if (row.style.display !== 'none') {
                row.cells[0].textContent = rank++;
            }
        });
    }

    dateFrom.addEventListener('change', filterByDateRange);
    dateTo.addEventListener('change', filterByDateRange);

    dateTo.addEventListener('change', function() {
        if (dateFrom.value && this.value < dateFrom.value) {
            alert('End date cannot be earlier than start date');
            this.value = dateFrom.value;
        }
    });

    dateFrom.addEventListener('change', function() {
        if (dateTo.value && this.value > dateTo.value) {
            alert('Start date cannot be later than end date');
            this.value = dateTo.value;
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateFilter = document.getElementById('dateFilter');
    const dateFilterBtn = document.getElementById('dateFilterBtn');
    const dateFilterDropdown = new bootstrap.Dropdown(dateFilterBtn);

    // Update date filter button text when selection changes
    dateFilter.addEventListener('change', function() {
        const selectedText = this.options[this.selectedIndex].text;
        dateFilterBtn.textContent = selectedText;
        updateTable(); // This calls the existing updateTable function
        
        // Close dropdown after selection
        setTimeout(() => {
            dateFilterDropdown.hide();
        }, 100);
    });

    // Update the selected text for both dropdowns initially
    sortBy.addEventListener('change', function() {
        const selectedText = this.options[this.selectedIndex].text;
        sortByBtn.innerHTML = selectedText;
    });

    dateFilter.addEventListener('change', function() {
        const selectedText = this.options[this.selectedIndex].text;
        dateFilterBtn.innerHTML = selectedText;
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateFilter = document.getElementById('dateFilter');
    const dateFilterBtn = document.getElementById('dateFilterBtn');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];

    dateFilter.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const selectedText = selectedOption.text;
        const selectedValue = this.value;
        
        dateFilterBtn.textContent = selectedText;
        
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        const rows = Array.from(tbody.getElementsByTagName('tr'));
        
        rows.forEach(row => {
            const dateCell = row.cells[2]; // Get the date cell
            const rowDate = new Date(dateCell.textContent);
            rowDate.setHours(0, 0, 0, 0);
            
            let showRow = true;
            
            switch(selectedValue) {
                case 'today':
                    showRow = rowDate.getTime() === today.getTime();
                    if (showRow) dateCell.textContent = 'Today';
                    break;
                case 'yesterday':
                    const yesterday = new Date(today);
                    yesterday.setDate(yesterday.getDate() - 1);
                    showRow = rowDate.getTime() === yesterday.getTime();
                    if (showRow) dateCell.textContent = 'Yesterday';
                    break;
                case 'last7days':
                    const last7Days = new Date(today);
                    last7Days.setDate(last7Days.getDate() - 7);
                    showRow = rowDate >= last7Days;
                    if (showRow) dateCell.textContent = 'Last 7 Days';
                    break;
                case 'last30days':
                    const last30Days = new Date(today);
                    last30Days.setDate(last30Days.getDate() - 30);
                    showRow = rowDate >= last30Days;
                    if (showRow) dateCell.textContent = 'Last 30 Days';
                    break;
                case 'thisMonth':
                    showRow = rowDate.getMonth() === today.getMonth() && 
                             rowDate.getFullYear() === today.getFullYear();
                    if (showRow) dateCell.textContent = 'This Month';
                    break;
                case 'lastMonth':
                    const lastMonth = new Date(today);
                    lastMonth.setMonth(lastMonth.getMonth() - 1);
                    showRow = rowDate.getMonth() === lastMonth.getMonth() && 
                             rowDate.getFullYear() === lastMonth.getFullYear();
                    if (showRow) dateCell.textContent = 'Last Month';
                    break;
                case 'thisYear':
                    showRow = rowDate.getFullYear() === today.getFullYear();
                    if (showRow) dateCell.textContent = 'This Year';
                    break;
                default:
                    // Reset to original date format
                    dateCell.textContent = rowDate.toISOString().split('T')[0];
                    showRow = true;
            }
            
            row.style.display = showRow ? '' : 'none';
        });

        // Update ranks for visible rows
        let rank = 1;
        rows.forEach(row => {
            if (row.style.display !== 'none') {
                row.cells[0].textContent = rank++;
            }
        });

        // Update metrics
        updateMetrics(rows.filter(row => row.style.display !== 'none'));
    });
});
</script>

<script>
function downloadRow(button, format) {
    // Get the parent row
    const row = button.closest('tr');
    
    // Create data object from row
    const data = {
        Rank: row.cells[0].textContent,
        'Employee Name': row.cells[1].textContent,
        Date: row.cells[2].textContent,
        'Service Sales Count': row.cells[3].textContent,
        'Product Sales Count': row.cells[4].textContent,
        'Client Count': row.cells[5].textContent,
        'Total Service Sales': row.cells[6].textContent,
        'Total Product Sales': row.cells[7].textContent,
        'Total Sales': row.cells[8].textContent
    };

    // Create worksheet
    const ws = XLSX.utils.json_to_sheet([data]);

    // Create workbook
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Employee Report");

    // Generate filename
    const fileName = `employee_report_${data['Employee Name'].replace(/\s+/g, '_')}_${new Date().toISOString().split('T')[0]}.xlsx`;

    // Save the file
    XLSX.writeFile(wb, fileName);
}
</script>
</body>
</html>
