<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/adminLogin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/adminDashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('adminDashboard');

Route::get('/productList',[App\Http\Controllers\AdminController::class,'productList'])->name('productList');
Route::get('/addProduct',[App\Http\Controllers\AdminController::class,'addProduct'])->name('addProduct');
Route::get('/editProduct',[App\Http\Controllers\AdminController::class,'editProduct'])->name('editProduct');

Route::get('/customerList',[App\Http\Controllers\AdminController::class,'customerList'])->name('customerList');
Route::get('/orderList',[App\Http\Controllers\AdminController::class,'orderList'])->name('orderList');

Route::get('/staffList',[App\Http\Controllers\AdminController::class,'staffList'])->name('staffList');
Route::get('/addStaff',[App\Http\Controllers\AdminController::class,'addStaff'])->name('addStaff');
Route::get('/editStaff',[App\Http\Controllers\AdminController::class,'editStaff'])->name('editStaff');

