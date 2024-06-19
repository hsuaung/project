<?php

namespace App\Http\Controllers\Admin;

use LengthException;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Order_product;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Repository\orderRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\countOf;
use PHPUnit\Framework\Constraint\Count;

class OrderController extends Controller
{
    private $itemRepository;
    public function __construct(orderRepository $itemrepository)
    {
        $this->itemRepository = $itemrepository;
    }
    public function orderSearch(Request $request){
        // dd($request->orderby);
        $response = $this->itemRepository->search($request);
        return $response;
    

    }
    public function orderList()
    {
        $orders = DB::table('orders')
            ->select('*')
            ->paginate(3);

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

    public function orderDetail($id)
    {
        $orderDetail = DB::table('order_products')
            ->join('product_photos', 'product_photos.product_id', '=', 'order_products.product_id')
            ->join('products', 'products.id', '=', 'order_products.product_id')
            ->select('order_products.*', 'product_photos.image as image', 'products.name as name', 'products.price as productPrice')
            ->where('order_products.order_id', '=', $id)
            ->where('product_photos.isPrimary', '=', 1)
            ->get();
        // dd($orderDetail);

        return view('./admin/orderDetail', compact('orderDetail'));
    }

    public function orderUpdate(Request $request)
    {
        Order::where('id', $request->id)->update([
            'status' => $request->status,

        ]);
        return redirect()->to('/admin/orderList');
    }
    public function orderOrderBy(Request $request){
        
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


        $orders=DB::table('orders')
        ->orderBy('orders.id', $request->sort)
        ->paginate(3);
        return view('./admin/orderList', compact('orders', 'orderPending', 'orderDelivered', 'orderCancel', 'orderActive'));

    }
    public function orderStatus(Request $request){
        $status=$request->status;
        if($status == 'status'){
            $orders = DB::table('orders')
            ->select('*')
            ->paginate(3);
        }
        else {
            $orders = DB::table('orders')
            ->select('*')
            ->where('orders.status','=',$status)
            ->paginate(3);
        }
      

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
    public function orderDateSearch(Request $request){
        $startDate = Carbon::parse($request->date1);
        $endDate = Carbon::parse($request->date2);
        $orders = Order::whereBetween('created_at', [$startDate, $endDate]) ->paginate(3);
     

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


