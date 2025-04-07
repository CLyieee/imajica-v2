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
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon icon-base ti tabler-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Main Menu">Main Menu</span>
        </li>

        <li class="menu-item {{ request()->is('booking') ? 'active' : '' }}">
            <a href="/booking" class="menu-link">
                <i class="menu-icon icon-base ti tabler-calendar"></i>
                <div data-i18n="Booking">Booking</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('sales-transaction') || request()->is('commision-employee') || request()->is('employee-sales') || request()->is('purchase') || request()->is('void-logs') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-chart-pie "></i>
                <div data-i18n="Accounting">Accounting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('sales-transaction') ? 'active' : '' }}">
                    <a href="/sales-transaction" class="menu-link">
                        <div data-i18n="Sales Transaction">Sales Transaction</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('commision-employee') ? 'active' : '' }}">
                    <a href="/commision-employee" class="menu-link">
                        <div data-i18n="Commision for Employee">Commision for Employee</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('employee-sales') ? 'active' : '' }}">
                    <a href="/employee-sales" class="menu-link">
                        <div data-i18n="Employee Sales">Employee Sales</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('purchase') ? 'active' : '' }}">
                    <a href="/purchase" class="menu-link">
                        <div data-i18n="Purchase">Purchase</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('void-logs') ? 'active' : '' }}">
                    <a href="/void-logs" class="menu-link">
                        <div data-i18n="Void Logs">Void Logs</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-services') || request()->is('services-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-plus"></i>
                <div data-i18n="Services">Services</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-services') ? 'active' : '' }}">
                    <a href="/new-services" class="menu-link">
                        <div data-i18n="New Services">New Services</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('services-list') ? 'active' : '' }}">
                    <a href="/services-list" class="menu-link">
                        <div data-i18n="Services List">Services List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('product-list') || request()->is('add-product') || request()->is('category-list') || request()->is('order-list') || request()->is('order-details') || request()->is('add-order') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-shopping-cart"></i>
                <div data-i18n="Product Management">Product Management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('product-list') || request()->is('add-product') || request()->is('category-list') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Products">Products</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('product-list') ? 'active' : '' }}">
                            <a href="/product-list" class="menu-link">
                                <div data-i18n="Product List">Product List</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('add-product') ? 'active' : '' }}">
                            <a href="/add-product" class="menu-link">
                                <div data-i18n="Add Product">Add Product</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('category-list') ? 'active' : '' }}">
                            <a href="/category-list" class="menu-link">
                                <div data-i18n="Category List">Category List</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item {{ request()->is('order-list') || request()->is('order-details') || request()->is('add-order') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Order">Order</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('order-list') ? 'active' : '' }}">
                            <a href="/order-list" class="menu-link">
                                <div data-i18n="Order List">Order List</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('add-order') ? 'active' : '' }}">
                            <a href="/add-order" class="menu-link">
                                <div data-i18n="Add Order">Add Order</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('order-details') ? 'active' : '' }}">
                            <a href="/order-details" class="menu-link">
                                <div data-i18n="Order Details">Order Details</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-supplier') || request()->is('supplier-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-truck"></i>
                <div data-i18n="Supplier">Supplier</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-supplier') ? 'active' : '' }}">
                    <a href="/new-supplier" class="menu-link">
                        <div data-i18n="New Supplier">New Supplier</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('supplier-list') ? 'active' : '' }}">
                    <a href="/supplier-list" class="menu-link">
                        <div data-i18n="Supplier List">Supplier List</div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="menu-item {{ request()->is('new-coupon') || request()->is('coupon-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-layout-board"></i>
                <div data-i18n="Coupon">Coupon</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-coupon') ? 'active' : '' }}">
                    <a href="/new-coupon" class="menu-link">
                        <div data-i18n="New Coupon">New Coupon</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('coupon-list') ? 'active' : '' }}">
                    <a href="/coupon-list" class="menu-link">
                        <div data-i18n="Coupon List">Coupon List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-coupon') || request()->is('expenses-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-layout-board"></i>
                <div data-i18n="Expenses">Expenses</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-expenses') ? 'active' : '' }}">
                    <a href="/new-expenses" class="menu-link">
                        <div data-i18n="New Expenses">New Expenses</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('expenses-list') ? 'active' : '' }}">
                    <a href="/expenses-list" class="menu-link">
                        <div data-i18n="Expenses List">Expenses List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-patient') || request()->is('patient-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-users"></i>
                <div data-i18n="Patient">Patient</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-patient') ? 'active' : '' }}">
                    <a href="/new-patient" class="menu-link">
                        <div data-i18n="New Patient">New Patient</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('patient-list') ? 'active' : '' }}">
                    <a href="/patient-list" class="menu-link">
                        <div data-i18n="Patient List">Patient List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-staff') || request()->is('staff-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-user"></i>
                <div data-i18n="Staff">Staff</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-staff') ? 'active' : '' }}">
                    <a href="/new-staff" class="menu-link">
                        <div data-i18n="New Staff">New Staff</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('staff-list') ? 'active' : '' }}">
                    <a href="/staff-list" class="menu-link">
                        <div data-i18n="Staff List">Staff List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-branch') || request()->is('branch-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-map"></i>
                <div data-i18n="Branch">Branch</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-branch') ? 'active' : '' }}">
                    <a href="/new-branch" class="menu-link">
                        <div data-i18n="New Branch">New Branch</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('branch-list') ? 'active' : '' }}">
                    <a href="/branch-list" class="menu-link">
                        <div data-i18n="Branch List">Branch List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('new-loyalty') || request()->is('loyalty-list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-id"></i>
                <div data-i18n="Loyalty Rewards">Loyalty Rewards</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-loyalty') ? 'active' : '' }}">
                    <a href="/new-loyalty" class="menu-link">
                        <div data-i18n="New Loyalty Reward">New Loyalty Reward</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('loyalty-list') ? 'active' : '' }}">
                    <a href="/loyalty-list" class="menu-link">
                        <div data-i18n="Loyalty Rewards List">
                            Loyalty Rewards List
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{  request()->is('customer-report') || request()->is('service-product') || request()->is('employee-report') || request()->is('expenses-report') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-chart-pie "></i>
                <div data-i18n="Reports">Reports</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('customer-report') ? 'active' : '' }}">
                    <a href="/customer-report" class="menu-link">
                        <div data-i18n="Customer Report">Customer Report</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('service-product') ? 'active' : '' }}">
                    <a href="/service-product" class="menu-link">
                        <div data-i18n="Service/Product Report">Service/Product Report</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('employee-report') ? 'active' : '' }}">
                    <a href="/employee-report" class="menu-link">
                        <div data-i18n="Employee Report">Employee Report</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('expenses-report') ? 'active' : '' }}">
                    <a href="/expenses-report" class="menu-link">
                        <div data-i18n="Expenses Report">Expenses Report</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-settings"></i>
                <div data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('new-user') ? 'active' : '' }}">
                    <a href="/new-user" class="menu-link">
                        <div data-i18n="New User">New User</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('user-list') ? 'active' : '' }}">
                    <a href="/user-list" class="menu-link">
                        <div data-i18n="Users List">Users List</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item">
            <form method="POST" action="">
                @csrf
                <a href="javascript:void(0);" class="menu-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="menu-icon icon-base ti tabler-logout"></i>
                    <div data-i18n="Logout">Logout</div>
                </a>
            </form>
        </li>
    </ul>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Prevent default behavior for menu toggle links
        const menuToggles = document.querySelectorAll('.menu-toggle');
        menuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Find the parent menu item
                const menuItem = this.closest('.menu-item');
                
                // Toggle open class only
                menuItem.classList.toggle('open');
                
                // Stop event propagation
                e.stopPropagation();
            });
        });
        
        // Ensure menu links don't lose their text when clicked
        const menuLinks = document.querySelectorAll('.menu-link');
        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Only prevent default for javascript:void(0) links
                if (this.getAttribute('href') === 'javascript:void(0);') {
                    e.preventDefault();
                }
            });
        });
        
        // Add CSS to fix menu transitions and styling
        const style = document.createElement('style');
        style.textContent = `
            /* Core fix to prevent text disappearing */
            [data-i18n] {
                display: inline-block !important;
                visibility: visible !important;
                opacity: 1 !important;
                position: static !important;
                height: auto !important;
                width: auto !important;
                overflow: visible !important;
                pointer-events: auto !important;
                clip: auto !important;
                clip-path: none !important;
                z-index: auto !important;
                transform: none !important;
            }
            
            /* Disable all animations on menu elements */
            .menu-item, .menu-link, .menu-toggle, .menu-sub, [data-i18n] {
                transition: none !important;
                animation: none !important;
            }
            
            /* Override any theme styles that might hide content */
            .layout-menu .menu-inner .menu-item .menu-link div[data-i18n] {
                position: static !important;
                opacity: 1 !important;
                visibility: visible !important;
                display: block !important;
            }
            
            /* Remove any transforms that might affect visibility */
            .menu-item, .menu-link, .menu-sub {
                transform: none !important;
            }
            
            /* Remove arrow icons from menu toggles */
            .menu-toggle::after {
                display: none !important;
            }
            
            /* Fix submenu display */
            .menu-item.open > .menu-sub {
                max-height: 2000px !important;
                height: auto !important;
                overflow: visible !important;
            }
        `;
        document.head.appendChild(style);
        
        // Ensure active menu items with submenu are opened by default
        const activeSubmenuItems = document.querySelectorAll('.menu-item.active');
        activeSubmenuItems.forEach(item => {
            // Find parent menu items and open them
            let parent = item.closest('.menu-item:not(.active)');
            while (parent) {
                parent.classList.add('open');
                parent = parent.parentElement.closest('.menu-item:not(.active)');
            }
        });
        
        // Apply direct inline styles to all menu text elements
        function forceMenuTextVisibility() {
            document.querySelectorAll('[data-i18n]').forEach(el => {
                // Force element to be visible with inline styles
                Object.assign(el.style, {
                    display: 'block',
                    visibility: 'visible',
                    opacity: '1',
                    position: 'static',
                    height: 'auto',
                    width: 'auto',
                    overflow: 'visible',
                    transform: 'none',
                    clipPath: 'none'
                });
                
                // Create a backup of the original text
                if (!el.hasAttribute('data-original-text')) {
                    el.setAttribute('data-original-text', el.textContent);
                }
                
                // Ensure text content is present
                if (!el.textContent.trim()) {
                    el.textContent = el.getAttribute('data-original-text') || 
                                    el.getAttribute('data-i18n') || 
                                    'Menu Item';
                }
            });
        }
        
        // Apply visibility fixes on multiple events
        forceMenuTextVisibility();
        window.addEventListener('load', forceMenuTextVisibility);
        window.addEventListener('resize', forceMenuTextVisibility);
        window.addEventListener('scroll', forceMenuTextVisibility);
        
        // Run visibility check periodically
        setInterval(forceMenuTextVisibility, 500);
        
        // MutationObserver to ensure text remains visible if DOM changes
        const observer = new MutationObserver(forceMenuTextVisibility);
        
        observer.observe(document.querySelector('.menu-inner'), {
            childList: true,
            subtree: true,
            attributes: true,
            characterData: true
        });
    });
</script>