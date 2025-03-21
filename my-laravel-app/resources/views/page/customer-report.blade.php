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
        max-width: 100%;
        width: 100%;
        margin: 0 auto;
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
       <div class="container rounded  ">
      <div class="header">
        <h1>Customer Report Summary</h1>
      
      </div>

        <div class="metrics">
          <div class="metric-card">
            <i class="ti tabler-currency-dollar mb-2" style="font-size: 24px; color: #28a745;"></i>
            <h5>Total Sales</h5>
            <h4>₱191,600.00</h4>
        
          </div>
          <div class="metric-card">
            <i class="ti tabler-users-group mb-2" style="font-size: 24px; color: #007bff;"></i>
            <h5>Top Customers</h5>
            <h4>John Smith</h4>
    
          </div>
        </div>

        <div class="card mt-4">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h3 class="mb-0">Customer Sales</h3>
              <div class="d-flex gap-2">
                <div class="input-group" style="width: 300px;">
                  <input 
                    type="text" 
                    class="form-control" 
                    id="searchInput" 
                    placeholder="Search by name or email..."
                    style="border-radius: 4px;"
                  >
                </div>
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateFilterBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter By Date
                  </button>
                  <div class="dropdown-menu p-3" style="min-width: 250px;">
                    <select class="form-select" id="dateFilter" onchange="applyDateFilter()">
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
                  <ul class="dropdown-menu" style="min-width: 120px;">
                    <li><a class="dropdown-item" href="#" data-export="pdf">PDF</a></li>
                    <li><a class="dropdown-item" href="#" data-export="excel">Excel</a></li>
                    <li><a class="dropdown-item" href="#" data-export="csv">CSV</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr style="background-color: #1e4d2b;">
                    <th style="color: white; font-weight: 500;">Rank</th>
                    <th style="color: white; font-weight: 500;">Customer Name</th>
                    <th style="color: white; font-weight: 500;">Contact Number</th>
                    <th style="color: white; font-weight: 500;">Email</th>
                    <th style="color: white; font-weight: 500;">Total Transactions</th>
                    <th style="color: white; font-weight: 500;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Smith</td>
                    <td>+1 234-567-8900</td>
                    <td>john.smith@email.com</td>
                    <td>₱12,345</td>
                    <td>
                      <button class="btn btn-sm btn-success">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Sarah Johnson</td>
                    <td>+1 234-567-8901</td>
                    <td>sarah.j@email.com</td>
                    <td>₱10,234</td>
                    <td>
                      <button class="btn btn-sm btn-success">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mike Wilson</td>
                    <td>+1 234-567-8902</td>
                    <td>mike.w@email.com</td>
                    <td>₱8,765</td>
                    <td>
                      <button class="btn btn-sm btn-success">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Emily Brown</td>
                    <td>+1 234-567-8903</td>
                    <td>emily.b@email.com</td>
                    <td>₱7,654</td>
                    <td>
                      <button class="btn btn-sm btn-success">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>David Lee</td>
                    <td>+1 234-567-8904</td>
                    <td>david.l@email.com</td>
                    <td>₱6,543</td>
                    <td>
                      <button class="btn btn-sm btn-success">View</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
      document.getElementById('searchInput').addEventListener('keyup', function() {
        let searchValue = this.value.toLowerCase();
        let tableRows = document.querySelectorAll('tbody tr');
        
        tableRows.forEach(row => {
          let name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
          let email = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
          
          if (name.includes(searchValue) || email.includes(searchValue)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });

      // Update the script section - remove calendar input related code
      document.addEventListener('DOMContentLoaded', function() {
          // Custom range toggle
          document.getElementById('customRangeBtn').addEventListener('click', function(e) {
              e.stopPropagation();
              document.querySelector('.custom-range-inputs').classList.toggle('d-none');
          });

          document.querySelectorAll('[data-filter]').forEach(button => {
              button.addEventListener('click', function(e) {
                  if (this.getAttribute('data-filter') === 'custom') return;
                  
                  const filterType = this.getAttribute('data-filter');
                  const now = new Date();
                  let startDate, endDate;
                  
                  switch(filterType) {
                      case 'tomorrow':
                          startDate = endDate = new Date(now.setDate(now.getDate() + 1));
                          break;
                      case 'today':
                          startDate = endDate = now;
                          break;
                      case 'yesterday':
                          startDate = endDate = new Date(now.setDate(now.getDate() - 1));
                          break;
                      case 'last7days':
                          endDate = new Date();
                          startDate = new Date(now.setDate(now.getDate() - 7));
                          break;
                      case 'last30days':
                          endDate = new Date();
                          startDate = new Date(now.setDate(now.getDate() - 30));
                          break;
                      case 'thisMonth':
                          startDate = new Date(now.getFullYear(), now.getMonth(), 1);
                          endDate = new Date(now.getFullYear(), now.getMonth() + 1, 0);
                          break;
                      case 'lastMonth':
                          startDate = new Date(now.getFullYear(), now.getMonth() - 1, 1);
                          endDate = new Date(now.getFullYear(), now.getMonth(), 0);
                          break;
                  }
                  
                  updateFilterText(startDate, endDate);
              });
          });

          document.getElementById('applyCustomRange').addEventListener('click', function(e) {
              e.stopPropagation();
              const startDate = new Date(document.getElementById('dateFrom').value);
              const endDate = new Date(document.getElementById('dateTo').value);
              updateFilterText(startDate, endDate);
          });

          function updateFilterText(startDate, endDate) {
              const formatDate = date => date.toLocaleDateString('en-US', {
                  month: 'short',
                  day: 'numeric',
                  year: 'numeric'
              });
              
              const filterText = startDate.getTime() === endDate.getTime() ? 
                  formatDate(startDate) : 
                  `${formatDate(startDate)} - ${formatDate(endDate)}`;
                  
              document.getElementById('selectedDateText').textContent = `: ${filterText}`;
              
              // Hide dropdown after selection
              document.querySelector('.dropdown-menu').classList.remove('show');
              document.querySelector('.custom-range-inputs').classList.add('d-none');
          }
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
  
</body>


</html>
