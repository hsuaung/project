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
        
        $sofalist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=','sofa')
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
     
        $bedlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=','bed')
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
        
        $lamplist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=','lamp')
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
     
        
        $cabinetlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=','cabinet')
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();

        $chairlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=','chair')
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();

        $tablelist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=','table')
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
        
        $category=DB::table('categories')
        ->select('categories.name')->get();

        $products=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
        
        $categoryName=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->select('categories.name as categoryName')
        ->distinct()->get();
        $category_names = $categoryName->pluck('categoryName')->toArray();
        
        $grid_items = Category::whereIn('name', $category_names)
            ->withCount('products')
            ->take(5)
            ->get();
        
        return view ('./customer/home',compact('category','products','grid_items','category_names','sofalist','bedlist','lamplist','cabinetlist','chairlist','tablelist'));
    }
   


}