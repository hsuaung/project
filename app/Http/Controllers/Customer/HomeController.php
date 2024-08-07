<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    
    public function home(){
       
        
            $grid_items=Category::limit(5) ->withCount('products')->get();
        //For New Products
        $categories=DB::table('categories')
        ->select('categories.*')->get();

        $products=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
        
        
        
        return view ('./customer/home',compact('categories','products','grid_items'));
    }
   

    public function clearSession(){
        
        Session::flush();
        return redirect('/');
    }

}