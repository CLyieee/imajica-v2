<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });



        Route::get('/', [LoginController::class, 'index'])->name('page.index');

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('page.dashboard');

        Route::get('/new-coupon', [DashboardController::class, 'new_coupon'])->name('page.new-coupon');

        Route::get('/coupon-list', [DashboardController::class, 'coupon_list'])->name('page.coupon-list');

        Route::get('/new-loyalty', [DashboardController::class, 'new_loyalty'])->name('page.new-loyalty');

            Route::get('/sales-transaction', [DashboardController::class, 'sales_transaction'])->name('page.sales-transaction');

            Route::get('/employee-sales', [DashboardController::class, 'employee_sales'])->name('page.employee-sales');

            
            Route::get('/commision-employee', [DashboardController::class, 'commision_employee'])->name('page.commsion-employee');

            
            Route::get('/purchase', [DashboardController::class, 'purchase'])->name('page.purchase');

              
            Route::get('/void-logs', [DashboardController::class, 'void_logs'])->name('page.void-logs');

            Route::get('/product-list', [DashboardController::class, 'product_list'])->name('page.product-list');

            Route::get('/order-list', [DashboardController::class, 'order_list'])->name('page.order-list');

            
            Route::get('/order-details', [DashboardController::class, 'order_details'])->name('page.order-details');
 
            Route::get('/add-product', [DashboardController::class, 'add_product'])->name('page.add-product');

            
            Route::get('/category-list', [DashboardController::class, 'category_list'])->name('page.category-list');

            Route::get('/system-settings', [DashboardController::class, 'system_settings'])->name('page.system-settings');

Route::get('/new-loyalty', [DashboardController::class, 'new_loyalty'])->name('page.new-loyalty');

Route::get('/loyalty-list', [DashboardController::class, 'loyalty_list'])->name('page.loyalty-list');

Route::get('/new-patient', [DashboardController::class, 'new_patient'])->name('page.new-patient');

Route::get('/patient-list', [DashboardController::class, 'patient_list'])->name('page.patient-list');

Route::get('/new-supplier', [DashboardController::class, 'new_supplier'])->name('page.new-supplier');

Route::get('/supplier-list', [DashboardController::class, 'supplier_list'])->name('page.supplier-list');

Route::get('/new-staff', [DashboardController::class, 'new_staff'])->name('page.new-staff');

Route::get('/staff-list', [DashboardController::class, 'staff_list'])->name('page.staff-list');

Route::get('/new-branch', [DashboardController::class, 'new_branch'])->name('page.new-branch');

Route::get('/branch-list', [DashboardController::class, 'branch_list'])->name('page.branch-list');

Route::get('/new-services', [DashboardController::class, 'new_services'])->name('page.new-services');

Route::get('/services-list', [DashboardController::class, 'services_list'])->name('page.services-list');

Route::get('/new-user', [DashboardController::class, 'new_user'])->name('page.new-user');

Route::get('/user-list', [DashboardController::class, 'user_list'])->name('page.user-list');

Route::get('/booking', [DashboardController::class, 'booking'])->name('page.booking');

// Service Routes
Route::post('/services/add', [App\Http\Controllers\serviceController::class, 'add_service'])->name('add.service');
Route::get('/services/all', [App\Http\Controllers\serviceController::class, 'get_services'])->name('get.services');
Route::get('/services/branch/{branch_code}', [App\Http\Controllers\serviceController::class, 'get_services_by_branch'])->name('get.services.by.branch');
Route::get('/services/{id}', [App\Http\Controllers\serviceController::class, 'get_service'])->name('get.service');
Route::put('/services/{id}', [App\Http\Controllers\serviceController::class, 'update_service'])->name('update.service');
Route::delete('/services/{id}', [App\Http\Controllers\serviceController::class, 'delete_service'])->name('delete.service');

// Branch Routes
Route::post('/branch/add', [App\Http\Controllers\branchController::class, 'add_branch'])->name('add.branch');
Route::get('/branch/all', [App\Http\Controllers\branchController::class, 'get_branches'])->name('get.branches');
Route::get('/branch/{branch_code}', [App\Http\Controllers\branchController::class, 'get_branch'])->name('get.branch');
Route::put('/branch/{branch_code}', [App\Http\Controllers\branchController::class, 'update_branch'])->name('update.branch');
Route::delete('/branch/{branch_code}', [App\Http\Controllers\branchController::class, 'delete_branch'])->name('delete.branch');

// Supplier Routes
Route::post('/supplier/add', [App\Http\Controllers\supplierController::class, 'add_supplier'])->name('add.supplier');
Route::get('/supplier/all', [App\Http\Controllers\supplierController::class, 'get_suppliers'])->name('get.suppliers');
Route::get('/supplier/{id}', [App\Http\Controllers\supplierController::class, 'get_supplier'])->name('get.supplier');
Route::put('/supplier/{id}', [App\Http\Controllers\supplierController::class, 'update_supplier'])->name('update.supplier');
Route::delete('/supplier/{id}', [App\Http\Controllers\supplierController::class, 'delete_supplier'])->name('delete.supplier');


