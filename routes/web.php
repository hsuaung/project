<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerController;



Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');

  
Route::prefix('admin')->name('admin.')->group(function(){
    // Route::view('/home','admin.home')->name('home');
    // Route::view('/login','admin.auth.login')->name('login');
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login','admin.auth.login')->name('login');
         
    });
   
        

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','admin.home')->name('home');
    });
});



// Route::get('/', function () {
//     return view('welcome');
// });



// Route::middleware(['admin'])->group(function(){
//     Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

//     Route::get('/admin/login/process',[App\Http\Controllers\Auth\LoginController::class, 'login'])->name("adminLoginProcess");
//     Route::get('/adminDashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('adminDashboard');
// });



// Route::get('/productList',[App\Http\Controllers\AdminController::class,'productList'])->name('productList');
// Route::get('/addProduct',[App\Http\Controllers\AdminController::class,'addProduct'])->name('addProduct');
// Route::get('/editProduct',[App\Http\Controllers\AdminController::class,'editProduct'])->name('editProduct');

// Route::get('/customerList',[App\Http\Controllers\AdminController::class,'customerList'])->name('customerList');
// Route::get('/orderList',[App\Http\Controllers\AdminController::class,'orderList'])->name('orderList');

// Route::get('/staffList',[StaffController::class,'stafflist'])->name('staffList');
// Route::get('/addStaff',[App\Http\Controllers\StaffController::class,'addStaff'])->name('addStaff');
// Route::post('/addStaffProcess',[App\Http\Controllers\StaffController::class,'addStaffProcess'])->name('addStaffProcess');
// Route::get('/editStaff{id}',[App\Http\Controllers\StaffController::class,'editStaff'])->name('editStaff');
// Route::post('/editStaffProcess',[App\Http\Controllers\StaffController::class,'editStaffProcess'])->name('editStaffProcess');
// Route::get('/deleteStaffProcess{id}',[App\Http\Controllers\StaffController::class,'deleteStaffProcess'])->name('deleteStaffProcess');



// Auth::routes();


// Route::get('/editStaff',[App\Http\Controllers\AdminController::class,'editStaff'])->name('editStaff');


// Route::get('/home', [App\Http\Controllers\CustomerController::class, 'home'])->name('home');
// Route::get('/blog', [App\Http\Controllers\CustomerController::class, 'blog'])->name('blog');
// Route::get('/cart', [App\Http\Controllers\CustomerController::class, 'cart'])->name('cart');
// Route::get('/category', [App\Http\Controllers\CustomerController::class, 'category'])->name('category');
// Route::get('/checkout', [App\Http\Controllers\CustomerController::class, 'checkout'])->name('checkout');
// Route::get('/contact', [App\Http\Controllers\CustomerController::class, 'contact'])->name('contact');
// Route::get('/detail', [App\Http\Controllers\CustomerController::class, 'detail'])->name('detail');
// Route::get('/login', [App\Http\Controllers\CustomerController::class, 'login'])->name('login');
// Route::get('/shop', [App\Http\Controllers\CustomerController::class, 'shop'])->name('shop');
// Route::get('/story', [App\Http\Controllers\CustomerController::class, 'story'])->name('story');


// // Route::get('/test/home', [App\Http\Controllers\CustomerController::class, 'home'])->name('home');
