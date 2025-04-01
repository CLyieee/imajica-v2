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
                    <div class="d-flex gap-2">

              <div class="input-group" style="width: 300px;">
                <span class="input-group-text">
                  <i class="ti tabler-search"></i>
                </span>
                <input 
                  type="text" 
                  class="form-control" 
                  id="searchInput" 
                  placeholder="Search by name..."
                  style="border-radius: 0 4px 4px 0;"
                >
              </div>

                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortByBtn" data-bs-toggle="dropdown">
                                Sort By: Default
                            </button>
                            <div class="dropdown-menu p-3" style="min-width: 200px;">
                                <select class="form-select" id="sortBy">
                                    <option value="">Default</option>
                                    <option value="totalSales">Total Sales (High to Low)</option>
                                    <option value="serviceSales">Service Sales (High to Low)</option>
                                    <option value="productSales">Product Sales (High to Low)</option>
                                    <option value="clients">Number of Clients (High to Low)</option>
                                    <option value="name">Employee Name (A to Z)</option>
                                </select>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateFilterBtn" data-bs-toggle="dropdown">
                                Filter By Date
                            </button>
                            <div class="dropdown-menu p-3" style="min-width: 250px;">
                                <select class="form-select" id="dateFilter">
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
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" style="background-color: #18332a;">
                                Export
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-export="pdf">PDF</a></li>
                                <li><a class="dropdown-item" href="#" data-export="excel">Excel</a></li>
                                <li><a class="dropdown-item" href="#" data-export="csv">CSV</a></li>
                            </ul>
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
                                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#mariaDetails">View</button>
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

                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#johnDavisDetails">View</button>

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

                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#sarah wilsonDetails">View</button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Employee Details Modal -->
<div class="modal fade" id="mariaDetails" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1e4d2b;">
                <h4 class="modal-title text-white">Employee Details</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <!-- Employee Info Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100" style="background-color: #f8f9fa;">
                            <div class="card-header d-flex align-items-center justify-content-between" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Employee Information</h5>
                                <small class="text-muted">ID: #EMP001</small>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3">
                                    <div class="text-center mb-3">
                                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" width="100" height="100" alt="Employee Photo">
                                        <h5 class="mb-1">Maria Garcia</h5>
                                        <span class="badge bg-label-primary">Senior Hairstylist</span>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Email:</label>
                                        <p class="mb-0">maria.garcia@imajica.com</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Phone:</label>
                                        <p class="mb-0">+63 912 345 6789</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Joined Date:</label>
                                        <p class="mb-0">January 15, 2022</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Performance Rating:</label>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-half text-warning"></i>
                                            <span class="ms-1">(4.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Transactions -->
                    <div class="col-md-6 col-lg-8">
                        <div class="card h-100" style="background-color: #f8f9fa;">
                            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Recent Transactions</h5>
                                <div class="btn-group">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
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
                                            <tr>
                                                <td>#TRX006</td>
                                                <td>2023-11-14</td>
                                                <td>Hair Treatment</td>
                                                <td>Emma Thompson</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱4,800</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX007</td>
                                                <td>2023-11-13</td>
                                                <td>Hair Styling</td>
                                                <td>Sophia Lee</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱3,500</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX008</td>
                                                <td>2023-11-12</td>
                                                <td>Hair Coloring</td>
                                                <td>Olivia Wilson</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱5,200</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales Performance Chart -->
                    <div class="col-md-6">
                        <div class="card" style="background-color: #f8f9fa; max-width: 500px;">
                            <div class="card-header" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Monthly Sales Performance</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="employeeChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Include Chart.js -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            var ctx = document.getElementById("employeeChart").getContext("2d");
                            var employeeChart = new Chart(ctx, {
                                type: "bar",
                                data: {
                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                                    datasets: [{
                                        label: "Sales ($)",
                                        data: [1200, 1500, 1100, 1800, 1700, 1900],
                                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                                        borderColor: "rgba(54, 162, 235, 1)",
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>

                    <!-- Service Distribution -->
                    <div class="col-md-6">
                        <div class="card" style="background-color: #f8f9fa;">
                            <div class="card-header" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Service Distribution</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3" style="margin-top: 20px;">
                                    <div class="service-item">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Styling</span>
                                            <span class="badge bg-primary">45%</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                                        </div>
                                    </div>
                                    <div class="service-item" style="margin-top: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Treatment</span>
                                            <span class="badge bg-info">30%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="service-item" style="margin-top: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Coloring</span>
                                            <span class="badge bg-success">25%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"></div>
                                        </div>
                                    </div>
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

<!-- Employee Details Modal for John Davis -->
<div class="modal fade" id="johnDavisDetails" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1e4d2b;">
                <h4 class="modal-title text-white">Employee Details</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <!-- Employee Info Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100" style="background-color: #f8f9fa;">
                            <div class="card-header d-flex align-items-center justify-content-between" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Employee Information</h5>
                                <small class="text-muted">ID: #EMP002</small>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3">
                                    <div class="text-center mb-3">
                                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" width="100" height="100" alt="Employee Photo">
                                        <h5 class="mb-1">John Davis</h5>
                                        <span class="badge bg-label-primary">Senior Colorist</span>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Email:</label>
                                        <p class="mb-0">john.davis@imajica.com</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Phone:</label>
                                        <p class="mb-0">+63 923 456 7890</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Joined Date:</label>
                                        <p class="mb-0">February 1, 2022</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Performance Rating:</label>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star text-warning"></i>
                                            <span class="ms-1">(4.0)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Transactions -->
                    <div class="col-md-6 col-lg-8">
                        <div class="card h-100" style="background-color: #f8f9fa;">
                            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Recent Transactions</h5>
                                <div class="btn-group">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
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
                                                <td>#TRX002</td>
                                                <td>2023-11-16</td>
                                                <td>Hair Treatment</td>
                                                <td>Michael Brown</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱4,800</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX009</td>
                                                <td>2023-11-15</td>
                                                <td>Hair Coloring</td>
                                                <td>David Miller</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱5,300</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX010</td>
                                                <td>2023-11-14</td>
                                                <td>Hair Styling</td>
                                                <td>James Wilson</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱3,800</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX011</td>
                                                <td>2023-11-13</td>
                                                <td>Hair Treatment</td>
                                                <td>Daniel Lee</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱4,600</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales Performance Chart -->
                    <div class="col-md-6">
                        <div class="card" style="background-color: #f8f9fa; max-width: 500px;">
                            <div class="card-header" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Monthly Sales Performance</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="johnDavisChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            var ctx = document.getElementById("johnDavisChart").getContext("2d");
                            var johnDavisChart = new Chart(ctx, {
                                type: "bar",
                                data: {
                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                    datasets: [{
                                        label: "Monthly Sales (₱)",
                                        data: [35000, 42000, 38000, 45000, 40000, 43000, 41000, 44000, 38000, 42000, 45000, 47000],
                                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                                        borderColor: "rgba(75, 192, 192, 1)",
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            ticks: {
                                                callback: function(value) {
                                                    return '₱' + value.toLocaleString();
                                                }
                                            }
                                        }
                                    },
                                    plugins: {
                                        tooltip: {
                                            callbacks: {
                                                label: function(context) {
                                                    return '₱' + context.parsed.y.toLocaleString();
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        });
                    </script>

                    <!-- Service Distribution -->
                    <div class="col-md-6">
                        <div class="card" style="background-color: #f8f9fa;">
                            <div class="card-header" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Service Distribution</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3" style="margin-top: 20px;">
                                    <div class="service-item">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Styling</span>
                                            <span class="badge bg-primary">45%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                                        </div>
                                    </div>
                                    <div class="service-item" style="margin-top: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Treatment</span>
                                            <span class="badge bg-info">30%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="service-item" style="margin-top: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Coloring</span>
                                            <span class="badge bg-success">25%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Employee Details Modal for Sarah Wilson -->
<div class="modal fade" id="sarah wilsonDetails" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1e4d2b;">
                <h5 class="modal-title text-white">Employee Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <!-- Employee Info Card -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100" style="background-color: #f8f9fa;">
                            <div class="card-header d-flex align-items-center justify-content-between" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Employee Information</h5>
                                <small class="text-muted">ID: #EMP003</small>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3">
                                    <div class="text-center mb-3">
                                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" width="100" height="100" alt="Employee Photo">
                                        <h5 class="mb-1">Sarah Wilson</h5>
                                        <span class="badge bg-label-primary">Hair Treatment Specialist</span>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Email:</label>
                                        <p class="mb-0">sarah.wilson@imajica.com</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Phone:</label>
                                        <p class="mb-0">+63 934 567 8901</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Joined Date:</label>
                                        <p class="mb-0">March 1, 2022</p>
                                    </div>
                                    <div class="info-item">
                                        <label class="fw-semibold">Performance Rating:</label>
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star-filled text-warning"></i>
                                            <i class="ti ti-star text-warning"></i>
                                            <span class="ms-1">(4.0)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Transactions for Sarah Wilson -->
                    <div class="col-md-6 col-lg-8">
                        <div class="card h-100" style="background-color: #f8f9fa;">
                            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Recent Transactions</h5>
                                <div class="btn-group">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
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
                                                <td>#TRX003</td>
                                                <td>2023-11-14</td>
                                                <td>Hair Treatment</td>
                                                <td>Emily Parker</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱4,800</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX012</td>
                                                <td>2023-11-13</td>
                                                <td>Hair Styling</td>
                                                <td>Isabella White</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱3,900</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX013</td>
                                                <td>2023-11-12</td>
                                                <td>Hair Coloring</td>
                                                <td>Ava Brown</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱5,100</td>
                                            </tr>
                                            <tr>
                                                <td>#TRX014</td>
                                                <td>2023-11-11</td>
                                                <td>Hair Treatment</td>
                                                <td>Mia Johnson</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>₱4,700</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales Performance Chart -->
                    <div class="col-md-5">
                        <div class="card" style="background-color: #f8f9fa; max-width: 500px;">
                            <div class="card-header" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Monthly Sales Performance</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="sarahWilsonChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            var ctx = document.getElementById("sarahWilsonChart").getContext("2d");
                            var sarahWilsonChart = new Chart(ctx, {
                                type: "bar",
                                data: {
                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                    datasets: [{
                                        label: "Monthly Sales (₱)",
                                        data: [32000, 38000, 35000, 40000, 38000, 42000, 39000, 41000, 36000, 39000, 41000, 43000],
                                        backgroundColor: "rgba(54, 162, 235, 0.6)",
                                        borderColor: "rgba(54, 162, 235, 1)",
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            ticks: {
                                                callback: function(value) {
                                                    return '₱' + value.toLocaleString();
                                                }
                                            }
                                        }
                                    },
                                    plugins: {
                                        tooltip: {
                                            callbacks: {
                                                label: function(context) {
                                                    return '₱' + context.parsed.y.toLocaleString();
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        });
                    </script>

                    <!-- Service Distribution -->
                    <div class="col-md-6">
                        <div class="card" style="background-color: #f8f9fa;">
                            <div class="card-header" style="background-color: #e9ecef;">
                                <h5 class="card-title mb-0">Service Distribution</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column gap-3" style="margin-top: 20px;">
                                    <div class="service-item">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Treatment</span>
                                            <span class="badge bg-primary">50%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <div class="service-item" style="margin-top: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Styling</span>
                                            <span class="badge bg-info">30%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="service-item" style="margin-top: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span class="fw-semibold">Hair Coloring</span>
                                            <span class="badge bg-success">20%</</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
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
