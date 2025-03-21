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
        padding: 20px;
        display: flex;
        margin: 0;
        padding: 0;
        min-height: 100vh;
      }

      .container {
        max-width: 1200px;
        margin: auto;
        flex: 1;
        padding: 20px;
        margin-left: 300px;
        padding: 2rem;
        background: linear-gradient(135deg, #eef2f3, #f5f5f5);
        margin-top: 15px;
      }

      .card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
      }

      .card:hover {
        transform: translateY(-5px);
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
        background: #007bff;
        color: #fff;
      }

      .btn-primary:hover {
        background: #0056b3;
      }

      .metrics {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
      }

      .metric-card {
        text-align: center;
        padding: 15px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
      }

      .metric-card h4 {
        font-size: 2rem;
        margin: 10px 0;
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

      .service-product-report {
        margin-top: 30px;
      }

      .service-product-report h2 {
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
      }

      .service-product-report .metrics {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
      }

      .service-product-report .metric-card {
        text-align: center;
        padding: 15px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
      }

      .service-product-report .metric-card h4 {
        font-size: 2rem;
        margin: 10px 0;
      }

      .employee-report {
        margin-top: 30px;
        text-align: center; /* Center the content */
      }

      .employee-report h2 {
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
      }

      .employee-report .metrics {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
margin-top: 20px; /* Add margin to move the cards down */
      }

      .employee-report .metric-card {
        text-align: center;
        padding: 15px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
      }

      .employee-report .metric-card h4 {
        font-size: 2rem;
        margin: 10px 0;
      }

      /* Update this style for table headers */
      #expensesTable thead th {
        background-color: #0f4f2b; /* Dark green color */
        color: white;
        text-align: center; /* Center align the header text */
        padding: 12px;
      }

      /* Add styles for blurred status badges */
      .badge.bg-success,
      .badge.bg-warning,
      .badge.bg-danger {
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        background-color: rgba(25, 135, 84, 0.85) !important; /* For success */
      }

      .badge.bg-warning {
        background-color: rgba(255, 193, 7, 0.85) !important; /* For warning */
      }

      .badge.bg-danger {
        background-color: rgba(220, 53, 69, 0.85) !important; /* For danger */
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
        <div class="employee-report">
          <h2>Expenses Report Summary</h2>
      
          <div class="metrics">
            <div class="metric-card">
              <h5>Total Expenses</h5>
              <h4>₱185,620</h4>
              <p class="text-danger">+8.2%</p>
            </div>
            <div class="metric-card">
              <h5>Highest Category</h5>
              <h4>Utilities</h4>
              <p>32% of expenses</p>
            </div>
            <div class="metric-card">
              <h5>This Month</h5>
              <h4>₱42,850</h4>
              <p class="text-danger">+5.4%</p>
            </div>
          </div>
          
          <div class="card mt-4" style="background: rgba(255, 255, 255, 0.9); padding: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="mb-0">All Expenses</h3>
              <div class="d-flex gap-2 align-items-center">
                <input type="text" 
                    class="form-control" 
                    style="width: 200px;" 
                    id="searchInput" 
                    placeholder="Search expenses..." 
                    role="searchbox"
                    onkeyup="searchTable()">
                <select class="form-select" style="width: 200px;" id="categoryFilter">
                  <option value="">Filter by</option>
                  <option value="utilities">Utilities</option>
                  <option value="supplies">Supplies</option>
                  <option value="maintenance">Maintenance</option>
                  <option value="salary">Salary</option>
                  <option value="others">Others</option>
                </select>
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateFilterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter By Date
                  </button>
                  <div class="dropdown-menu p-3" style="min-width: 250px;">
                    <select class="form-select" id="dateFilter">
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
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" style="width: 120px;">
                    Export
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#" data-export="pdf">PDF</a></li>
                    <li><a class="dropdown-item" href="#" data-export="excel">Excel</a></li>
                    <li><a class="dropdown-item" href="#" data-export="csv">CSV</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover" id="expensesTable">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Branch</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2024-01-15</td>
                    <td>Utilities</td>
                    <td>Electricity Bill</td>
                    <td>Main Branch</td>
                    <td>₱12,450</td>
                    <td>Bank Transfer</td>
                    <td><span class="badge bg-label-success">Paid</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-success">VIEW</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2024-01-14</td>
                    <td>Supplies</td>
                    <td>Beauty Products Stock</td>
                    <td>North Branch</td>
                    <td>₱28,900</td>
                    <td>Credit Card</td>
                    <td><span class="badge bg-label-success">Paid</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-success">VIEW</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2024-01-13</td>
                    <td>Maintenance</td>
                    <td>Equipment Repair</td>
                    <td>Main Branch</td>
                    <td>₱8,500</td>
                    <td>Cash</td>
                    <td><span class="badge bg-label-warning">Pending</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-success">VIEW</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2024-01-12</td>
                    <td>Salary</td>
                    <td>Staff Payroll</td>
                    <td>All Branches</td>
                    <td>₱85,000</td>
                    <td>Bank Transfer</td>
                    <td><span class="badge bg-label-success">Paid</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-success">VIEW</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2024-01-11</td>
                    <td>Others</td>
                    <td>Marketing Materials</td>
                    <td>All Branches</td>
                    <td>₱15,200</td>
                    <td>Credit Card</td>
                    <td><span class="badge bg-label-danger"  >Overdue</span></td>
                    <td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-success">VIEW</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <script>
              function searchTable() {
                const input = document.getElementById('searchInput');
                const filter = input.value.toLowerCase();
                const table = document.getElementById('expensesTable');
                const rows = table.getElementsByTagName('tr');

                for (let i = 1; i < rows.length; i++) {
                  let row = rows[i];
                  let found = false;
                  
                  for (let j = 0; j < row.cells.length - 1; j++) {
                    let cell = row.cells[j];
                    if (cell) {
                      let text = cell.textContent || cell.innerText;
                      if (text.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                      }
                    }
                  }
                  
                  row.style.display = found ? '' : 'none';
                }
              }
            </script>
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
    </script>
    <div class="content-backdrop fade"></div>
    <!-- Content wrapper -->
    <!-- / Layout page -->
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
