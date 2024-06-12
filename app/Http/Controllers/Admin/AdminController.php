<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('./admin/login');
    }
    public function dashboard()
    {
        return view('./admin/dashboard');
    }
    public function customerList()
    {
        $customerlist = DB::table('customers')
            // ->join('roles', 'roles.id', '=', 'staff.role_id')
           
            ->select('customers.*')
            ->paginate(3);
        // dd($customerlist);
        
        return view('./admin/customerList', compact('customerlist'));
    }
    public function orderList()
    {
        return view('./admin/orderList');
    }
    
}
