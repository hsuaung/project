<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;

// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::middleware(['guest:admin'])->group(function(){
//         Route::view('/login','admin.login')->name('login');
//     });

//     Route::middleware(['auth:admin'])->group(function(){
//            });
// });