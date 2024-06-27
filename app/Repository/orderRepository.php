<?php

namespace App\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderRepository{


    public function search(Request $request)
    {
        $search=$request->search;
        // dd()
        $orders = DB::table('orders')
        ->select('*')
        ->where('orders.paymenttype', 'like','%'. $search.'%')
        ->orWhere('orders.totalprice', 'like','%'. $search.'%')
        ->orWhere('orders.deliveryaddress', 'like','%'. $search.'%')
        ->orWhere('orders.buyerphone', 'like','%'. $search.'%')
        ->orWhere('orders.buyeremail', 'like','%'. $search.'%')
        ->orWhere('orders.buyername', 'like','%'. $search.'%')
        // ->orWhere('orders.status', 'like','%'. $search.'%')
        
        ->paginate(10);

    $orderPending = DB::table('orders')
        ->where('status', '=', 'pending')
        ->count();

    $orderDelivered = DB::table('orders')
        ->where('status', '=', 'delivered')
        ->count();

    $orderCancel = DB::table('orders')
        ->where('status', '=', 'cancel')
        ->count();

    $orderActive = DB::table('orders')
        ->where('status', '=', 'Active')
        ->count();



    return view('./admin/orderList', compact('orders', 'orderPending', 'orderDelivered', 'orderCancel', 'orderActive'));

    }
}