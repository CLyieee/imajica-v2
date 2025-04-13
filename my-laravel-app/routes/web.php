<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Category_ExpenseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeReportController;
use App\Http\Controllers\CustomerReportController;
use App\Http\Controllers\SalesTransactionController;

Route::get('/', [LoginController::class, 'index'])->name('page.index');

// Dashboard Pages
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');

    Route::view('/new-coupon', 'dashboard.new_coupon')->name('page.new-coupon');
    Route::view('/coupon-list', 'dashboard.coupon_list')->name('page.coupon-list');
    Route::view('/new-loyalty', 'dashboard.new_loyalty')->name('page.new-loyalty');
    Route::view('/loyalty-list', 'dashboard.loyalty_list')->name('page.loyalty-list');
    Route::view('/sales-transaction', 'dashboard.sales_transaction')->name('page.sales-transaction');
    Route::view('/employee-sales', 'dashboard.employee_sales')->name('page.employee-sales');
    Route::view('/commision-employee', 'dashboard.commision_employee')->name('page.commsion-employee');
    Route::view('/void-logs', 'dashboard.void_logs')->name('page.void-logs');
    Route::view('/product-list', 'dashboard.product_list')->name('page.product-list');
    Route::view('/add-order', 'dashboard.add_order')->name('page.add_order');
    Route::view('/add-product', 'dashboard.add_product')->name('page.add-product');
    Route::view('/category-list', 'dashboard.category_list')->name('page.category-list');
    Route::view('/system-settings', 'dashboard.system_settings')->name('page.system-settings');
    Route::view('/new-patient', 'dashboard.new_patient')->name('page.new-patient');
    Route::view('/patient-list', 'dashboard.patient_list')->name('page.patient-list');
    Route::view('/new-supplier', 'dashboard.new_supplier')->name('page.new-supplier');
    Route::view('/supplier-list', 'dashboard.supplier_list')->name('page.supplier-list');
    Route::view('/new-staff', 'dashboard.new_staff')->name('page.new-staff');
    Route::view('/staff-list', 'dashboard.staff_list')->name('page.staff-list');
    Route::view('/new-branch', 'dashboard.new_branch')->name('page.new-branch');
    Route::view('/branch-list', 'dashboard.branch_list')->name('page.branch-list');
    Route::view('/new-services', 'dashboard.new_services')->name('page.new-services');
    Route::view('/services-list', 'dashboard.services_list')->name('page.services-list');
    Route::view('/new-user', 'dashboard.new_user')->name('page.new-user');
    Route::view('/user-list', 'dashboard.user_list')->name('page.user-list');
    Route::view('/booking', 'dashboard.booking')->name('page.booking');
    Route::view('/customer-report', 'dashboard.customer_report')->name('page.customer-report');
    Route::view('/employee-report', 'dashboard.employee_report')->name('page.employee-report');
    Route::view('/expenses-report', 'dashboard.expenses_report')->name('page.expenses-report');
    Route::view('/new-expenses', 'dashboard.new_expenses')->name('page.new-expenses');
    Route::view('/expenses-list', 'dashboard.expenses_list')->name('page.expenses-list');
    Route::view('/new-category-expenses', 'dashboard.newcategory_expenses')->name('page.new-category-expenses');
    Route::view('/categoryexpenses-list', 'dashboard.categoryexpenses_list')->name('page.categoryexpenses-list');
    Route::view('/service-product', 'dashboard.service_product')->name('page.service-product');
});

// Coupon Routes
Route::prefix('coupon')->controller(CouponController::class)->group(function () {
    Route::post('/create', 'create')->name('coupon.create');
    Route::get('/edit/{coupon_code}', 'edit')->name('coupon.edit');
    Route::put('/update', 'update')->name('coupon.update');
    Route::delete('/delete', 'delete')->name('coupon.delete');
    Route::get('/get', 'get')->name('coupon.get');
});

// Order Routes
Route::controller(OrderController::class)->group(function () {
    Route::get('/order-list', [DashboardController::class, 'order_list'])->name('page.order-list');
    Route::post('/order/create', 'create')->name('order.create');
    Route::get('/order-details/{id}', 'show')->name('page.order-details');
    Route::get('/order/order-details/{orderId}', 'getOrderDetails')->name('api.order.details');
});

// Product
Route::post('/product/create', [AddProductController::class, 'create'])->name('product.create');

// Purchase
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase.index');

// Patients
Route::prefix('patient')->controller(PatientController::class)->group(function () {
    Route::post('/create', 'create')->name('patient.create');
    Route::put('/update', 'update')->name('patient.update');
    Route::delete('/{id}', 'destroy')->name('patient.destroy');
});

// Supplier
Route::prefix('supplier')->controller(SupplierController::class)->group(function () {
    Route::post('/add', 'add_supplier')->name('add.supplier');
    Route::get('/all', 'get_suppliers')->name('get.suppliers');
    Route::get('/{id}', 'get_supplier')->name('get.supplier');
    Route::put('/{id}', 'update_supplier')->name('update.supplier');
    Route::delete('/{id}', 'delete_supplier')->name('delete.supplier');
});

// Staff
Route::prefix('staff')->controller(StaffController::class)->group(function () {
    Route::post('/create', 'create')->name('staff.create');
    Route::get('/all', 'get_staff')->name('get.staff');
    Route::get('/edit/{id}', 'edit')->name('staff.edit');
    Route::put('/update', 'update')->name('staff.update');
    Route::delete('/{id}', 'delete')->name('staff.delete');
});

// Branch
Route::prefix('branch')->controller(BranchController::class)->group(function () {
    Route::post('/create', 'create')->name('branch.create');
    Route::get('/edit/{branch_code}', 'edit')->name('branch.edit');
    Route::put('/update', 'update')->name('branch.update');
    Route::delete('/delete', 'delete')->name('branch.delete');
    Route::get('/all', 'getAllBranches')->name('branch.getAllBranches');
});

// Services
Route::prefix('services')->controller(ServiceController::class)->group(function () {
    Route::post('/create', 'create')->name('service.create');
    Route::get('/edit/{service_id}', 'edit')->name('service.edit');
    Route::get('/all', 'get_services')->name('get.services');
    Route::get('/branch/{branch_code}', 'get_services_by_branch')->name('get.services.by.branch');
    Route::put('/update', 'update')->name('service.update');
    Route::delete('/delete', 'delete')->name('service.delete');
    Route::delete('/{id}', 'delete_service')->name('delete.service');
});

// Loyalty / Tier
Route::prefix('tier')->controller(TierController::class)->group(function () {
    Route::post('/create', 'create')->name('tier.create');
    Route::get('/all', 'list')->name('tier.list');
    Route::put('/update', 'update')->name('tier.update');
    Route::delete('/delete', 'delete')->name('tier.delete');
});

// Categories
Route::prefix('category')->controller(CategoryListController::class)->group(function () {
    Route::get('/all', 'getAll')->name('category.all');
    Route::get('/get/{id}', 'getCategory')->name('category.get');
    Route::post('/create', 'create')->name('category.create');
    Route::put('/update', 'update')->name('category.update');
    Route::delete('/delete', 'delete')->name('category.delete');
});

// API
Route::get('/api/categories', [CategoryListController::class, 'getAll'])->name('api.categories');
