<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

public function orderList()
    { 
        
        $orderlist = DB::table('order_products')
        ->join('orders', 'orders.id', '=', 'order_products.order_id')
        ->join('products','products.id','=','order_products.product_id')
        ->select('order_products.*','orders.buyername as customerName','products.name as productName')
        ->get();
        // dd($orderlist);

        return view('./admin/orderList',compact('orderlist'));
    }
}