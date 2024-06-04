<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//*********IMPORTANT******** */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login (Request $request)
    {

        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Create the userdata array with hashed password
        $userdata = [
            'name' => $validatedData['name'],
            'password' => Hash::make($validatedData['password']),
        ];
    dd($request);
    // $input = $request->all();
    // $userdata = array('name' => $input['name'], 'password' => $input['password']);
    // dd($userdata);
        // $validatedData = $this->validate(
        //     $request, [
        //     [
        //         'name' => 'required',
        //         'password' => 'required'
        //     ]
        // ]);

        // dd($validatedData);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        
        
        
        if($input['usertype'] == 'admin')
        {
            if(auth('admin')->attempt(($userdata))){
                dd("ok");
            }
            else{
                dd("wrong");
            }
            // $user = auth('admin')->user();
            // dd($user);

            
            // if(auth('admin')->attempt($userdata))
            // {
            //     $user = auth('admin')->user();
            //     dd($user);
            //     if($user->status =='Active')
            //     {
            //         return redirect()->route('adminDashboard');
            //     }
            //     else{
            //         Auth::logout();
            //         return redirect()->route('home')->with('error' , 'You don\'t have Account Access!');
            //     }
            // }

            // else
            // {
                // Auth::login();
                // return redirect()->route('admin.login')->with('error' , 'Wrong Email and Password');
            // }
        }


        if($input['usertype']=='customer'){
           
            if(auth('customer')->attempt(($userdata))){
                $user = auth('customer')->user();
                if($user->status == "Active"){
                    return redirect()->route('home');
                } 
                else{
                    Auth::logout();
                    return redirect()->route('customer.login')->with('error','You don\'t have Customer Account Access!');
                }
            }
            else{
                Auth::logout();
                return redirect()->route('customer.login')->with('error','Wrong email and password.');
            }
        }
        else{
            
            return redirect('customer.login')->with('error','You don\'t have Account Access!');
        }
    }

    public function CustomerLogout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('customer.login');
    }

    public function AdminLogout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('admin.login');
    }
}