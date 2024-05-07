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


Route::get('/home', [App\Http\Controllers\CustomerController::class, 'home'])->name('home');
Route::get('/blog', [App\Http\Controllers\CustomerController::class, 'blog'])->name('blog');
Route::get('/cart', [App\Http\Controllers\CustomerController::class, 'cart'])->name('cart');
Route::get('/category', [App\Http\Controllers\CustomerController::class, 'category'])->name('category');
Route::get('/checkout', [App\Http\Controllers\CustomerController::class, 'checkout'])->name('checkout');
Route::get('/contact', [App\Http\Controllers\CustomerController::class, 'contact'])->name('contact');
Route::get('/detail', [App\Http\Controllers\CustomerController::class, 'detail'])->name('detail');
Route::get('/login', [App\Http\Controllers\CustomerController::class, 'login'])->name('login');
Route::get('/shop', [App\Http\Controllers\CustomerController::class, 'shop'])->name('shop');
Route::get('/story', [App\Http\Controllers\CustomerController::class, 'story'])->name('story');