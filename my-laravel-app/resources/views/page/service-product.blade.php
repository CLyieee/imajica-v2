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
        <!-- Removed Customer Report Summary -->
        <div class="service-product-report">
          <h2>Service/Product Report Summary</h2>
      
          <div class="metrics">
            <div class="metric-card">
              <h5>Total Revenue</h5>
              <h4>₱385,750</h4>
              <p class="text-success">+15.2%</p>
            </div>
            <div class="metric-card">
              <h5>Total Services</h5>
              <h4>458</h4>
              <p class="text-success">+8.5%</p>
            </div>
            <div class="metric-card">
              <h5>Total Products</h5>
              <h4>275</h4>
              <p class="text-success">+12.3%</p>
            </div>
          </div>
          
          <!-- Service/Product Table -->
          <div class="card mt-4" style="background: rgba(255, 255, 255, 0.9); padding: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <!-- Search Bar (Left) -->
              <div>
                <input type="text" 
                    class="form-control" 
                    style="width: 300px;" 
                    id="serviceSearchInput" 
                    placeholder="Search items..." 
                    role="searchbox"
                    onkeyup="searchServiceTable()">
              </div>
              
              <!-- Filters and Export (Right) -->
              <div class="d-flex gap-2">
                <select class="form-select" style="width: 150px;" id="serviceSort">
                  <option value="">Filter By</option>
                  <option value="name">Name</option>
                  <option value="revenue">Revenue</option>
                  <option value="quantity">Quantity</option>
                </select>
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Filter By Date
                  </button>
                  <div class="dropdown-menu p-3" style="min-width: 250px;">
                    <select class="form-select" id="serviceDateFilter">
                      <option value="">Select Date Range</option>
                      <option value="today">Today</option>
                      <option value="last7">Last 7 Days</option>
                      <option value="last30">Last 30 Days</option>
                      <option value="thisMonth">This Month</option>
                    </select>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Export
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">PDF</a></li>
                    <li><a class="dropdown-item" href="#">Excel</a></li>
                    <li><a class="dropdown-item" href="#">CSV</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover" id="serviceTable">
                <tbody>
                  <tr style="background-color: #134013;">
                    <td style="color: white;">NAME</td>
                    <td style="color: white;">PRICE</td>
                    <td style="color: white;">TOTAL QUANTITY</td>
                    <td style="color: white;">TOTAL DISCOUNT</td>
                    <td style="color: white;">GIFT CARD ACCOUNT</td>
                    <td style="color: white;">TOTAL SALES</td>
                    <td style="color: white;">TYPE</td>
                    <td style="color: white;">ACTION</td>
                  </tr>
                  <tr>
                    <td>Hair Color Treatment</td>
                    <td>₱1,500</td>
                    <td>98</td>
                    <td>₱14,700</td>
                    <td>₱5,000</td>
                    <td>₱147,000</td>
                    <td>Service</td>
                    <td><a href="#" class="btn btn-sm btn-success">VIEW</a></td>
                  </tr>
                  <tr>
                    <td>Shampoo Premium</td>
                    <td>₱500</td>
                    <td>85</td>
                    <td>₱4,250</td>
                    <td>₱2,000</td>
                    <td>₱42,500</td>
                    <td>Product</td>
                    <td><a href="#" class="btn btn-sm btn-success">VIEW</a></td>
                  </tr>
                  <tr>
                    <td>Hair Treatment Oil</td>
                    <td>₱500</td>
                    <td>67</td>
                    <td>₱3,350</td>
                    <td>₱1,500</td>
                    <td>₱33,500</td>
                    <td>Product</td>
                    <td><a href="#" class="btn btn-sm btn-success">VIEW</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <script>
          function searchServiceTable() {
            const input = document.getElementById('serviceSearchInput');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('serviceTable');
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
