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

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/chartjs/chartjs.css') }}" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- endbuild -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/fonts/flag-icons.css')  }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset(path: 'assets/vendor/css/pages/cards-advance.css') }}" />
    <link rel="stylesheet" href="{{ asset(path:'assets/css/demo.css') }}">
    <!-- Helpers -->
    <script src="{{ asset(path: 'assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset(path: 'assets/js/config.js') }}"></script>
</head>


<aside id="layout-menu" class="layout-menu menu-vertical menu">
    <br />
    <br />
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <img src="{{ asset(path: 'logo/logo.png') }}" alt="Logo" width="100%" height="30%" />
        </a>
    </div>
    <br />
    <br />
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->

        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon icon-base ti tabler-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Main Menu">Main Menu</span>
        </li>

        <li class="menu-item">
            <a href="/booking" class="menu-link">
                <i class="menu-icon icon-base ti tabler-calendar"></i>
                <div data-i18n="Booking">Booking</div>
            </a>
        </li>


        <li class="menu-item ">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-chart-pie "></i>
                <div data-i18n="Accounting">Accounting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/sales-transaction" class="menu-link">
                        <div data-i18n="Sales Transaction">Sales Transaction</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/commision-employee" class="menu-link">
                        <div data-i18n="Commision for Employee">Commision for Employee</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/employee-sales" class="menu-link">
                        <div data-i18n="Employee Sales">Employee Sales</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/purchase" class="menu-link">
                        <div data-i18n="Purchase">Purchase</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/void-logs" class="menu-link">
                        <div data-i18n="Void Logs">Void Logs</div>
                    </a>
                </li>

            </ul>
        </li>


        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-plus"></i>
                <div data-i18n="Services">Services</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-services" class="menu-link">
                        <div data-i18n="New Services">New Services</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/services-list" class="menu-link">
                        <div data-i18n="Services List">Services List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-shopping-cart"></i>
                <div data-i18n="Product Management">Product Management</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Products">Products</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="/product-list" class="menu-link">
                                <div data-i18n="Product List">Product List</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/add-product" class="menu-link">
                                <div data-i18n="Add Product">Add Product</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/category-list" class="menu-link">
                                <div data-i18n="Category List">Category List</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Order">Order</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="/order-list" class="menu-link">
                                <div data-i18n="Order List">Order List</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/order-details" class="menu-link">
                                <div data-i18n="Order Details">Order Details</div>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>



        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">

                <i class="menu-icon icon-base ti tabler-truck"></i>
                <div data-i18n="Supplier">Supplier</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-supplier" class="menu-link">
                        <div data-i18n="New Supplier">New Supplier</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/supplier-list" class="menu-link">
                        <div data-i18n="Supplier List">Supplier List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">

                <i class="menu-icon icon-base ti tabler-layout-board"></i>
                <div data-i18n="Coupon">Coupon</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-coupon" class="menu-link">
                        <div data-i18n="New Coupon">New Coupon</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/coupon-list" class="menu-link">
                        <div data-i18n="Coupon List">Coupon List</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-users"></i>
                <div data-i18n="Patient">Patient</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-patient" class="menu-link">
                        <div data-i18n="New Patient">New Patient</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/patient-list" class="menu-link">
                        <div data-i18n="Patient List">Patient List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-user"></i>
                <div data-i18n="Staff">Staff</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-staff" class="menu-link">
                        <div data-i18n="New Staff">New Staff</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/staff-list" class="menu-link">
                        <div data-i18n="Staff List">Staff List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-map"></i>
                <div data-i18n="Branch">Branch</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-branch" class="menu-link">
                        <div data-i18n="New Branch">New Branch</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/branch-list" class="menu-link">
                        <div data-i18n="Branch List">Branch List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-file-description"></i>
                <div data-i18n="Expenses">Expenses</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="new-expense.html" class="menu-link">
                        <div data-i18n="New Expense">New Expense</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="expense-list.html" class="menu-link">
                        <div data-i18n="Expense List">Expense List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-id"></i>
                <div data-i18n="Loyalty Rewards">Loyalty Rewards</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-loyalty" class="menu-link">
                        <div data-i18n="New Loyalty Reward">New Loyalty Reward</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/loyalty-list" class="menu-link">
                        <div data-i18n="Loyalty Rewards List">
                            Loyalty Rewards List
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="reports.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-table"></i>
                <div data-i18n="Reports">Reports</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-settings"></i>
                <div data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/new-user" class="menu-link">
                        <div data-i18n="New User">New User</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/user-list" class="menu-link">
                        <div data-i18n="Users List">Users List</div>
                    </a>
                </li>
            </ul>
        </li>




        <li class="menu-item">
            <a href="/system-settings" class="menu-link">
                <i class="menu-icon icon-base ti tabler-adjustments"></i>
                <div data-i18n="System Settings">System Settings</div>
            </a>
        </li>


        <li class="menu-item">
            <a href="login.html" class="menu-link">
                <i class="menu-icon icon-base ti tabler-logout"></i>
                <div data-i18n="Logout">Logout</div>
            </a>
        </li>
    </ul>
</aside>