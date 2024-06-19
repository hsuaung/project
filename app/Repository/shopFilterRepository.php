<?php

namespace App\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shopFilterRepository{

    public function filter(Request $request){
        $orderby=$request->orderby;
        $data = array();
        if($request->price=='below'){
          $data[count($data)]=['products.price','<=',500];
        } elseif($request->price=='between'){
          
            $data[count($data)]=['products.price','>',500 ,'AND','products.price','<',1000] ;
        }
        elseif($request->price=='abpve'){
            $data[count($data)]=['products.price','>=',1000];
          }
        $category_id='products.category_id';
        if(!empty($request->category)){
            $data[count($data)]=[$category_id, 'LIKE','%'.$request->category.'%'];
        }
        $productlist=DB::table('products')
        ->join('product_photos','product_photos.product_id','=','products.id')
        ->where('product_photos.isPrimary','=',1)
        ->where($data)
        ->orderBy('products.id', $orderby)
        ->get();
        $categories=DB::table('categories')
        ->select('*')
        ->get();
        return view('customer.shop',compact('categories','productlist'));
        
    }
    public function search(Request $request){

        $search = $request->search;
        $productlist=DB::table('products')
        ->join('product_photos','product_photos.product_id','=','products.id')
        ->where('product_photos.isPrimary','=',1)
          ->where('products.name', 'like', "%$search%")
        ->get();
        $categories=DB::table('categories')
        ->select('*')
        ->get();
        return view('customer.shop',compact('categories','productlist'));
        
    }

}