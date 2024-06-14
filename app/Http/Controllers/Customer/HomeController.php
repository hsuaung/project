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

class HomeController extends Controller
{
    
    public function home(){
        //For Home Grid
        $categoryNames = DB::table('categories')
        ->select('name')
        ->pluck('name');
           $grid_items = Category::whereIn('name', $categoryNames)
            ->withCount('products')
            ->take(5)
            ->get();
        

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
   


}