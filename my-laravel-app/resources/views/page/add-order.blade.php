@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Add Order | Imajica Booking System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include ('components.sidebar')

            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="icon-base ti tabler-menu-2 icon-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper px-md-0 px-2 mb-0">
                                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                                    <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="icon-base ti tabler-language icon-22px text-heading"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                                            <span>English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                                            <span>French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                                            <span>Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                                            <span>German</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /Language -->

                            <!-- Quick links -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <i class="icon-base ti tabler-layout-grid-add icon-22px text-heading"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h6 class="mb-0 me-auto">Shortcuts</h6>
                                            <a href="javascript:void(0)" class="dropdown-shortcuts-add py-2 btn btn-text-secondary rounded-pill btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts">
                                                <i class="icon-base ti tabler-plus icon-20px text-heading"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <!-- Quick links content from add-product page -->
                                    </div>
                                </div>
                            </li>

                            <!-- Style Switcher-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" id="nav-theme" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="icon-base ti tabler-sun icon-22px theme-icon-active text-heading"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light">
                                            <span><i class="icon-base ti tabler-sun icon-22px me-3"></i>Light</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark">
                                            <span><i class="icon-base ti tabler-moon-stars icon-22px me-3"></i>Dark</span>
                                        </button>
                                    </li>
                                </ul>
                            </li>

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                <a class="nav-link dropdown-toggle hide-arrow btn btn-icon btn-text-secondary rounded-pill" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <span class="position-relative">
                                        <i class="icon-base ti tabler-bell icon-22px text-heading"></i>
                                        <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-0">
                                    <!-- Notification content from add-product page -->
                                </ul>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <!-- User dropdown content from add-product page -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
     <form id="addOrderForm">
                        @csrf
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-ecommerce">
                            <!-- Add Order Header -->
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6">
                                <div class="d-flex flex-column justify-content-center">
                                    <h4 class="mb-1">Add a new Order</h4>
                                    <p class="mb-0">Create new customer order</p>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4">
                                    <div class="d-flex gap-4">
                                        <button class="btn btn-label-secondary">Discard</button>
                                        <button class="btn btn-label-primary">Save draft</button>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Order</button>
                                </div>
                            </div>

                            <div class="row">
                                <!-- First column-->
                                <div class="col-12 col-lg-8">
                                    <!-- Customer Information -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Customer Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <label class="form-label">Customer Name</label>
                                                    <input type="text" 
                                                    class="form-control"
                                                     placeholder="Customer name"
                                                     name = "customer_name"
                                                     id="customer_name"
                                                     >
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="customer@example.com" name="customer_email" id="customer_email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Details -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Order Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <label class="form-label">Order Date</label>
                                                    <input type="date" class="form-control"
                                                    name="order_date"
                                                    id="order_date"
                                                    >
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Order Time</label>
                                                    <input type="time" class="form-control"
                                                    name="order_time"
                                                    id="order_time"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Items -->
                                    <div class="card mb-4">
                                       
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Order Items</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="orderItems" style="max-height: 400px; overflow-y: auto;">
                                                <!-- Template for order items -->
                                                <div class="order-item mb-3 border rounded p-3">
                                                    <div class="row g-3">
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label">Item Name</label>
                                                            <select class="form-select" name="items[]">
                                                                <option value="">Select Item</option>
                                                                <option value="Shampooo">Shampoo</option>
                                                                <option value="Soap">Soap</option>
                                                                <option value="Water">Water</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-2">
                                                            <label class="form-label">Quantity</label>
                                                            <input type="number" class="form-control" name="quantities[]" min="1" value="1">
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <label class="form-label">Unit Price</label>
                                                            <input type="number" class="form-control" name="prices[]" readonly>
                                                        </div>
                                                        <div class="col-12 col-md-2">
                                                            <label class="form-label">Total</label>
                                                            <input type="number" class="form-control" name="totals[]" readonly>
                                                        </div>
                                                        <div class="col-12 col-md-1 d-flex align-items-end">
                                                            <button type="button" class="btn btn-icon btn-label-danger" onclick="removeOrderItem(this)">
                                                                <i class="ti ti-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 d-flex justify-content-end gap-2">
                                                <button type="button" class="btn btn-primary" id="addItemBtn" onclick="addOrderItem()">
                                                    <i class="ti ti-plus me-1"></i> Add Item
                                                </button>
                                                <button type="button" class="btn btn-success" id="finalizeItemsBtn" onclick="finalizeItems()">
                                                    <i class="ti ti-check me-1"></i> Finalize Items
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Payment Information -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Payment Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <label class="form-label">Payment Method</label>
                                                    <select class="form-select" name="payment_method" id="payment_method">
                                                        <option value="">Select Method</option>
                                                        <option value="cash">Cash</option>
                                                        <option value="paypal">PayPal</option>
                                                        <option value="gcash">Gcash</option>
                            
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Payment Status</label>
                                                    <select class="form-select" name="payment_status" id="payment_status">
                                                        <option value="Paid">Paid</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Failed">Failed</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second column -->
                                <div class="col-12 col-lg-4">
                                    <!-- Order Status -->
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Order Status</h5>
                                        </div>
                                        <div class="card-body">
                                            <select class="form-select mb-4" name="order_status" id="order_status">
                                                <option value="Ordered">Ordered</option>
                                                <option value="Delivered">Delivered</option>
                                                <option value="Out for Delivery">Out for Delivery</option>
                                                <option value="Ready to Pickup">Ready to Pickup</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Order Summary -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Order Summary</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Subtotal</label>
                                                <input type="number" class="form-control" placeholder="0.00">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tax</label>
                                                <input type="number" class="form-control" placeholder="0.00">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Total</label>
                                                <input type="number" class="form-control" placeholder="0.00" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                          <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                            <div class="text-body">
                              ©
                              <script>
                                document.write(new Date().getFullYear());
                              </script>
                               Developed by <a href="https://intra-code.com/" target="_blank" class="footer-link">Intracode IT Solutions</a>
                            </div>
                           
                          </div>
                        </div>
                      </footer>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <script>
        let orderCount = 10; // Start from 10 instead of 1
        let finalizedOrders = [];

        function addOrderItem() {
            const template = document.querySelector('.order-item').cloneNode(true);
            template.querySelectorAll('input').forEach(input => input.value = input.type === 'number' ? '1' : '');
            template.querySelector('select').value = '';
            document.getElementById('orderItems').appendChild(template);
            updateTotals();
        }

        function removeOrderItem(button) {
            const items = document.querySelectorAll('.order-item');
            if (items.length > 1) {
                button.closest('.order-item').remove();
                updateTotals();
            }
        }

        function finalizeItems() {
            const items = document.querySelectorAll('.order-item');
            console.log('Current items before finalization:', items.length);
            
            if (items.length === 0 || (items.length === 1 && !items[0].querySelector('[name="items[]"]').value)) {
                Swal.fire({
                    icon: 'error',
                    title: 'No Items',
                    text: 'Please add at least one item before finalizing.',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Validate all items have prices
            const invalidItems = Array.from(items).filter(item => {
                const price = parseFloat(item.querySelector('[name="prices[]"]').value);
                return isNaN(price) || price <= 0;
            });

            if (invalidItems.length > 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Items',
                    text: 'All items must have valid prices before finalizing',
                    confirmButtonText: 'OK'
                });
                return;
            }

            if (confirm('Do you want to finalize these items?')) {
                const itemsData = Array.from(items).map(item => ({
                    name: item.querySelector('[name="items[]"]').value,
                    quantity: parseInt(item.querySelector('[name="quantities[]"]').value) || 1,
                    price: parseFloat(item.querySelector('[name="prices[]"]').value) || 0,
                    total: parseFloat(item.querySelector('[name="totals[]"]').value) || 0
                }));

                console.log('Items being finalized:', itemsData);

                const currentOrder = {
                    id: orderCount,
                    items: itemsData
                };
                finalizedOrders.push(currentOrder);

                // Clear input values but keep structure
                document.querySelectorAll('.order-item').forEach(item => {
                    item.querySelector('[name="items[]"]').value = '';
                    item.querySelector('[name="quantities[]"]').value = '1';
                    item.querySelector('[name="prices[]"]').value = '';
                    item.querySelector('[name="totals[]"]').value = '';
                });

                updateTotals();
                
                Swal.fire({
                    icon: 'success',
                    title: 'Items Finalized',
                    text: `Order #${currentOrder.id} has been finalized. You can start order #${orderCount}.`,
                    confirmButtonText: 'OK'
                });
                orderCount--;
            }
        }

        // Add this function to set prices when items are selected
        document.addEventListener('change', function(e) {
            if (e.target.matches('[name="items[]"]')) {
                const item = e.target.closest('.order-item');
                const priceInput = item.querySelector('[name="prices[]"]');
                
                // Set a default price based on selected item
                const itemPrices = {
                    'Shampooo': 150,
                    'Soap': 50,
                    'Water': 25
                    // Add more items and prices as needed
                };
                
                const price = itemPrices[e.target.value] || 0;
                priceInput.value = price;
                
                updateTotals();
            }
        });

        function updateTotals() {
            let subtotal = 0;
            document.querySelectorAll('.order-item').forEach(item => {
                const quantity = parseFloat(item.querySelector('[name="quantities[]"]').value) || 0;
                const price = parseFloat(item.querySelector('[name="prices[]"]').value) || 0;
                const total = quantity * price;
                item.querySelector('[name="totals[]"]').value = total.toFixed(2);
                subtotal += total;
            });
            
            const taxRate = 0.1; // 10% tax rate
            const tax = subtotal * taxRate;
            const total = subtotal + tax;

            document.querySelector('[placeholder="0.00"]').value = subtotal.toFixed(2);
            document.querySelectorAll('[placeholder="0.00"]')[1].value = tax.toFixed(2);
            document.querySelectorAll('[placeholder="0.00"]')[2].value = total.toFixed(2);
        }

        // Add event listeners to update totals when quantities or prices change
        document.addEventListener('input', function(e) {
            if (e.target.matches('[name="quantities[]"], [name="prices[]"]')) {
                updateTotals();
            }
        });

        function submitOrder() {
            // Debug logging for required fields
            console.log('Checking required fields...');
            const requiredFields = {
                'order_date': 'Order date',
                'customer_name': 'Customer name', 
                'payment_method': 'Payment method',
                'order_status': 'Order status'
            };

            // Log each field's value
            for (const [field, label] of Object.entries(requiredFields)) {
                const value = document.getElementById(field)?.value;
                console.log(`${label}: ${value}`);
            }

            // Check finalized orders
            console.log('Finalized orders:', finalizedOrders);

            // Create object instead of FormData to have better control of data structure
            const orderData = {
                _token: document.querySelector('meta[name="csrf-token"]').content,
                order_date: document.getElementById('order_date').value,
                order_time: document.getElementById('order_time').value,
                customer_name: document.getElementById('customer_name').value,
                customer_email: document.getElementById('customer_email').value,
                payment_method: document.getElementById('payment_method').value,
                payment_status: document.getElementById('payment_status').value,
                order_status: document.getElementById('order_status').value,
                // Send the items array directly without JSON.stringify
                items: finalizedOrders[finalizedOrders.length - 1].items,
                subtotal: document.querySelectorAll('[placeholder="0.00"]')[0].value,
                tax: document.querySelectorAll('[placeholder="0.00"]')[1].value,
                total: document.querySelectorAll('[placeholder="0.00"]')[2].value
            };

            console.log('Submitting order data:', orderData);

            // Validate all required fields
            for (const [field, label] of Object.entries(requiredFields)) {
                const value = document.getElementById(field)?.value;
                if (!value) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Required Field Missing',
                        text: `${label} is required`,
                        confirmButtonText: 'OK'
                    });
                    return;
                }
            }

            if (finalizedOrders.length === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'No Items Added',
                    text: 'Please add and finalize at least one order item',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Show loading state
            Swal.fire({
                title: 'Processing Order',
                html: 'Please wait while we create your order...',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });

            // Make API call with JSON data instead of FormData
            fetch('/order/create', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(orderData)
            })
            .then(response => {
                console.log('Response status:', response.status);
                return response.json().catch(error => {
                    console.error('JSON parsing error:', error);
                    throw new Error('Invalid JSON response');
                });
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Order Created!',
                        text: `Order #${data.data.order_number} has been created successfully`,
                        showConfirmButton: true,
                        confirmButtonText: 'View Orders',
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '/order-list';
                        }
                    });
                } else {
                    throw new Error(data.message || 'Order creation failed');
                }
            })
            .catch(error => {
                console.error('Error details:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Order Creation Failed',
                    text: error.message || 'Something went wrong while creating the order',
                    confirmButtonText: 'Try Again'
                });
            });
        }

        // Update the order status values to match database enum
        document.querySelector('select[name="order_status"]').innerHTML = `
            <option value="Ordered">Ordered</option>
            <option value="Delivered">Delivered</option>
            <option value="Out for Delivery">Out for Delivery</option>
            <option value="Ready to Pickup">Ready to Pickup</option>
        `;

        // Update payment status values to match database enum
        document.querySelector('select[name="payment_status"]').innerHTML = `
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Failed">Failed</option>
            <option value="Cancelled">Cancelled</option>
        `;

        document.querySelector('button[type="submit"]').addEventListener('click', function(e) {
            e.preventDefault();
            submitOrder();
        });
    </script>


</body>
</html>
