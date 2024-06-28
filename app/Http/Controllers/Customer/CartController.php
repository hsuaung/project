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
        } else {
            $cart[$id] = [
                'product_id' => $products[0]->id,
                'product_name' => $products[0]->name,
                'image' => $products[0]->image,
                'quantity' => $request->quantity,
                'price' => $products[0]->price,
            ];
        }
        session()->put('cart', $cart);

        return redirect('/shop');
    }
    public function buynow(Request $request)
    {
      
        $id = $request->id;
        
        $product = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->leftjoin('product_photos', 'product_photos.product_id', '=', 'products.id')
            ->where('product_photos.isPrimary', 1)
            ->where('products.id', '=', $id)
            ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
            ->get();

        $cart=(session('cart'));
      
        if (isset($cart[$id])) {
                $cart[$id]['quantity'] += 1;
        } else {
                $cart[$id] = [
                    'product_id' => $product[0]->id,
                    'product_name' => $product[0]->name,
                    'image' => $product[0]->image,
                    'quantity' => 1,
                    'price' => $product[0]->price,
                ];
            }
        session()->put('cart', $cart);

        return redirect('/checkout');
    }
    public function clearCart()
    {
        Session::flush();
        return redirect('/');
    }
    public function updateCart(Request $request)
    {
        $cart = session('cart');
        $ids = $request->product_id ?? '';
        $quantities = $request->quantity ?? '';
        if (isset($cart) && isset($quantities) && isset($ids)) {
               foreach ($ids as $key => $id) {
                if (array_key_exists($id, $cart)) {
                        if ($id == $cart[$id]['product_id']) {
                      
                        $quantity = $quantities[$key];
                    
                        $cart[$id]['quantity'] = $quantity;
                    }
                }
            }
            session()->forget('cart');
            session()->put('cart', $cart);
        }
        return redirect('/cart');
    }
    public function removeItem($id)
    {
        $items = session('cart');
        if (!empty($items)) {
            unset($items[$id]);
            session()->put('cart', $items);
            return view('customer.cart')->with('success', "Deleted");
        }
        return view('customer.cart')->with('error', 'Delete Unsuccessfull');
    }
    public function checkout()
    {
        return view('./customer/checkout');
    }
}
