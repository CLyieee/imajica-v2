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
                    <h3 class="mb-0">Employee Sales</h3>
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

              <div class="d-flex flex-column" style="width: 150px;">
                <label class="form-label mb-1 small">Sort By</label>
                <div class="dropdown w-100">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle w-100 py-1" type="button" id="sortByBtn" data-bs-toggle="dropdown" style="height: 31px;">
                    Sort By: Default
                  </button>
                  <div class="dropdown-menu p-2" style="min-width: 150px;">
                    <select class="form-select form-select-sm" id="sortBy">
                      <option value="">Default</option>
                      <option value="totalSales">Total Sales (High to Low)</option>
                      <option value="serviceSales">Service Sales (High to Low)</option>
                      <option value="productSales">Product Sales (High to Low)</option>
                      <option value="clients">Number of Clients (High to Low)</option>
                      <option value="name">Employee Name (A to Z)</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-column" style="width: 150px;">
                <label class="form-label mb-1 small">Filter Date</label>
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
    const dateFilter = document.getElementById('dateFilter');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');

    dateFilter.addEventListener('change', function() {
        const selectedFilter = this.value;
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        Array.from(rows).forEach(row => {
            const dateCell = row.getElementsByTagName('td')[2]; // Date is in the third column
            if (!dateCell) return;

            const rowDate = new Date(dateCell.textContent);
            rowDate.setHours(0, 0, 0, 0);
            let showRow = true;

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

        // Update rankings for visible rows
        let rank = 1;
        Array.from(rows).forEach(row => {
            if (row.style.display !== 'none') {
                row.getElementsByTagName('td')[0].textContent = rank++;
            }
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortBy = document.getElementById('sortBy');
    const sortByBtn = document.getElementById('sortByBtn');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];

    sortBy.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        sortByBtn.textContent = 'Sort By: ' + selectedOption.text;
        
        let rows = Array.from(tbody.getElementsByTagName('tr'));
        
        rows.sort((a, b) => {
            let aVal, bVal;
            
            switch(this.value) {
                case 'totalSales':
                    // Parse total sales column (remove ₱ and commas)
                    aVal = parseFloat(a.cells[8].textContent.replace('₱', '').replace(/,/g, ''));
                    bVal = parseFloat(b.cells[8].textContent.replace('₱', '').replace(/,/g, ''));
                    return bVal - aVal;
                case 'serviceSales':
                    // Parse total service sales column (remove ₱ and commas)
                    aVal = parseFloat(a.cells[6].textContent.replace('₱', '').replace(/,/g, ''));
                    bVal = parseFloat(b.cells[6].textContent.replace('₱', '').replace(/,/g, ''));
                    return bVal - aVal;
                case 'productSales':
                    // Parse total product sales column (remove ₱ and commas)
                    aVal = parseFloat(a.cells[7].textContent.replace('₱', '').replace(/,/g, ''));
                    bVal = parseFloat(b.cells[7].textContent.replace('₱', '').replace(/,/g, ''));
                    return bVal - aVal;
                case 'clients':
                    // Parse number of clients column
                    aVal = parseInt(a.cells[5].textContent);
                    bVal = parseInt(b.cells[5].textContent);
                    return bVal - aVal;
                case 'name':
                    // Sort by employee name
                    aVal = a.cells[1].textContent.trim().toLowerCase();
                    bVal = b.cells[1].textContent.trim().toLowerCase();
                    return aVal.localeCompare(bVal);
                default:
                    return 0;
            }
        });
        
        // Clear table and append sorted rows
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        
        // Reorder the rows and update ranks
        rows.forEach((row, index) => {
            row.cells[0].textContent = index + 1; // Update rank
            tbody.appendChild(row);
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortBy = document.getElementById('sortBy');
    const sortByBtn = document.getElementById('sortByBtn');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];

    sortBy.addEventListener('change', function() {
        // Update button text to show selected option
        const selectedOption = this.options[this.selectedIndex];
        sortByBtn.textContent = 'Sort By: ' + selectedOption.text;
        
        let rows = Array.from(tbody.getElementsByTagName('tr'));
        
        rows.sort((a, b) => {
            let aVal, bVal;
            
            switch(this.value) {
                case 'totalSales':
                    aVal = parseFloat(a.cells[8].textContent.replace('₱', '').replace(',', ''));
                    bVal = parseFloat(b.cells[8].textContent.replace('₱', '').replace(',', ''));
                    return bVal - aVal;
                case 'serviceSales':
                    aVal = parseFloat(a.cells[3].textContent); // Number of Service Sales
                    bVal = parseFloat(b.cells[3].textContent);
                    return bVal - aVal;
                case 'productSales':
                    aVal = parseFloat(a.cells[4].textContent); // Number of Product Sales
                    bVal = parseFloat(b.cells[4].textContent);
                    return bVal - aVal;
                case 'clients':
                    aVal = parseInt(a.cells[5].textContent); // Number of Clients
                    bVal = parseInt(b.cells[5].textContent);
                    return bVal - aVal;
                case 'name':
                    aVal = a.cells[1].textContent; // Employee Name
                    bVal = b.cells[1].textContent;
                    return aVal.localeCompare(bVal);
                default:
                    return 0;
            }
        });
        
        // Clear table and append sorted rows
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        
        // Reorder the rows and update ranks
        rows.forEach((row, index) => {
            tbody.appendChild(row);
            row.cells[0].textContent = index + 1; // Update rank
        });
    });

    // Set initial button text
    if (sortBy.value) {
        sortByBtn.textContent = 'Sort By: ' + sortBy.options[sortBy.selectedIndex].text;
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add click event listeners to all download buttons
    document.querySelectorAll('.download-row').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const rowData = [];
            const headers = [];
            
            // Get headers
            row.closest('table').querySelectorAll('thead th').forEach(th => {
                if (th.textContent !== 'Action') {
                    headers.push(th.textContent.trim());
                }
            });
            
            // Get row data
            row.querySelectorAll('td').forEach((td, index) => {
                if (index < row.cells.length - 1) { // Exclude the Action column
                    rowData.push(td.textContent.trim());
                }
            });
            
            // Create worksheet data
            const ws_data = [headers, rowData];
            
            // Create workbook
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(ws_data);
            
            // Add worksheet to workbook
            XLSX.utils.book_append_sheet(wb, ws, "Employee Data");
            
            // Get employee name for filename
            const employeeName = rowData[1].replace(/\s+/g, '_').toLowerCase();
            
            // Generate and download file
            XLSX.writeFile(wb, `employee_report_${employeeName}.xlsx`);
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('employeeReport');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        Array.from(rows).forEach(row => {
            const nameCell = row.cells[1]; // Employee name is in the second column
            const name = nameCell.textContent.toLowerCase();
            
            // Show/hide row based on whether the name contains the search term
            row.style.display = name.includes(searchTerm) ? '' : 'none';
        });

        // Update rankings for visible rows
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
    const rows = tbody.getElementsByTagName('tr');

    function filterByDateRange() {
        const fromDate = dateFrom.value ? new Date(dateFrom.value) : null;
        const toDate = dateTo.value ? new Date(dateTo.value) : null;

        Array.from(rows).forEach(row => {
            const dateCell = row.cells[2]; // Date is in the third column
            const rowDate = new Date(dateCell.textContent);
            
            let showRow = true;
            
            if (fromDate && toDate) {
                // Set time to midnight for accurate date comparison
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

        // Update rankings for visible rows
        let rank = 1;
        Array.from(rows).forEach(row => {
            if (row.style.display !== 'none') {
                row.cells[0].textContent = rank++;
            }
        });
    }

    // Add event listeners to both date inputs
    dateFrom.addEventListener('change', filterByDateRange);
    dateTo.addEventListener('change', filterByDateRange);

    // Add validation to ensure "Date To" is not before "Date From"
    dateTo.addEventListener('change', function() {
        if (dateFrom.value && this.value) {
            if (new Date(this.value) < new Date(dateFrom.value)) {
                alert('End date cannot be before start date');
                this.value = '';
            }
        }
    });

    dateFrom.addEventListener('change', function() {
        if (dateTo.value && this.value) {
            if (new Date(dateTo.value) < new Date(this.value)) {
                alert('Start date cannot be after end date');
                this.value = '';
            }
        }
    });
});
</script>

  </body>
        

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

  <!-- Export Libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.29/jspdf.plugin.autotable.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle export button clicks
        document.querySelectorAll('[data-export]').forEach(button => {
            button.addEventListener('click', function() {
                const format = this.getAttribute('data-export');
                const table = document.getElementById('employeeReport');
                
                switch(format) {
                    case 'pdf':
                        exportToPDF(table);
                        break;
                    case 'excel':
                        exportToExcel(table);
                        break;
                    case 'csv':
                        exportToCSV(table);
                        break;
                }
            });
        });

        function exportToPDF(table) {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            doc.text('Employee Report', 14, 15);
            
            doc.autoTable({
                html: table,
                startY: 20,
                styles: {
                    fontSize: 8,
                    cellPadding: 2,
                },
                columnStyles: {
                    0: {cellWidth: 10}, // Rank
                    1: {cellWidth: 30}, // Name
                    2: {cellWidth: 20}, // Service Sales
                    3: {cellWidth: 20}, // Product Sales
                    4: {cellWidth: 20}, // Clients
                    5: {cellWidth: 25}, // Service Sales Total
                    6: {cellWidth: 25}, // Product Sales Total
                    7: {cellWidth: 25}, // Total Sales
                }
            });
            
            doc.save('employee-report.pdf');
        }

        function exportToExcel(table) {
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.table_to_sheet(table);
            
            // Format currency columns
            const currencyColumns = ['F', 'G', 'H'];
            const range = XLSX.utils.decode_range(ws['!ref']);
            
            for (let R = range.s.r + 1; R <= range.e.r; ++R) {
                currencyColumns.forEach(col => {
                    const cell = ws[col + (R + 1)];
                    if (cell && cell.v) {
                        cell.v = cell.v.replace('₱', '').replace(',', '');
                        cell.t = 'n';
                    }
                });
            }
            
            XLSX.utils.book_append_sheet(wb, ws, 'Employee Report');
            XLSX.writeFile(wb, 'employee-report.xlsx');
        }

        function exportToCSV(table) {
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.table_to_sheet(table);
            XLSX.utils.book_append_sheet(wb, ws, 'Employee Report');
            XLSX.writeFile(wb, 'employee-report.csv');
        }
    });
  </script>
</body>
</html>
