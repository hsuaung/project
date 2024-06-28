<?php

namespace App\Http\Controllers;

use session;
use Stripe\Price;
use App\Models\Order;
use App\Models\Order_product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    
    public function index()
    {
        echo "Cancel";
    }
    public function stripe(Request $request)
    {
        $items = (session('cart'));
        $total = 0;
        foreach ($items as $item) {
            $total += $item["quantity"] * $item["price"];
        }

        $customer = [
            '_token' => $request->_token,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'country' => $request->country,
            'address' => $request->address,
            'email' => $request->email,
            'phno' => $request->phno,
            'payment' => $request->payment,
            'total' => $total,
        ];
        session()->put('customer', $customer);

        \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Pay Now!!!',
                        ],
                        'unit_amount' => $total * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route(name: 'success'),
            'cancel_url' => route(name: 'index'),


        ]);
        return redirect()->away($session->url);
    }

    public function success()
    {
        $name = session('customer')['firstName'] . ' ' . session('customer')['lastName'];
        $order = new Order();
        $order->paymenttype = session('customer')['payment'];
        //customer id
        $order->customer_id = 1;
        $order->paymenttype = session('customer')['payment'];
        $order->totalprice = session('customer')['total'];
        $order->deliveryaddress = session('customer')['address'];
        $order->buyerphone = session('customer')['phno'];
        $order->buyeremail = session('customer')['email'];
        $order->buyername = $name;
        $uuid = Str::uuid()->toString();
        $order->uuid = $uuid;
        $order->status = "Active";
        $order->save();

        $carts = session('cart');

        foreach ($carts as $cart) {
           
            $order_product = new Order_product();
            $order_product->order_id = $order->id;
            $order_product->product_id = $cart['product_id'];
            $order_product->qty = $cart['quantity'];
            $order_product->price = $cart['price'] * $cart['quantity'];
            $uuid = Str::uuid()->toString();
            $order_product->uuid = $uuid;
            $order_product->status = 'pending';
            $order_product->save();
        }




        return view(view: 'success');
    }
}
