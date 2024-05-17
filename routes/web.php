<?php

use App\Http\Controllers\Admin\UploadImageController as AdminUploadImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;


    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/admin/login/process', [LoginController::class, 'login'])->name('admin.login.process');
    Route::get('/adminDashboard',[AdminController::class,'dashboard'])->name('adminDashboard');

    Route::get('/productList',[ProductController::class,'productList'])->name('productList');
    Route::get('/addProduct',[ProductController::class,'addProduct'])->name('addProduct');
    Route::post('/addProductProcess',[ProductController::class,'addProductProcess'])->name('addProductProcess');
    Route::get('/editProduct/{id}',[ProductController::class,'editProduct'])->name('editProduct');
    Route::post('/editProductProcess',[ProductController::class,'editProductProcess'])->name('editProductProcess');
    Route::get('/deleteProductProcess/{id}',[ProductController::class,'deleteProductProcess'])->name('deleteProductProcess');

    Route::get('/staffList',[StaffController::class,'stafflist'])->name('staffList');
    Route::get('/addStaff',[StaffController::class,'addStaff'])->name('addStaff');
    Route::post('/addStaffProcess',[StaffController::class,'addStaffProcess'])->name('addStaffProcess');
    Route::get('/editStaff{id}',[StaffController::class,'editStaff'])->name('editStaff');
    Route::post('/editStaffProcess',[StaffController::class,'editStaffProcess'])->name('editStaffProcess');
    Route::get('/deleteStaffProcess{id}',[StaffController::class,'deleteStaffProcess'])->name('deleteStaffProcess');

    
    Route::get('/categoryList',[CategoryController::class,'categoryList'])->name('categoryList');
    Route::get('/addCategory',[CategoryController::class,'addCategory'])->name('addCategory');
    Route::post('/addCategoryProcess',[CategoryController::class,'addCategoryProcess'])->name('addCategoryProcess');
    Route::get('/editCategory{id}',[CategoryController::class,'editCategory'])->name('editCategory');
    Route::post('/editCategoryProcess',[CategoryController::class,'editCategoryProcess'])->name('editCategoryProcess');
    Route::get('/deleteCategoryProcess{id}',[CategoryController::class,'deleteCategoryProcess'])->name('deleteCategoryProcess');
    
    
Route::get('/customerList',[AdminController::class,'customerList'])->name('customerList');
Route::get('/orderList',[AdminController::class,'orderList'])->name('orderList');


// Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
// Route::prefix('admin')->name('admin.')->group(function(){
    // Route::view('/home','admin.home')->name('home');
    // Route::view('/login','admin.auth.login')->name('login');
    // Route::middleware(['admin'])->group(function(){
       
           // });
    // Route::middleware(['admin'])->group(function(){
        // Route::view('/home','admin.home')->name('home');
    // });
// });



Route::get('/', function () {
    return view('layouts.admin.masterLayout');
});
Route::get('/test', function () {
    return view('admin.test');
});




// // Route::middleware(['admin'])->group(function(){
// //     Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

// //     Route::get('/admin/login/process',[App\Http\Controllers\Auth\LoginController::class, 'login'])->name("adminLoginProcess");
    // // });









Auth::routes();


// // Route::get('/editStaff',[App\Http\Controllers\AdminController::class,'editStaff'])->name('editStaff');
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


// Route::get('/test/home', [App\Http\Controllers\CustomerController::class, 'home'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
