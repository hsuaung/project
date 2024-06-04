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

class CustomerController extends Controller
{
    // public function home(){
        
    //     $sofalist=DB::table('products')
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
    //     ->where('product_photos.isPrimary', 1)
    //     ->where('categories.name','=','sofa')
    //     ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
     
    //     $bedlist=DB::table('products')
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
    //     ->where('product_photos.isPrimary', 1)
    //     ->where('categories.name','=','bed')
    //     ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
        
    //     $lamplist=DB::table('products')
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
    //     ->where('product_photos.isPrimary', 1)
    //     ->where('categories.name','=','lamp')
    //     ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
     
        
    //     $cabinetlist=DB::table('products')
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
    //     ->where('product_photos.isPrimary', 1)
    //     ->where('categories.name','=','cabinet')
    //     ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();

    //     $chairlist=DB::table('products')
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
    //     ->where('product_photos.isPrimary', 1)
    //     ->where('categories.name','=','chair')
    //     ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();

    //     $tablelist=DB::table('products')
    //     ->join('categories', 'categories.id', '=', 'products.category_id')
    //     ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
    //     ->where('product_photos.isPrimary', 1)
    //     ->where('categories.name','=','table')
    //     ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')->get();
    //      $grid_items =  Category::whereIn('name', ['sofa', 'bed', 'lamp' , 'cabinet' ,'table'])->withCount('products')
    //     ->get();
        
    //     return view ('./customer/home',compact('grid_items','sofalist','bedlist','lamplist','cabinetlist','chairlist','tablelist'));
    // }

    public function blog(){
        return view ('./customer/blog');
    }
   
   
    public function category(){
        return view ('./customer/category');
    }
    public function checkout(){
        return view ('./customer/checkout');
    }
    public function contact(){
        return view ('./customer/contact');
    }
    public function detail ($id){
        $product=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        // ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('products.id', $id)
        ->select('products.*', 'categories.name as categoryName')
        ->get();

        $images=DB::table('product_photos')
        ->join('products','products.id','=','product_photos.product_id')
        ->where('products.id', $id)
        ->select('product_photos.image')
        ->get();
        return view ('./customer/detail',compact('product','images'));
    }
    public function login(){
        return view ('./customer/login');
    }
    
    public function registerProcess(Request $request){
        // dd($request->image);
        $path = $request->file('image')->store('images/customer', 'public');
        $url = Storage::url($path);
        $uuid = Str::uuid()->toString();
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->password =Hash::make($request->password);
        $customer->image = $url;
        $customer->uuid= $uuid;
        $customer->status= "Active";
        
        $customer->save();
        return redirect()->to('/home');

    }
    public function shop(){
        $productlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
        ->get();
       
        return view ('./customer/shop',compact('productlist'));
    }

    public function productByCategory($category){
        
        $productlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=',$category)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
        ->get();
        return view ('./customer/category',compact('productlist','category'));
 
     
    }
    public function story(){
        return view ('./customer/story');
    }


}