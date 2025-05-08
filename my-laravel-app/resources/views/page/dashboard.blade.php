@extends('layouts.app')

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
  <link rel="stylesheet" href="{{ asset(path: 'assets/css/sidebar-fix.css') }}" />

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
        

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Welcome Banner -->
            <div class="row mb-4">
              <div class="col-12">
                @if(count($todayBirthdays) > 0 || count($upcomingBirthdays) > 0)
                  <!-- Birthday Banner -->
                  <div class="card bg-primary text-white border-0 shadow">
                    <div class="card-body p-4 d-flex justify-content-between align-items-center">
                      <div>
                        <h3 class="text-white fw-semibold mb-1">🎉 Happy Birthday to Our Valued Clients!</h3>
                        <p class="text-white opacity-75 mb-0">We have {{ count($todayBirthdays) }} birthday{{ count($todayBirthdays) > 1 ? 's' : '' }} today</p>
                      </div>
                      <div class="d-none d-md-block">
                        <img src="{{ asset('logo/imajica.png') }}" alt="Imajica Aesthetics" class="img-fluid" style="max-height: 120px; border-radius: 10px;">
                      </div>
                    </div>
                  </div>
                @else
                  <!-- Default Welcome Banner -->
                  <div class="card bg-primary text-white border-0 shadow">
                    <div class="card-body p-4 d-flex justify-content-between align-items-center">
                      <div>
                        <h3 class="text-white fw-semibold mb-1">Welcome to Imajica Aesthetics</h3>
                        <p class="text-white opacity-75 mb-2">Experience luxury beauty and wellness treatments tailored just for you.</p>
                        <a href="{{ route('page.booking') }}" class="btn btn-light text-primary">
                          <i class="ti tabler-calendar-plus me-1"></i>
                          Book an Appointment
                        </a>
                      </div>
                      <div class="d-none d-md-block">
                        <img src="{{ asset('logo/imajica.png') }}" alt="Imajica Aesthetics" class="img-fluid" style="max-height: 120px; border-radius: 10px;">
                      </div>
                    </div>
                  </div>
                @endif
              </div>
            </div>

            <!-- KPI Cards Row -->
            <div class="row g-4 mb-4">
              <div class="col-sm-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar rounded bg-label-primary p-2 me-3">
                        <i class="ti tabler-calendar ti-md"></i>
                      </div>
                      <div>
                        <h5 class="mb-0">{{ count($bookings) }}</h5>
                        <span class="badge bg-label-{{ $bookingGrowth >= 0 ? 'success' : 'danger' }}">{{ $bookingGrowth >= 0 ? '+' : '' }}{{ $bookingGrowth }}%</span>
                      </div>
                    </div>
                    <small class="text-muted">Total Completed Bookings</small>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar rounded bg-label-success p-2 me-3">
                        <i class="ti tabler-shopping-cart ti-md"></i>
                      </div>
                      <div>
                        <h5 class="mb-0">₱100,000</h5>
                        <span class="badge bg-label-success">+8.4%</span>
                      </div>
                    </div>
                    <small class="text-muted">Total Revenue</small>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar rounded bg-label-info p-2 me-3">
                        <i class="ti tabler-users ti-md"></i>
                      </div>
                      <div>
                        <h5 class="mb-0">{{ count($patients) }}</h5>
                        <span class="badge bg-label-{{ $patientGrowth > 0 ? 'success' : 'danger' }}">{{ $patientGrowth > 0 ? '+' : '' }}{{ number_format($patientGrowth, 1) }}%</span>
                      </div>
                    </div>
                    <small class="text-muted">Total Patients</small>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                      <div class="avatar rounded bg-label-warning p-2 me-3">
                        <i class="ti tabler-receipt ti-md"></i>
                      </div>
                      <div>
                        <h5 class="mb-0">₱50,000</h5>
                        <span class="badge bg-label-warning">+3.2%</span>
                      </div>
                    </div>
                    <small class="text-muted">Total Expenses</small>
                  </div>
                </div>
              </div>
            </div>

            <!-- Charts Row -->
            <div class="row g-4 mb-4">
              <div class="col-md-8">
                <div class="card shadow-sm">
                  <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="card-title mb-0">Revenue Overview</h5>
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        2024
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">2024</a></li>
                        <li><a class="dropdown-item" href="#">2023</a></li>
                        <li><a class="dropdown-item" href="#">2022</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="revenueChart" class="chartjs" height="300"></canvas>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-header py-3">
                    <h5 class="card-title mb-0">Booking Status</h5>
                  </div>
                  <div class="card-body">
                    <canvas id="bookingStatusChart" class="chartjs" height="290"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Patient Birthdays and Services Charts -->
            <div class="row g-4 mb-4">
              <div class="col-md-5">
                <div class="card shadow-sm h-100">
                  <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="card-title mb-0">
                      <i class="ti tabler-gift me-1 text-primary"></i>
                      Patient Birthdays
                    </h5>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#allBirthdaysModal">
                      View All
                    </button>
                  </div>
                  
                  <div class="card-body">
                    <!-- Today's Birthdays -->
                    @if(count($todayBirthdays) > 0)
                    <div class="mb-3 pb-2 border-bottom">
                      <h6 class="fw-semibold mb-2 text-primary">Today's Birthdays</h6>
                      @foreach($todayBirthdays as $patient)
                      <div class="d-flex align-items-center py-2">
                        <div class="avatar me-3">
                          <span class="avatar-initial rounded-circle bg-label-danger">
                            <i class="ti tabler-confetti"></i>
                          </span>
                        </div>
                        <div>
                          <h6 class="mb-0">{{ $patient->firstname }} {{ $patient->lastname }}</h6>
                          <small class="text-muted">{{ Carbon\Carbon::parse($patient->birthdate)->format('F d, Y') }} ({{ $patient->age }} years)</small>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    @endif
                    
                    <!-- Upcoming Birthdays -->
                    <h6 class="fw-semibold mb-2 text-primary">Upcoming Birthdays</h6>
                    @if(count($upcomingBirthdays) > 0)
                      @foreach($upcomingBirthdays->take(3) as $patient)
                      <div class="d-flex align-items-center mb-3">
                        <div class="avatar me-3">
                          <span class="avatar-initial rounded-circle bg-label-{{ $patient->daysUntil <= 7 ? 'primary' : 'success' }}">
                            <i class="ti tabler-cake"></i>
                          </span>
                        </div>
                        <div>
                          <h6 class="mb-0">{{ $patient->firstname }} {{ $patient->lastname }}</h6>
                          <div class="d-flex align-items-center">
                            <small class="text-muted me-2">{{ Carbon\Carbon::parse($patient->birthdate)->format('F d') }}</small>
                            <span class="badge bg-label-{{ $patient->daysUntil <= 7 ? 'primary' : 'success' }}">
                              In {{ $patient->daysUntil }} days
                            </span>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    @else
                      <p class="text-center text-muted">No upcoming birthdays in the next 30 days</p>
                    @endif
                  </div>
                </div>
              </div>
              
              <div class="col-md-7">
                <div class="card shadow-sm h-100">
                  <div class="card-header py-3">
                    <h5 class="card-title mb-0">Popular Services</h5>
                  </div>
                  <div class="card-body d-flex align-items-center justify-content-center">
                    <div style="height: 360px; width: 100%;">
                      <canvas id="popularServicesChart" class="chartjs"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Branch Performance Chart -->
            <div class="row mb-4">
              <div class="col-12">
                <div class="card shadow-sm">
                  <div class="card-header d-flex justify-content-between align-items-center py-3">
                    <h5 class="card-title mb-0">Branch Performance</h5>
                    <div class="dropdown">
                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        This Month
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">Last Month</a></li>
                        <li><a class="dropdown-item" href="#">This Quarter</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="branchPerformanceChart" height="250"></canvas>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
              <div class="footer-container d-flex align-items-center justify-content-between py-3">
                <div class="text-body">
                  © <script>document.write(new Date().getFullYear())</script>
                  Developed by <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
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
    document.addEventListener("DOMContentLoaded", function() {
      // Wait for Chart.js to be available
      const initCharts = () => {
        if (typeof Chart === 'undefined') {
          setTimeout(initCharts, 100);
          return;
        }

        // Revenue Overview Line Chart
        const revenueCtx = document.getElementById("revenueChart").getContext("2d");
        const revenueChart = new Chart(revenueCtx, {
          type: "line",
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
              {
                label: "Revenue 2024",
                data: [65000, 75000, 85000, 95000, 100000, 120000, 110000, 130000, 140000, 150000, 160000, 170000],
                borderColor: "#696cff",
                tension: 0.4,
                fill: true,
                backgroundColor: "rgba(105, 108, 255, 0.1)",
              },
              {
                label: "Revenue 2023",
                data: [55000, 65000, 75000, 85000, 90000, 110000, 100000, 120000, 130000, 140000, 150000, 160000],
                borderColor: "#03c3ec",
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
              legend: { position: "top" },
            },
            scales: {
              y: {
                beginAtZero: true,
                ticks: {
                  callback: function(value) {
                    return "₱" + value.toLocaleString();
                  },
                },
              },
            },
          },
        });

        // Popular Services Pie Chart
        const servicesCtx = document.getElementById("popularServicesChart").getContext("2d");
        const popularServicesChart = new Chart(servicesCtx, {
          type: "pie",
          data: {
            labels: {!! json_encode($services->pluck('service_name')) !!},
            datasets: [{
              data: {!! json_encode($services->pluck('service_cost')) !!},
              backgroundColor: ["#696cff", "#03c3ec", "#ffab00", "#28c76f", "#ff3e1d", "#8592a3", "#4b4b4b", "#7367f0", "#82868b", "#40bfff"],
            }],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
              padding: {
                top: 10,
                bottom: 10,
                left: 20,
                right: 20
              }
            },
            plugins: {
              legend: { 
                position: "right",
                align: "center",
                labels: {
                  boxWidth: 18,
                  padding: 20,
                  font: {
                    size: 14
                  }
                }
              },
              tooltip: {
                titleFont: {
                  size: 14
                },
                bodyFont: {
                  size: 14
                },
                callbacks: {
                  label: function(context) {
                    const label = context.label || '';
                    const value = context.raw || 0;
                    const total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                    const percentage = ((value / total) * 100).toFixed(1);
                    return `${label}: ₱${value.toLocaleString()} (${percentage}%)`;
                  }
                }
              }
            },
          },
        });

        // Branch Performance Chart
        const branchPerformanceChart = new Chart(
          document.getElementById("branchPerformanceChart").getContext("2d"),
          {
            type: "bar",
            data: {
              labels: {!! json_encode($branchData->pluck('name')) !!},
              datasets: [
                {
                  label: "Bookings",
                  data: {!! json_encode($branchData->pluck('bookings')) !!},
                  backgroundColor: "#696cff",
                },
                {
                  label: "Revenue",
                  data: {!! json_encode($branchData->pluck('revenue')) !!},
                  backgroundColor: "#28c76f",
                },
              ],
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                legend: { position: "top" },
              },
              scales: {
                y: {
                  beginAtZero: true,
                  ticks: {
                    callback: function(value) {
                      return this.chart.data.datasets[1].label === "Revenue" ? "₱" + value.toLocaleString() : value;
                    },
                  },
                },
              },
            }
          }
        );

        // Booking Status Donut Chart
        const bookingStatusCtx = document.getElementById("bookingStatusChart").getContext("2d");
        const bookingStatusChart = new Chart(bookingStatusCtx, {
          type: "doughnut",
          data: {
            labels: ["Completed", "Pending", "Cancelled", "Paid", "No Show"],
            datasets: [{
              data: [
                {{ $bookings->where('status', 'Completed')->count() }},
                {{ $bookings->where('status', 'Pending')->count() }},
                {{ $bookings->where('status', 'Cancelled')->count() }},
                {{ $bookings->where('status', 'Paid')->count() }},
                {{ $bookings->where('status', 'No Show')->count() }}
              ],
              backgroundColor: [
                "#28c76f",  // Completed - Green
                "#ffab00",  // Pending - Yellow
                "#ff3e1d",  // Cancelled - Red
                "#00cfe8",  // Paid - Blue
                "#6c757d"   // No Show - Gray
              ],
              borderWidth: 0,
              cutout: "70%",
            }],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { position: "right", align: "center" },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    const label = context.label || "";
                    const value = context.parsed;
                    const total = context.dataset.data.reduce((acc, curr) => acc + curr, 0);
                    const percentage = ((value / total) * 100).toFixed(1);
                    return `${label}: ${value} (${percentage}%)`;
                  },
                },
              },
            },
          },
        });
      };

      // Start initialization
      initCharts();
    });
  </script>

  <style>
    .avatar {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
    }
    
    .card {
      border-radius: 0.5rem;
      border: none;
    }
    
    .card-header {
      background-color: transparent;
      border-bottom: 1px solid rgba(67, 89, 113, 0.1);
    }
    
    .bg-label-primary {
      background-color: rgba(105, 108, 255, 0.16) !important;
      color: #696cff !important;
    }
    
    .bg-label-success {
      background-color: rgba(40, 199, 111, 0.16) !important;
      color: #28c76f !important;
    }
    
    .bg-label-info {
      background-color: rgba(3, 195, 236, 0.16) !important;
      color: #03c3ec !important;
    }
    
    .bg-label-warning {
      background-color: rgba(255, 171, 0, 0.16) !important;
      color: #ffab00 !important;
    }
    
    .bg-label-danger {
      background-color: rgba(255, 62, 29, 0.16) !important;
      color: #ff3e1d !important;
    }
    
    .bg-primary {
      background: linear-gradient(135deg, #2b6cb0, #4299e1) !important;
    }
    
    .shadow-sm {
      box-shadow: 0 0.125rem 0.25rem rgba(67, 89, 113, 0.1) !important;
    }
    
    .badge {
      font-size: 0.75rem;
      font-weight: 500;
      padding: 0.25em 0.6em;
    }
  </style>

  <!-- Modals -->
  @include('components.dashboard.birthday_modals')

</body>

</html>