<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\patientController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\tierController;
use App\Http\Controllers\bookingController;


// Route::get('/', function () {
//     return view('welcome');
// });



        Route::get('/', [LoginController::class, 'index'])->name('page.index');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/new-coupon', [DashboardController::class, 'new_coupon'])->name('page.new-coupon');
        Route::post('/coupon/create',[CouponController::class, 'create'] )->name('coupon.create');
            
    

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
Route::post('patient/create', [App\Http\Controllers\patientController::class, 'create'])->name('patient.create');

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


Route::get('/customer-report', [DashboardController::class, 'customer_report'])->name('page.customer-report');

// Service Routes
Route::post('/services/create', [App\Http\Controllers\serviceController::class, 'create'])->name('service.create');
Route::get('/services/all', [App\Http\Controllers\serviceController::class, 'get_services'])->name('get.services');
Route::get('/services/branch/{branch_code}', [App\Http\Controllers\serviceController::class, 'get_services_by_branch'])->name('get.services.by.branch');
Route::put('/services/update', [App\Http\Controllers\serviceController::class, 'update'])->name('service.update');
Route::delete('/services/delete', [App\Http\Controllers\serviceController::class, 'delete'])->name('service.delete');
Route::delete('/services/{id}', [App\Http\Controllers\serviceController::class, 'delete_service'])->name('delete.service');

// Branch Routes

Route::post('/branch/create', [App\Http\Controllers\branchController::class, 'create'])->name('branch.create');
// Fix the update route - remove the {branch} from within the URL and make it a parameter
Route::put('/branch/update', [App\Http\Controllers\branchController::class, 'update'])->name('branch.update');
Route::delete('/branch/delete', [App\Http\Controllers\branchController::class, 'delete'])->name('branch.delete');
Route::get('/branches/all', [App\Http\Controllers\branchController::class, 'getAllBranches'])->name('branch.getAllBranches');

// Supplier Routes
Route::post('/supplier/add', [App\Http\Controllers\supplierController::class, 'add_supplier'])->name('add.supplier');
Route::get('/supplier/all', [App\Http\Controllers\supplierController::class, 'get_suppliers'])->name('get.suppliers');
Route::get('/supplier/{id}', [App\Http\Controllers\supplierController::class, 'get_supplier'])->name('get.supplier');
Route::put('/supplier/{id}', [App\Http\Controllers\supplierController::class, 'update_supplier'])->name('update.supplier');
Route::delete('/supplier/{id}', [App\Http\Controllers\supplierController::class, 'delete_supplier'])->name('delete.supplier');


// Patients Routes
Route::put('/patient/update', [App\Http\Controllers\patientController::class, 'update'])->name('patient.update');

Route::get('/service-product', [DashboardController::class, 'service_product'])->name('page.service-product');

Route::get('/employee-report', [DashboardController::class, 'employee_report'])->name('page.employee-report');

Route::get('/expenses-report', [DashboardController::class, 'expenses_report'])->name('page.expenses-report');



//Staff Route
Route::post('/staff/create', [App\Http\Controllers\staffController::class, 'create'])->name('staff.create');
Route::get('/staff/all', [App\Http\Controllers\staffController::class, 'get_staff'])->name('get.staff');
Route::put('/staff/update', [staffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{id}', [App\Http\Controllers\staffController::class, 'delete'])->name('staff.delete');



//Loyalty Route
Route::post('/tier/create', [App\Http\Controllers\tierController::class, 'create'])->name('tier.create');
Route::get('/tier/all', [App\Http\Controllers\tierController::class, 'list'])->name('tier.list');
Route::put('/tier/update', [App\Http\Controllers\tierController::class, 'update'])->name('tier.update');
Route::delete('/tier/{id}', [App\Http\Controllers\tierController::class, 'delete'])->name('tier.delete');


//Booking Route
Route::post('/booking/create', [App\Http\Controllers\bookingController::class, 'create'])->name('booking.create');
Route::get('/booking/all', [App\Http\Controllers\bookingController::class, 'get_bookings'])->name('get.bookings');
Route::put('/booking/update', [App\Http\Controllers\bookingController::class, 'update'])->name('booking.update');
Route::delete('/booking/delete', [App\Http\Controllers\bookingController::class, 'delete'])->name('booking.delete');
