<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view ('./admin/login');
    }
    public function dashboard()
    {
        return view('./admin/dashboard');
    }

    public function productList()
    {
        return view('./admin/productList');
    }
    public function addProduct()
    {
        return view('./admin/addProduct');
    }
    public function editProduct()
    {
        return view('./admin/editProduct');
    }

    public function customerList()
    {
        return view('./admin/customerList');
    }
    public function orderList()
    {
        return view('./admin/orderList');
    }

    public function staffList()
    {
        return view('./admin/staffList');
    }
    public function addStaff()
    {
        return view('./admin/addStaff');
    }
    public function editStaff()
    {
        return view('./admin/editStaff');
    }
    
}
