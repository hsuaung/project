<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {       
       
    }
    public function cart()
    {
        return view('./customer/cart');
    }
    public function addtocart(Request $request)
    {
        $id = $request->id;
        $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->leftjoin('product_photos', 'product_photos.product_id', '=', 'products.id')
            ->where('product_photos.isPrimary', 1)
            ->where('products.id', '=', $id)
            ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
            ->get();
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } 
        else {
            $cart[$id] = [
                'product_id' => $products[0]->id,
                'product_name' => $products[0]->name,
                'image' => $products[0]->image,
                'quantity' => $request->quantity,
                'price' =>$products[0]->price,
             ];
            
        }
        session()->put('cart', $cart);
        return view('./customer/cart');
       

    }
    public function clearCart()
    {
        Session::flush();
        return view('./customer/home');
    }
    public function updateCart(Request $request){
        dd($request);
        if (session('cart') !== null)
        {
          
            
        }
         else return view('customer.cart')->with('error', 'Nothing in cart');

    }
    public function removeItem($id){
        $items = session('cart');
        if(!empty($items)){
            unset($items[$id]);
            session()->put('cart', $items);
            return view('customer.cart')->with('success', "Deleted");
        }
        return view('customer.cart')->with('error', 'Delete Unsuccessfull');
    }
   
}
