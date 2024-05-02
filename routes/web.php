<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/adminLogin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/adminDashboard',[App\Http\Controllers\AdminController::class,'dashboard']);

Route::get('/productList',[App\Http\Controllers\AdminController::class,'productList']);
Route::get('/addProduct',[App\Http\Controllers\AdminController::class,'addProduct']);
Route::get('/editProduct',[App\Http\Controllers\AdminController::class,'editProduct']);

Route::get('/customerList',[App\Http\Controllers\AdminController::class,'customerList']);
Route::get('/orderList',[App\Http\Controllers\AdminController::class,'orderList']);

Route::get('/staffList',[App\Http\Controllers\AdminController::class,'staffList']);
Route::get('/addStaff',[App\Http\Controllers\AdminController::class,'addStaff']);
Route::get('/editStaff',[App\Http\Controllers\AdminController::class,'editStaff']);

