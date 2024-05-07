<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home(){
        return view ('./customer/home');
    }
    public function blog(){
        return view ('./customer/blog');
    }
    public function cart(){
        return view ('./customer/cart');
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
    public function detail(){
        return view ('./customer/detail');
    }
    public function login(){
        return view ('./customer/login');
    }
    public function shop(){
        return view ('./customer/shop');
    }
    public function story(){
        return view ('./customer/story');
    }
}