<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {       
        // echo "Hello";   
        // $cart = session()->get('cart', []); 
        // dd($cart);
        // Session::forget('cart');
        // Session::flush();
        // dd(session('cart'));
    }
    //
    public function cart()
    {
        // Session::flush();
        // dd(session('cart'));
        // foreach (session('cart') as $id => $detail) {
            // dd($detail['id']);
        // }
        // dd(session('cart')[0]->name);
        return view('./customer/cart');
    }
    public function addtocart(Request $request)
    {
        // $request->session()->flush();
        $id = $request->id;
        // dd($id);
        // $products = Product::with(['category', 'photos'])->where('products.id','=', $id)
        //                                                     -> where('product_photos.isPrimary','=',1 )
        //                                                     ->firstOrFail();
    $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->leftjoin('product_photos', 'product_photos.product_id', '=', 'products.id')
            ->where('product_photos.isPrimary', 1)
            ->where('products.id', '=', $id)
            ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
            ->get();

        $cart = session()->get('cart', []);

        // dd($cart);


        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
            $cart[$id]['total'] = $products[0]->price * $request->quantity;
            // dd( $cart[$id])['quantity'];
        } else {
            $cart[$id] = [
                'product_id' => $products[0]->id,
                'product_name' => $products[0]->name,
                'image' => $products[0]->image,
                'quantity' => $request->quantity,
                'price' =>$products[0]->price,
                'total' =>$request->quantity * $products[0]->price

            ];
            // array_push($cart, $new);
        }
        // dd($cart);
        
        session()->put('cart', $cart);
        // dd(session('cart'));
        return view('./customer/cart');
        // return redirect()->back()->with('success', 'Product add to cart successfully!');

    }
    public function clearCart()
    {
        Session::flush();
        return view('./customer/home');
    }
    public function removeItem($id){
        $items = session('cart');
        // dd($id);
        if(!empty($items)){
            // $item = array_shift($items);
            unset($items[$id]);
            // dd($items);
            // $item = !is_array($item) ?? [];
            session()->put('cart', $items);
            return view('customer.cart')->with('success', "Deleted");
        }
        // dd(session('cart'));
        return view('customer.cart')->with('error', 'Delete Unsuccessfull');
    }
}
