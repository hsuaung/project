<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function customerDateSearch(Request $request){
        $startDate = Carbon::parse($request->date1);
        $endDate = Carbon::parse($request->date2);
        $customerlist = Customer::whereBetween('created_at', [$startDate, $endDate]) ->paginate(3);
        return view('./admin/customerList', compact('customerlist'));

    }
    public function customerOrderBy(Request $request){
      
      
       
            $customerlist=DB::table('customers')
            ->orderBy('customers.id', $request->sort)
            ->paginate(10);
        return view('./admin/customerList', compact('customerlist'));
       
    }
    public function searchCustomer(Request $request){
        $search = $request->input('search');
        $customerlist = DB::table('customers')
           
            ->where('customers.name', 'like', "%$search%")
            ->orWhere('customers.email', 'like', "%$search%")
            ->orWhere('customers.phone', 'like', "%$search%")
            ->paginate(10);
        return view('admin.customerList', compact('customerlist'));
    }
    public function login(){
        return view('./admin/login');
    }
    public function dashboard()
    {
        //today Order
        
        $today = Carbon::today();
        $todayOrder = DB::table('orders')
            
            ->whereDate('created_at', $today)
            ->count();

        //total sale
        $totalSale = DB::table('orders')
        ->where('status', '=', 'delivered')
        ->sum('totalprice');
         //total order
        $totalOrder=DB::table('orders')
        ->count();

        //latest Order
       
        $latestOrders = DB::table('orders')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        

        return view('./admin/dashboard',compact('todayOrder','totalSale','totalOrder','latestOrders'));
    }
    public function customerList()
    {
        $customerlist = DB::table('customers')
         
           
            ->select('customers.*')
            ->paginate(10);
       
        
        return view('./admin/customerList', compact('customerlist'));
    }
   
    
}
