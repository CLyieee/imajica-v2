<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\tierController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\category_expenseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeReportController;
use App\Http\Controllers\CustomerReportController;
use App\Http\Controllers\SalesTransactionController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [LoginController::class, 'index'])->name('page.index');


        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/new-coupon', [DashboardController::class, 'new_coupon'])->name('page.new-coupon');
        Route::post('/coupon/create',[CouponController::class, 'create'] )->name('coupon.create');
        Route::get('/coupon/list', [DashboardController::class, 'coupon_list'])->name('page.coupon-list');
        Route::get('/coupon/edit/{coupon_code}', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::put('/coupon/update', [CouponController::class, 'update'])->name('coupon.update');
        Route::delete('/coupon/delete', [CouponController::class, 'delete'])->name('coupon.delete');

        Route::get('/coupon/get', [CouponController::class, 'get'])->name('coupon.get');


Route::get('/coupon-list', [DashboardController::class, 'coupon_list'])->name('page.coupon-list');

Route::get('/new-loyalty', [DashboardController::class, 'new_loyalty'])->name('page.new-loyalty');

Route::get('/sales-transaction', [DashboardController::class, 'sales_transaction'])->name('page.sales-transaction');

Route::get('/employee-sales', [DashboardController::class, 'employee_sales'])->name('page.employee-sales');


Route::get('/commision-employee', [DashboardController::class, 'commision_employee'])->name('page.commsion-employee');


Route::get('/purchase', [DashboardController::class, 'purchase'])->name('page.purchase');
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase.index');


Route::get('/void-logs', [DashboardController::class, 'void_logs'])->name('page.void-logs');

Route::get('/product-list', [DashboardController::class, 'product_list'])->name('page.product-list');

//ORDER ROUTES
Route::get('/order-list', [DashboardController::class, 'order_list'])->name('page.order-list');
Route::get('/add-order', [DashboardController::class, 'add_order'])->name('page.add_order');
Route::post('/order/create', [orderController::class, 'create'])->name('order.create');
Route::get('/order-details/{id}', [OrderController::class, 'show'])->name('page.order-details');
Route::get('/order/order-details/{orderId}', [OrderController::class, 'getOrderDetails'])->name('api.order.details');
Route::get('/add-product', [DashboardController::class, 'add_product'])->name('page.add-product');
Route::post('/product/create', [AddProductController::class, 'create'])->name('product.create');

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
Route::get('/service/edit/{id}', [serviceController::class, 'edit'])->name('service.edit');

Route::get('/new-user', [DashboardController::class, 'new_user'])->name('page.new-user');

Route::get('/user-list', [DashboardController::class, 'user_list'])->name('page.user-list');

Route::get('/booking', [BookingController::class, 'index'])->name('page.booking');


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
Route::delete('/patient/{id}', [App\Http\Controllers\patientController::class, 'destroy'])->name('patient.destroy');

Route::get('/service-product', [DashboardController::class, 'service_product'])->name('page.service-product');

Route::get('/employee-report', [DashboardController::class, 'employee_report'])->name('page.employee-report');

Route::get('/expenses-report', [DashboardController::class, 'expenses_report'])->name('page.expenses-report');

Route::get('/new-expenses', [DashboardController::class, 'new_expenses'])->name('page.new-expenses');

Route::get('/expenses-list', [DashboardController::class, 'expenses_list'])->name('page.expenses-list');

Route::get('/new category-expenses', [DashboardController::class, 'newcategory_expenses'])->name('page.new category-expenses');

Route::get('/categoryexpenses-list', [DashboardController::class, 'categoryexpenses_list'])->name('page.categoryexpenses-list');

// Route::get('/expenses/view/{id}', [ExpensesController::class, 'view'])->name('expenses.view');

Route::get('/category/all', [CategoryListController::class, 'getAll'])->name('category.all');
Route::get('/api/categories', [CategoryListController::class, 'getAll'])->name('api.categories');
Route::post('/category/create', [CategoryListController::class, 'create'])->name('category.create');
Route::get('/category-list', [DashboardController::class, 'category_list'])->name('page.category-list');
Route::delete('/category/delete', [CategoryListController::class, 'delete'])->name('category.delete');
Route::get('/category/get/{id}', [CategoryListController::class, 'getCategory'])->name('category.get');
Route::put('/category/update', [CategoryListController::class, 'update'])->name('category.update');

//Staff Route
Route::post('/staff/create', [App\Http\Controllers\staffController::class, 'create'])->name('staff.create');
Route::get('/staff/all', [App\Http\Controllers\staffController::class, 'get_staff'])->name('get.staff');
Route::put('/staff/update', [staffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{id}', [App\Http\Controllers\staffController::class, 'delete'])->name('staff.delete');

//Loyalty Route
Route::post('/tier/create', [App\Http\Controllers\tierController::class, 'create'])->name('tier.create');
Route::get('/tier/all', [App\Http\Controllers\tierController::class, 'list'])->name('tier.list');
Route::put('/tier/update', [App\Http\Controllers\tierController::class, 'update'])->name('tier.update');
Route::delete('/tier/delete', [App\Http\Controllers\tierController::class, 'delete'])->name('tier.delete');


//Booking Route
Route::post('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::get('/booking/all', [BookingController::class, 'get_bookings'])->name('get.bookings');
Route::put('/booking/update', [BookingController::class, 'update'])->name('booking.update');
Route::delete('/booking/delete', [BookingController::class, 'delete'])->name('booking.delete');
Route::get('/get-calendar-bookings', [BookingController::class, 'getCalendarBookings']);


Route::get('/position-list', [DashboardController::class, 'position_list'])->name('page.position-list');
Route::post('/position', [PositionController::class, 'create'])->name('position.create');
Route::put('/position/update', [PositionController::class, 'update'])->name('position.update');
Route::delete('/position/delete', [App\Http\Controllers\PositionController::class, 'delete'])->name('position.delete');


//Department Route
Route::get('/new-department', [DashboardController::class, 'new_department'])->name('page.new-department');
Route::post('/department/create', [App\Http\Controllers\DepartmentController::class, 'store'])->name('department.create');
Route::get('/department-list', [DashboardController::class, 'department_list'])->name('page.department-list');
Route::put('/department/update', [App\Http\Controllers\DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/delete', [App\Http\Controllers\DepartmentController::class, 'delete'])->name('department.delete');
Route::get('/departments/all', [App\Http\Controllers\DepartmentController::class, 'getAllDepartments'])->name('department.getAllDepartments');

//Category Expense Routes
Route::post('/category_expense/create', [App\Http\Controllers\category_expenseController::class, 'create'])->name('category_expense.create');
Route::get('/category_expense/all', [App\Http\Controllers\category_expenseController::class, 'getAll'])->name('get.category_expenses');
Route::get('/category_expense/edit/{id}', [App\Http\Controllers\category_expenseController::class, 'edit'])->name('category_expense.edit');
Route::put('/category_expense/update/{id}', [App\Http\Controllers\category_expenseController::class, 'update'])->name('category_expense.update');
Route::delete('/category_expense/delete/{id}', [App\Http\Controllers\category_expenseController::class, 'delete'])->name('category_expense.delete');


