<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('page.dashboard');
    }

    public function new_coupon()
    {
        return view('page.new-coupon');
    }

    public function coupon_list()
    {
        return view('page.coupon-list');
    }

    public function new_loyalty()
    {
        return view('page.new-loyalty');
    }

    public function loyalty_list()
    {
        return view('page.loyalty-list');
    }
    public function new_patient()
    {
        return view('page.new-patient');
    }
    public function patient_list()
    {
        return view('page.patient-list');
    }
    public function new_supplier()
    {
        return view('page.new-supplier');
    }
    public function supplier_list()
    {
        return view('page.supplier-list');
    }
    public function new_staff()
    {
        return view('page.new-staff');
    }
    public function staff_list()
    {
        return view('page.staff-list');
    } 
    public function new_branch()
    {
        return view('page.new-branch');
    }  
    public function branch_list()
    {
        return view('page.branch-list');
    }
    public function customer_report()
    {
        return view('page.customer-report');
    }
    public function service_product()
    {
        return view('page.service-product');
    }
    public function employee_report()
    {
        return view('page.employee-report');
    }
    public function expenses_report()
    {
        return view('page.expenses-report');
    }

    public function sales_transaction()
    {
        return view('page.sales-transaction');
    }
    public function employee_sales()
    {
        return view('page.employee-sales');
    }

    public function commision_employee()
    {
        return view('page.commision-employee');
    }

    public function purchase()
    {
        return view('page.purchase');
    }
    public function void_logs()
    {
        return view('page.void-logs');
    }
    public function product_list()
    {
        return view('page.product-list');
    }
    public function order_list()
    {
        return view('page.order-list');
    }
    public function order_details()
    {
        return view('page.order-details');
    }
    public function add_product()
    {
        return view('page.add-product');
    }
    public function category_list()
    {
        return view('page.category-list');
    }
    public function system_settings()
    {
        return view('page.system-settings');
    }
    public function new_services()
    {
        return view('page.new-services');
    }
    public function services_list()
    {
        return view('page.services-list');
    }
    public function new_user()
    {
        return view('page.new-user');
    }
    public function user_list()
    {
        return view('page.user-list');
    }
    public function booking()
    {
        return view('page.booking');
    }


}

