<?php
namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Synfony\Component\HttpFoundation\Response;

class RedirectIfAutheniticated{
    public function handle(Request $request,Closure $next, string ...$guards): Response
    {
        $guards =empty($guards) ? [null] : $guards;
        foreach ($guards as $guard){
            if (Auth::guard($guard)->check()){
                // return redirect(ProvidersRouteServiceProvider::HOME);
                if($guard === 'admin'){
                    return redirect()->route('login_handler');
                }
            }

        }
        return $next($request);
    }
}

