<?php
namespace App\Http\Middleware;

// use Illuminate\Http\Middleware\Authenticate as Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware{
    protected function redirectTo(Request $request): ?string{
        // dd('test');
        if($request->expectsJson()){
            if($request->routeIst('admin.*')){
                session()->flash('fail','You must login first');
                return route('admin.login');
            }
        }
    }
}