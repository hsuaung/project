<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// class AdminController extends Controller{
  //   public function index(){
  //       return view ('./admin/login');
  // }

  // public function loginHandler(Request $request){
  //   dd("handler");
  // }
  // public function loginHandler(Request $request){
  //   // return 'hello admin login';

  //   $fieldType=filter_var($request->login_id, FILTER_VALIDATE_EMAIL)? 'email': 'name';
    
  //   if($fieldType =='email'){
  //       $request->validate([
  //         'login_id'=>'required|email|exists::staff,email',
  //         'password'=>'required|min:3|max:45'
  //       ],[
  //         'login_id.required'=>'Email or Username is required',
  //         'login_id.email'=>'Invalid email address',
  //         'login_id.exists'=> 'Email is not exists in system',
  //         'password.required'=>'Password is required'
  //       ]);
  //   }
  //   // else{
  //   //   $request->validate([
  //   //     'login_id'=>'required|exists::staff,name',
  //   //     'password'=>'required|min:3|max:45'
  //   //   ],[
  //   //       'login_id.required'=>'Email or Username is required',
  //   //        'login_id.exists'=> 'Username is not exists in system',
  //   //       'password.required'=>'Password is required'
        
  //   //   ]);
  //   // }

  //   $creds=array(
  //     $fieldType=>$request->login_id,
  //     'password'=>$request->password
  //   );
  //   if(Auth::guard('admin')->attempt($creds)){
  //     return redirect()->route('admin.home');
  //   }
  //   else{
  //     session()->flash('fail','Incorrect credentials');
  //     return redirect()->route('admin.login');
  //     }
  // }
            
// }
class AdminController extends Controller
{
    //
    public function login(){
        return view('./admin/login');
    }
    public function dashboard()
    {
        return view('./admin/dashboard');
    }
    public function customerList()
    {
        return view('./admin/customerList');
    }
    public function orderList()
    {
        return view('./admin/orderList');
    }
    
}
