<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//*********IMPORTANT******** */
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
        $userdata = $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
          ],
            [
                'username.required' => 'Username Field is Required.',
                'password.required' => 'Password Field is Required.',
            ],
        );

        $input = Staff::where('name', $userdata['username'])->first() ;
        if($input){
            $role_id=$input->role_id;
            $role = role::find($role_id);
            if( ($input->name === $userdata['username'] ) && (Hash::check($userdata['password'], $input->password ))){
                // dd("home");
                if( $role->name ==="Admin")
                {
                    // dd("admin home");
                    return redirect()->route('adminDashboard');
                }
                else if ($role->name ==="Manager"){
                    dd("Manager home");
                }
                else{
                    dd("Staff home");
                }

            }else
            {
                return redirect()->route('admin.login');
            }
           
         }
         else {
            // dd("incorrect");
            return redirect()->route('admin.login')->with('error' , 'Wrong Email and Password');
         }

        // if($input['usertype'] == 'admin')
        // {
            
        //     if(auth('admin') ->attempt($userdata))
        //     {
        //         $user = auth('admin')->user();
        //         if($user->status =='Active')
        //         {
        //             return redirect()->route('admin.home');
        //         }
        //         else{
        //             Auth::logout();
        //             return redirect()->route('admin.login')->with('error' , 'You don\'t have Account Access!');
        //         }
        //     }

        //     else
        //     {
        //         Auth::login();
        //         return redirect()->route('admin.login')->with('error' , 'Wrong Email and Password');
        //     }
        // }


        // if($input['usertype']=='customer'){
           
        //     if(auth('customer')->attempt(($userdata))){
        //         $user = auth('customer')->user();
        //         if($user->status == "Active"){
        //             return redirect()->route('home');
        //         } 
        //         else{
        //             Auth::logout();
        //             return redirect()->route('customer.login')->with('error','You don\'t have Customer Account Access!');
        //         }
        //     }
        //     else{
        //         Auth::logout();
        //         return redirect()->route('customer.login')->with('error','Wrong email and password.');
        //     }
        // }
        // else{
            
        //     return redirect('customer.login')->with('error','You don\'t have Account Access!');
        // }
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