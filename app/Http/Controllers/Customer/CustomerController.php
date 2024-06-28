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
use App\Repository\shopFilterRepository;
use App\Repository\categoryFilterRepository;

class CustomerController extends Controller
{
    private $itemRepository;
    private $categoryRepository;

    public function __construct(shopFilterRepository $itemRepository, categoryFilterRepository $categoryRepository)
    {
        $this->itemRepository = $itemRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function blog(){
        return view ('./customer/blog');
    }
   
   
    public function category(){
        return view ('./customer/category');
    }
   
    public function contact(){
        return view ('./customer/contact');
    }
    public function detail ($id){
        $product=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->where('products.id', $id)
        ->select('products.*', 'categories.name as categoryName')
        ->get();
    
        
        $images=DB::table('product_photos')
        ->join('products','products.id','=','product_photos.product_id')
        ->where('products.id', $id)
        ->select('product_photos.image')
        ->get();

        $categoryID=DB::table('products')
        ->where('products.id', $id)
        ->select('products.category_id')
        ->pluck('products.category_id');
      
        $productlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('products.category_id', $categoryID)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
        ->get();
        return view ('./customer/detail',compact('product','images' ,'productlist'));

    }
    public function login(){
        return view ('./customer/login');
    }
    
    public function registerProcess(Request $request){
        
        
        $path = $request->file('image')->store('images/customer', 'public');
        $url = Storage::url($path);
        $uuid = Str::uuid()->toString();

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->password = Hash::make($request->password);
        $customer->image = $url;
        $customer->uuid= $uuid;
        $customer->status= "Active";
        
        $customer->save();
        return redirect()->to('./customer/login');

    }
    
    public function shop(){
        $productlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
        ->get();
       
        $categories=DB::table('categories')
        ->select('categories.*')
        ->get();
        return view ('./customer/shop',compact('productlist','categories'));
    }
    public function shopFilter(Request $request){
            
            $response = $this->itemRepository->filter($request);
            return $response;
        

    }
    public function shopSearch(Request $request){
       
        $response = $this->itemRepository->search($request);
        return $response;
    

}
    public function productByCategory($category){
        
        $productlist=DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->join('product_photos', 'product_photos.product_id', '=', 'products.id')
        ->where('product_photos.isPrimary', 1)
        ->where('categories.name','=',$category)
        ->select('products.*', 'categories.name as categoryName', 'product_photos.image as image')
        ->get();

        $categories=DB::table('categories')
        ->select('categories.*')
        ->get();
        return view ('./customer/category',compact('productlist','categories','category'));
 
     
    }
    public function categoryFilter(Request $request){
            
        $response = $this->itemRepository->filter($request);
        return $response;
    

}
public function categorySearch(Request $request){
 
    $response = $this->itemRepository->search($request);
    return $response;


}
    public function story(){
        return view ('./customer/story');
    }


}