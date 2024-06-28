<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/admin/adminDashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['myLogout', 'logout']);
        // $this->middleware('auth:admin')->only(['myLogout', 'logout']);
    }

    public function showAdminLogin()
    {
        return view("admin.login");
    }

    public function myLogout(Request $request)
    {

        return $this->logout($request);
    }

    protected function guard()
    {
        
        return Auth::guard('admin');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/admin/login');
    }


    public function customerLogin(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('customer')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            dd('OK');
            return redirect()->intended('/');
        }else{
            // Log::warning('Failed to login attempt', ['email'=>$request->password]);
            dd('Something!');
        }
    }
}
