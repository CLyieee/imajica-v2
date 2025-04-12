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

    <title>Service/Product Report - Imajica</title>
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
  <meta property="og:image" content="../../../../pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png" />
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

      .mini-chart {
        position: relative;
        width: 100%;
        min-width: 100px;
      }

      .booking-trend {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }

      /* Add these styles for centering the modal */
      .modal-dialog.modal-xl {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
        margin: 0 auto;
      }

      @media (min-width: 1200px) {
        .modal-dialog.modal-xl {
          min-height: calc(100% - 3.5rem);
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
        <h1>Service/Product Report Summary</h1>

      </div>


        <div class="metrics">
          <div class="metric-card">
            <i class="ti tabler-chart-bar mb-2" style="font-size: 24px; color: #28a745;"></i>
            <h5>Overall Sales</h5>
            <h4>₱385,750.00</h4>
            <p class="text-success">+15.2% from last month</p>
          </div>
          <div class="metric-card">
            <i class="ti tabler-tool mb-2" style="font-size: 24px; color: #007bff;"></i>
            <h5>Top Service</h5>
            <h4>Hair Color Treatment</h4>
            <p class="text-success">₱147,000 total sales</p>
          </div>
          <div class="metric-card">
            <i class="ti tabler-box mb-2" style="font-size: 24px; color: #dc3545;"></i>
            <h5>Top Product</h5>
            <h4>Shampoo Premium</h4>
            <p class="text-success">₱42,500 total sales</p>
          </div>
        </div>

        <div class="card mt-4">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h3 class="mb-0">All Sales</h3>
              <div class="d-flex gap-2 align-items-end">
                <!-- Search Bar -->
                <div class="d-flex flex-column" style="width: 180px;">
                  <div class="input-group input-group-sm">
                    <span class="input-group-text">
                      <i class="ti tabler-search"></i>
                    </span>
                    <input 
                      type="text" 
                      class="form-control" 
                      id="searchInput" 
                      placeholder="Search items..."
                    >
                  </div>
                </div>

                <!-- Date From -->
                <div class="d-flex flex-column" style="width: 160px;">
                  <label class="form-label text-muted small mb-1">Date From</label>
                  <input 
                    type="date" 
                    class="form-control form-control-sm" 
                    id="dateFrom"
                  >
                </div>

                <!-- Date To -->
                <div class="d-flex flex-column" style="width: 160px;">
                  <label class="form-label text-muted small mb-1">Date To</label>
                  <input 
                    type="date" 
                    class="form-control form-control-sm" 
                    id="dateTo"
                  >
                </div>

                <!-- Report Type -->
                <div class="d-flex flex-column" style="width: 180px;">
                  <label class="form-label text-muted small mb-1">Report Type</label>
                  <select class="form-select form-select-sm" id="reportType">
                    <option value="overall">Overall Sales</option>
                    <option value="services">Services Only</option>
                    <option value="products">Products Only</option>
                    <option value="discounts">Discounts Report</option>
                    <option value="giftcards">Gift Card Usage</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr style="background-color: #134013;">
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Services Name</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Branch Name</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Description</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Duration</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Service Category</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Service Cost</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">Loyalty Points</th>
                    <th style="color: white; font-weight: 500; font-size: 14px; vertical-align: middle;">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hair Color Treatment</td>
                    <td>₱1,500</td>
                    <td>98</td>
                    <td>₱14,700</td>
                    <td>₱5,000</td>
                    <td>₱147,000</td>
                    <td><span class="badge" style="background-color: rgba(255, 165, 0, 0.2); color: #FF8C00;">Service</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Hair Rebonding</td>
                    <td>₱2,500</td>
                    <td>75</td>
                    <td>₱18,750</td>
                    <td>₱3,500</td>
                    <td>₱187,500</td>
                    <td><span class="badge" style="background-color: rgba(255, 165, 0, 0.2); color: #FF8C00;">Service</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Professional Shampoo</td>
                    <td>₱850</td>
                    <td>120</td>
                    <td>₱10,200</td>
                    <td>₱2,000</td>
                    <td>₱102,000</td>
                    <td><span class="badge" style="background-color: rgba(0, 128, 0, 0.2); color: #006400;">Product</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Hair Treatment Package</td>
                    <td>₱3,500</td>
                    <td>45</td>
                    <td>₱15,750</td>
                    <td>₱4,500</td>
                    <td>₱157,500</td>
                    <td><span class="badge" style="background-color: rgba(255,  165, 0, 0.2); color: #FF8C00;">Service</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Hair Styling Tools Set</td>
                    <td>₱1,200</td>
                    <td>65</td>
                    <td>₱7,800</td>
                    <td>₱2,500</td>
                    <td>₱78,000</td>
                    <td><span class="badge" style="background-color: rgba(0, 128, 0, 0.2); color: #006400;">Product</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Hair Care Bundle</td>
                    <td>₱2,000</td>
                    <td>85</td>
                    <td>₱17,000</td>
                    <td>₱3,000</td>
                    <td>₱170,000</td>
                    <td><span class="badge" style="background-color: rgba(0, 128, 0, 0.2); color: #006400;">Product</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Premium Hair Oil</td>
                    <td>₱750</td>
                    <td>150</td>
                    <td>₱11,250</td>
                    <td>₱2,800</td>
                    <td>₱112,500</td>
                    <td><span class="badge" style="background-color: rgba(0, 128, 0, 0.2); color: #006400;">Product</span></td>
                    <td>
                      <button class="btn btn-sm" onclick="downloadRow(this, 'excel')"
                              style="background-color: #134013; color: white;">
                        <i class="ti tabler-download me-1"></i>Export
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Hair Spa Treatment</td>
                    <td>₱2,800</td>
                    <td>55</td>
                    <td>₱15,400</td>
                    <td>₱4,200</td>
                    <td>₱154,000</td>
                    <td><span class="badge" style="background-color: rgba(255, 165, 0, 0.2); color: #FF8C00;">Service</span></td>
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


        <!-- Service/Product Details Modal -->
        <div class="modal fade" id="serviceDetailsModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content shadow-lg rounded-3">
              <div class="modal-header" style="background-color: #134013;">
                <h4 class="modal-title" style="color: white;">Service/Product Details</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body p-4">
                <div class="row g-4">
                  <!-- Service/Product Info Card -->
                  <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                      <div class="card-header" style="background-color: #f0f0f0;">
                        <div class="d-flex align-items-center justify-content-between">
                          <h6 class="card-title mb-0" style="color: black;">Basic Information</h6>
                          <small style="color: rgba(7, 5, 5, 0.8);">ID: #SRV-2024-001</small>
                        </div>
                      </div>
                      <div class="card-body d-flex flex-column" style="gap: 0.5rem; padding-top: 0.75rem; padding-bottom: 0.75rem;">
                        <div style="margin-bottom: 0.35rem;"><strong>Name:</strong> <span id="serviceName">Hair Color Treatment</span></div>
                        <div style="margin-bottom: 0.35rem;"><strong>Category:</strong> <span id="serviceType">Beauty Services</span></div>
                        <div style="margin-bottom: 0.35rem;"><strong>Base Price:</strong> <span class="text-success" id="servicePrice">₱1,500.00</span></div>
                        <div style="margin-bottom: 0.35rem;"><strong>Total Sales:</strong> <span class="text-primary" id="serviceTotalSales">₱147,000.00</span></div>
                        <div><strong>Status:</strong> <span class="badge bg-success">Active</span></div>
                      </div>
                    </div>
                  </div>

                  <!-- Performance Metrics -->
                  <div class="col-md-6 col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                      <div class="card-header" style="background-color: #f0f0f0;">
                        <h6 class="card-title mb-0" style="color: black;">Performance Metrics</h6>
                      </div>
                      <div class="card-body">
                        <table class="table table-striped">
                          <tbody>
                            <tr><td><strong>Total Quantity Sold:</strong></td><td id="serviceQuantity">98 units</td></tr>
                            <tr><td><strong>Total Discounts Given:</strong></td><td id="serviceDiscounts">₱14,700.00</td></tr>
                            <tr><td><strong>Gift Card Usage:</strong></td><td id="serviceGiftCards">₱5,000.00</td></tr>
                            <tr><td><strong>Average Rating:</strong></td><td>4.8/5.0 ⭐</td></tr>
                            <tr><td><strong>Customer Satisfaction:</strong></td><td>96% Positive</td></tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <!-- Monthly Sales Trend -->
                  <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                      <div class="card-header" style="background-color: #f0f0f0;">
                        <h6 class="card-title mb-0" style="color: black;">Monthly Sales Trend</h6>
                      </div>
                      <div class="card-body p-3" style="position: relative;">
                        <div style="height: 250px;">
                          <canvas id="salesTrendChart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Recent Transactions -->
                  <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                      <div class="card-header" style="background-color: #f0f0f0;">
                        <h6 class="card-title mb-0" style="color: black;">Recent Transactions</h6>
                      </div>
                      <div class="card-body" style="height: 300px; overflow-y: auto;">
                        <div class="table-responsive h-100">
                          <table class="table table-sm">
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody id="transactionsList">
                              <!-- Transactions will be populated via JavaScript -->
                            </tbody>
                          </table>
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
          document.addEventListener('DOMContentLoaded', function() {
            // Sample data for each service/product
            const servicesData = {
              '1': {
                id: 'SRV-2024-001',
                name: 'Hair Color Treatment',
                category: 'Beauty Services',
                basePrice: 1500,
                totalSales: 147000,
                status: 'Active',
                metrics: {
                  totalQuantity: '98 units',
                  totalDiscounts: '₱14,700.00',
                  giftCardUsage: '₱5,000.00',
                  rating: '4.8/5.0',
                  satisfaction: '96% Positive'
                },
                monthlyData: [12500, 15800, 14700, 16900, 15500, 17800],
                transactions: [
                  { date: '2024-01-15', customer: 'Maria Santos', amount: '₱1,500', status: 'Completed' },
                  { date: '2024-01-14', customer: 'John Cruz', amount: '₱3,000', status: 'Completed' },
                  { date: '2024-01-13', customer: 'Ana Reyes', amount: '₱1,500', status: 'Completed' },
                  { date: '2024-01-12', customer: 'Mark Tan', amount: '₱1,500', status: 'Completed' }
                ]
              },
              '2': {
                id: 'SRV-2024-002',
                name: 'Hair Rebonding',
                category: 'Beauty Services',
                basePrice: 2500,
                totalSales: 187500,
                status: 'Active',
                metrics: {
                  totalQuantity: '75 units',
                  totalDiscounts: '₱18,750.00',
                  giftCardUsage: '₱3,500.00',
                  rating: '4.7/5.0',
                  satisfaction: '94% Positive'
                },
                monthlyData: [15000, 18500, 17000, 19500, 18000, 20000],
                transactions: [
                  { date: '2024-01-15', customer: 'Jenny Lee', amount: '₱2,500', status: 'Completed' },
                  { date: '2024-01-14', customer: 'Mike Zhang', amount: '₱5,000', status: 'Completed' },
                  { date: '2024-01-13', customer: 'Sarah Kim', amount: '₱2,500', status: 'Completed' },
                  { date: '2024-01-12', customer: 'David Wang', amount: '₱2,500', status: 'Completed' }
                ]
              }
              // Add more services data here...
            };

            // Initialize the modal
            const serviceModal = new bootstrap.Modal(document.getElementById('serviceDetailsModal'));

            // Handle view button clicks
            document.querySelectorAll('.view-details').forEach(button => {
              button.addEventListener('click', function() {
                const serviceId = this.dataset.serviceId;
                const data = servicesData[serviceId] || servicesData['1']; // Default to first item if not found
                
                // Update modal content
                document.querySelector('#serviceDetailsModal small').textContent = `ID: #${data.id}`;
                document.getElementById('serviceName').textContent = data.name;
                document.getElementById('serviceType').textContent = data.category;
                document.getElementById('servicePrice').textContent = `₱${data.basePrice.toLocaleString()}.00`;

                // Update metrics
                Object.entries(data.metrics).forEach(([key, value]) => {
                  const element = document.getElementById(`service${key.charAt(0).toUpperCase() + key.slice(1)}`);
                  if (element) element.textContent = value;
                });

                // Update sales trend chart
                const ctx = document.getElementById('salesTrendChart').getContext('2d');
                if (window.salesChart) window.salesChart.destroy();
                
                window.salesChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                      label: 'Monthly Sales',
                      data: data.monthlyData,
                      backgroundColor: 'rgba(75, 192, 192, 0.2)',
                      borderColor: 'rgba(75, 192, 192, 1)',
                      borderWidth: 1,
                      borderRadius: 4,
                      maxBarThickness: 35
                    }]
                  },
                  options: {
                    responsive: true,
                    plugins: {
                      legend: { display: false },
                      tooltip: {
                        callbacks: {
                          label: function(context) {
                            return '₱' + context.raw.toLocaleString();
                          }
                        }
                      }
                    },
                    scales: {
                      y: {
                        beginAtZero: true,
                        ticks: {
                          callback: function(value) {
                            return '₱' + value.toLocaleString();
                          }
                        }
                      }
                    }
                  }
                });

                // Update transactions table
                const transactionsList = document.getElementById('transactionsList');
                transactionsList.innerHTML = data.transactions.map(t => `
                  <tr>
                    <td>${t.date}</td>
                    <td>${t.customer}</td>
                    <td>${t.amount}</td>
                    <td><span class="badge bg-success">${t.status}</span></td>
                  </tr>
                `).join('');

                serviceModal.show();
              });
            });
          });
        </script>

      
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

      // Customer modal functionality
      document.addEventListener('DOMContentLoaded', function() {
        const customerModal = new bootstrap.Modal(document.getElementById('customerModal'));
        
        // Sample customer data with specific details
        const customerDetails = {
          'John Smith': {
            purchases: [
              { date: '2024-01-15', item: 'Garden Wedding Package (150 guests)', amount: 150000 },
              { date: '2023-12-20', item: 'Anniversary Celebration Package', amount: 75000 },
              { date: '2023-11-30', item: 'Premium Photo & Video Coverage', amount: 45000 },
              { date: '2023-10-15', item: 'Corporate Year-End Event', amount: 120000 }
            ],
            monthlyData: {
              labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
              values: [85000, 95000, 120000, 45000, 75000, 150000]
            }
          },
          'Sarah Johnson': {
            purchases: [
              { date: '2024-01-12', item: 'Luxe Debut Package (200 guests)', amount: 180000 },
              { date: '2023-12-15', item: 'Christmas Party Setup & Catering', amount: 85000 },
              { date: '2023-11-25', item: 'Family Reunion Package', amount: 65000 },
              { date: '2023-10-08', item: 'Product Launch Event', amount: 95000 }
            ],
            monthlyData: {
              labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
              values: [45000, 75000, 95000, 65000, 85000, 180000]
            }
          },
          'Mike Wilson': {
            purchases: [
              { date: '2024-01-10', item: 'Corporate Conference Full Package', amount: 250000 },
              { date: '2023-12-18', item: 'Business Summit & Catering', amount: 175000 },
              { date: '2023-11-28', item: 'Team Building Event Package', amount: 85000 },
              { date: '2023-10-20', item: 'Award Ceremony Setup', amount: 120000 }
            ],
            monthlyData: {
              labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
              values: [95000, 110000, 120000, 85000, 175000, 250000]
            }
          },
          'Emily Brown': {
            purchases: [
              { date: '2024-01-08', item: 'Sweet 16 Celebration Package', amount: 95000 },
              { date: '2023-12-12', item: 'New Year Party All-In Package', amount: 150000 },
              { date: '2023-11-20', item: 'Baby Shower Premium Setup', amount: 45000 },
              { date: '2023-10-05', item: 'Halloween Party Package', amount: 75000 }
            ],
            monthlyData: {
              labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
              values: [55000, 65000, 75000, 45000, 150000, 95000]
            }
          },
          'David Lee': {
            purchases: [
              { date: '2024-01-05', item: 'Silver Wedding Anniversary Package', amount: 200000 },
              { date: '2023-12-22', item: 'Holiday Corporate Dinner', amount: 145000 },
              { date: '2023-11-15', item: 'Engagement Party Package', amount: 85000 },
              { date: '2023-10-28', item: 'Birthday Milestone Celebration', amount: 95000 }
            ],
            monthlyData: {
              labels: ['Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
              values: [65000, 75000, 95000, 85000, 145000, 200000]
            }
          }
        };

        // View button click handler
        document.querySelectorAll('.view-customer').forEach(button => {
          button.addEventListener('click', function() {
            const customerName = this.dataset.name;
            const data = {
              name: customerName,
              email: this.dataset.email,
              phone: this.dataset.phone,
              total: this.dataset.total,
              purchases: customerDetails[customerName]?.purchases || [],
              monthlyData: customerDetails[customerName]?.monthlyData || {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                values: [0, 0, 0, 0, 0, 0]
              }
            };

            // Update modal content
            updateModalContent(data);
            customerModal.show();
            setTimeout(initializeSparklines, 100);
          });
        });

        // Helper function to update modal content
        function updateModalContent(data) {
          document.getElementById('customerName').textContent = data.name;
          document.getElementById('customerEmail').textContent = data.email;
          document.getElementById('customerPhone').textContent = data.phone;
          document.getElementById('customerTotal').textContent = data.total;

          // Update purchase history table
          const tbody = document.querySelector('#customerModal .table tbody');
          tbody.innerHTML = data.purchases.map(purchase => `
            <tr>
              <td>${purchase.date}</td>
              <td>${purchase.item}</td>
              <td>₱${purchase.amount.toLocaleString()}</td>
            </tr>
          `).join('');

          // Update chart
          updateChart(data);
        }

        // Helper function to update chart
        function updateChart(data) {
          const ctx = document.getElementById('customerChart').getContext('2d');
          if (window.customerChart) {
            window.customerChart.destroy();
          }
          
          window.customerChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: data.monthlyData.labels,
              datasets: [{
                label: 'Monthly Bookings',
                data: data.monthlyData.values,
                borderColor: '#007bff',
                backgroundColor: 'rgba(0, 123, 255, 0.1)',
                tension: 0.3,
                fill: true
              }]
            },
            options: {
              responsive: true,
              plugins: {
                legend: { position: 'top' },
                title: {
                  display: true,
                  text: `Booking History - ${data.name}`
                }
              },
              scales: {
                y: {
                  beginAtZero: true,
                  ticks: {
                    callback: value => '₱' + value.toLocaleString()
                  }
                }
              },
              animation: {
                duration: 1000,
                easing: 'easeInOutQuart'
              }
            }
          });
        }
      });

    </script>

<script>
// Customer modal functionality
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.view-customer').forEach(button => {
    button.addEventListener('click', function() {
      const data = this.dataset;
      const modal = new bootstrap.Modal(document.getElementById('customerModal'));
      
      if (data.name === "John Smith") {
        // Special data for John Smith
        const johnSmithData = {
          customerId: "CS12345",
          memberSince: "January 15, 2023",
          totalBookings: "15 events",
          loyaltyStatus: "Premium Member",
          bookings: [
            {
              id: "BK00123",
              date: "2024-01-15",
              eventType: "Wedding",
              package: "Garden Wedding Package (150 guests)",
              status: "Completed",
              amount: 150000
            },
            {
              id: "BK00122",
              date: "2023-12-20",
              eventType: "Corporate",
              package: "Year-End Party Package",
              status: "Completed",
              amount: 85000
            },
            {
              id: "BK00121",
              date: "2023-11-30",
              eventType: "Wedding",
              package: "Premium Photo & Video Coverage",
              status: "Completed",
              amount: 45000
            },
            {
              id: "BK00120",
              date: "2023-10-15",
              eventType: "Corporate",
              package: "Corporate Conference Package",
              status: "Completed",
              amount: 120000
            }
          ],
          packagePreferences: [
            { name: "Wedding Packages", percentage: 45, color: "primary" },
            { name: "Corporate Events", percentage: 30, color: "info" },
            { name: "Birthday Celebrations", percentage: 25, color: "success" }
          ]
        };

        // Update customer info
        document.getElementById('customerName').textContent = data.name;
        document.getElementById('customerEmail').textContent = data.email;
        document.getElementById('customerPhone').textContent = data.phone;
        document.querySelector('.card-header small').textContent = `ID: #${johnSmithData.customerId}`;
        document.querySelector('.info-item:nth-child(4) p').textContent = johnSmithData.memberSince;
        document.querySelector('.info-item:nth-child(5) p').textContent = johnSmithData.totalBookings;

        // Update booking history table
        const tbody = document.querySelector('#bookingHistory');
        tbody.innerHTML = johnSmithData.bookings.map(booking => `
          <tr>
            <td>${booking.id}</td>
            <td>${booking.date}</td>
            <td>${booking.eventType}</td>
            <td>${booking.package}</td>
            <td>${booking.package}</td>
            <td><span class="badge bg-success">${booking.status}</span></td>
            <td>₱${booking.amount.toLocaleString()}</td>
            <td>
              <canvas class="booking-sparkline" 
                      width="100" 
                      height="30" 
                      data-values="${generateSparklineData()}"
              ></canvas>
            </td>
          </tr>
        `).join('');

        // Update package preferences
        const preferencesContainer = document.querySelector('.package-item').parentElement;
        preferencesContainer.innerHTML = johnSmithData.packagePreferences.map(pref => `
          <div class="package-item">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="fw-semibold">${pref.name}</span>
              <span class="badge bg-${pref.color}">${pref.percentage}%</span>
            </div>
            <div class="progress" style="height: 8px;">
              <div class="progress-bar bg-${pref.color}" role="progressbar" style="width: ${pref.percentage}%"></div>
            </div>
          </div>
        `).join('');
      }

      modal.show();
      setTimeout(initializeSparklines, 100);
      setTimeout(() => {
        initializeMiniCharts();
      }, 100);
    });
  });
});

function generateSparklineData() {
  // Generate random trend data for demonstration
  return JSON.stringify(Array.from({length: 7}, () => Math.floor(Math.random() * 100)));
}

// Initialize sparklines after table population
function initializeSparklines() {
  document.querySelectorAll('.booking-sparkline').forEach(canvas => {
    const ctx = canvas.getContext('2d');
    const values = JSON.parse(canvas.dataset.values);
    
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: Array(values.length).fill(''),
        datasets: [{
          data: values,
          borderColor: '#28a745',
          borderWidth: 1,
          fill: true,
          backgroundColor: 'rgba(30, 89, 44, 0.1)',
          pointRadius: 0,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            enabled: false
          }
        },
        scales: {
          x: {
            display: false
          },
          y: {
            display: false
          }
        },
        animation: {
          duration: 1000,
          easing: 'easeOutQuart'
        }
      }
    });
  });
}

function generateTrendData(baseAmount) {
  // Generate 6 months of trend data based on the booking amount
  const values = [];
  for (let i = 0; i < 6; i++) {
    // Create some variation around the base amount
    const variation = baseAmount * (0.5 + Math.random() * 0.5);
    values.push(Math.round(variation));
  }
  return JSON.stringify(values);
}

function initializeMiniCharts() {
  document.querySelectorAll('.booking-trend').forEach(canvas => {
    const ctx = canvas.getContext('2d');
    const values = JSON.parse(canvas.dataset.values);
    
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: Array(values.length).fill(''),
        datasets: [{
          data: values,
          borderColor: '#1e4d2b',
          borderWidth: 1.5,
          fill: true,
          backgroundColor: 'rgba(30, 77, 43, 0.1)',
          pointRadius: 0,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            enabled: true,
            callbacks: {
              label: function(context) {
                return '₱' + context.raw.toLocaleString();
              }
            }
          }
        },
        scales: {
          x: {
            display: false
          },
          y: {
            display: false,
            min: 0
          }
        },
        animation: {
          duration: 800,
          easing: 'easeOutQuart'
        }
      }
    });
  });
}

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
document.querySelectorAll('.dropdown-item[data-export]').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const exportType = this.dataset.export;
        const table = document.querySelector('.table');
        const rows = Array.from(table.querySelectorAll('tbody tr'));
        const headers = Array.from(table.querySelectorAll('thead th')).map(th => th.textContent);
        
        // Get data excluding the last column (action buttons)
        const data = rows.map(row => {
            const cells = Array.from(row.querySelectorAll('td'));
            return cells.slice(0, -1).map(td => td.textContent.trim());
        });

        switch(exportType) {
            case 'excel':
                exportToExcel(headers.slice(0, -1), data);
                break;
        }
    });
});

function exportToExcel(headers, data) {
    const worksheet = XLSX.utils.aoa_to_sheet([headers, ...data]);
    const workbook = XLSX.utils.book_new();
    
    // Adjust column widths
    const colWidths = headers.map(h => ({wch: Math.max(h.length, 15)}));
    worksheet['!cols'] = colWidths;
    
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Service_Product_Report');
    XLSX.writeFile(workbook, 'service-product-report.xlsx');
}
</script>

<script>
function downloadRow(element, format) {
    const row = element.closest('tr');
    const cells = Array.from(row.cells);
    const headers = Array.from(row.parentElement.parentElement.querySelector('thead tr').cells)
                        .map(th => th.textContent.trim());
    
    // Get data excluding the last column (action button)
    const data = cells.slice(0, -1).map(cell => cell.textContent.trim());

    // Create workbook
    const worksheet = XLSX.utils.aoa_to_sheet([headers.slice(0, -1), data]);
    const workbook = XLSX.utils.book_new();
    
    // Set column widths
    const colWidths = headers.map(h => ({wch: Math.max(h.length, 15)}));
    worksheet['!cols'] = colWidths;
    
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Service_Product_Details');
    
    // Generate filename from service/product name
    const filename = `${data[0].toLowerCase().replace(/\s+/g, '-')}-details.xlsx`;
    XLSX.writeFile(workbook, filename);
}
</script>

    <script>
      // Add this function to filter table rows by date
      function applyDateFilter() {
        const filterValue = document.getElementById('dateFilter').value;
        const tableRows = document.querySelectorAll('tbody tr');
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        tableRows.forEach(row => {
          const dateCell = row.cells[0]; // Get first column containing the date
          const [year, month, day] = dateCell.textContent.split('-').map(Number);
          const rowDate = new Date(year, month - 1, day);
          rowDate.setHours(0, 0, 0, 0);

          let showRow = false;

          switch(filterValue) {
            case 'today':
              showRow = rowDate.getTime() === today.getTime();
              break;
            case 'yesterday':
              const yesterday = new Date(today);
              yesterday.setDate(today.getDate() - 1);
              showRow = rowDate.getTime() === yesterday.getTime();
              break;
            case 'last7':
              const last7 = new Date(today);
              last7.setDate(today.getDate() - 7);
              showRow = rowDate >= last7 && rowDate <= today;
              break;
            case 'last30':
              const last30 = new Date(today);
              last30.setDate(today.getDate() - 30);
              showRow = rowDate >= last30 && rowDate <= today;
              break;
            case 'thisMonth':
              showRow = rowDate.getMonth() === today.getMonth() && 
                       rowDate.getFullYear() === today.getFullYear();
              break;
            case 'lastMonth':
              const lastMonth = new Date(today.getFullYear(), today.getMonth() - 1, 1);
              const lastMonthEnd = new Date(today.getFullYear(), today.getMonth(), 0);
              showRow = rowDate >= lastMonth && rowDate <= lastMonthEnd;
              break;
            case 'thisYear':
              showRow = rowDate.getFullYear() === today.getFullYear();
              break;
            default:
              showRow = true;
          }

          row.style.display = showRow ? '' : 'none';
        });

        // Update dropdown button text
        const filterText = document.getElementById('dateFilter').options[document.getElementById('dateFilter').selectedIndex].text;
        document.getElementById('dateFilterBtn').textContent = `Filter: ${filterText}`;
      }

      // Initialize filter on page load
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('dateFilter').addEventListener('change', applyDateFilter);
      });
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


    <!-- Customer Details Modal -->
    <div class="modal fade" id="customerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content shadow-lg rounded-4">
      <div class="modal-header bg-gradient-primary text-white">
        <h5 class="modal-title">Customer Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 py-3">
        <div class="row g-4">
          <!-- Customer Info -->
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm rounded-3">
              <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Customer Info</h5>
                <small class="text-muted">ID: #CS12345</small>
              </div>
              <div class="card-body d-flex flex-column gap-3">
                <p class="fw-semibold">Full Name: <span class="text-muted" id="customerName">John Smith</span></p>
                <p class="fw-semibold">Email: <span class="text-muted" id="customerEmail">john.smith@email.com</span></p>
                <p class="fw-semibold">Phone: <span class="text-muted" id="customerPhone">+1 234-567-8900</span></p>
                <p class="fw-semibold">Member Since: <span class="text-muted">January 15, 2023</span></p>
                <p class="fw-semibold">Total Bookings: <span class="text-muted">15 events</span></p>
                <p class="fw-semibold">Loyalty Status: <span class="badge bg-success">Premium Member</span></p>
              </div>
            </div>
          </div>
          <!-- Recent Transactions -->
          <div class="col-md-6 col-lg-8">
  <div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-light d-flex justify-content-between">
      <h5 class="mb-0">Recent Bookings</h5>
      <div>
        <button class="btn btn-sm btn-outline-primary">Filter</button>
        <button class="btn btn-sm btn-outline-primary">Export</button>
      </div>
    </div>
    <div class="card-body p-3">
      <div class="table-responsive">
        <table class="table table-sm">
          <thead class="table-light">
            <tr>
              <th>Booking ID</th>
              <th>Date</th>
              <th>Event Type</th>
              <th>Package</th>
              <th>Status</th>
              <th>Amount</th>
              <th style="width: 120px;">Monthly Trend</th>
            </tr>
          </thead>
          <tbody id="bookingHistory">
            <tr>
              <td>#12345</td>
              <td>2025-03-27</td>
              <td>Wedding</td>
              <td>Gold Package</td>
              <td><span class="badge bg-success">Confirmed</span></td>
              <td>$1,500</td>
              <td>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-primary" style="width: 70%;"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

          <!-- Charts -->
          <div class="col-md-6">
  <div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-light">
      <h5 class="mb-0">Booking History</h5>
    </div>
    <div class="card-body">
      <canvas id="customerChart" height="300"></canvas>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("customerChart").getContext("2d");
    var customerChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
          label: "Bookings",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: "rgba(75, 192, 192, 0.2)",
          borderColor: "rgba(75, 192, 192, 1)",
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

          <!-- Package Preferences -->
          <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-3">
              <div class="card-header bg-light">
                <h5 class="mb-0">Package Preferences</h5>
              </div>
              <div class="card-body d-flex flex-column gap-3">
                <div class="progress-item">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-semibold">Wedding Packages</span>
                    <span class="badge bg-primary">45%</span>
                  </div>
                  <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-primary" style="width: 45%"></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-semibold">Corporate Events</span>
                    <span class="badge bg-info">30%</span>
                  </div>
                  <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-info" style="width: 30%"></div>
                  </div>
                </div>
                <div class="progress-item">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-semibold">Birthday Celebrations</span>
                    <span class="badge bg-success">25%</span>
                  </div>
                  <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit Customer</button>
      </div>
    </div>
  </div>
</div>


</body>


</html>
