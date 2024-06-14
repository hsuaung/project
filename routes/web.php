<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadImageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\CartController;

Route::get('/admin/login', [LoginController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin/login/process', [LoginController::class, 'login'])->name('admin.login.process');
Route::get('/admin/logout', [LoginController::class, 'myLogout'])->name('admin.logout');

Route::group(['prefix'=>'admin', 'middleware'=>['admin']], function(){
    Route::get('/adminDashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
    Route::get('/productList', [ProductController::class, 'productList'])->name('productList');
    Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('/addProductProcess', [ProductController::class, 'addProductProcess'])->name('addProductProcess');
    Route::get('/editProduct/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
    Route::post('/editProductProcess', [ProductController::class, 'editProductProcess'])->name('editProductProcess');
    Route::get('/deleteProductProcess/{id}', [ProductController::class, 'deleteProductProcess'])->name('deleteProductProcess');
    Route::get('/searchProduct', [ProductController::class, 'searchProduct'])->name('searchProduct');
    
    Route::get('/staffList', [StaffController::class, 'stafflist'])->name('staffList');
    Route::get('/addStaff', [StaffController::class, 'addStaff'])->name('addStaff');
    Route::post('/addStaffProcess', [StaffController::class, 'addStaffProcess'])->name('addStaffProcess');
    Route::get('/editStaff{id}', [StaffController::class, 'editStaff'])->name('editStaff');
    Route::post('/editStaffProcess', [StaffController::class, 'editStaffProcess'])->name('editStaffProcess');
    Route::get('/deleteStaffProcess{id}', [StaffController::class, 'deleteStaffProcess'])->name('deleteStaffProcess');
    Route::get('/searchStaff', [StaffController::class, 'searchStaff'])->name('searchStaff');
    Route::get('/dateFilter', [StaffController::class, 'dateFilter'])->name('dateFilter');
    
    Route::get('/categoryList', [CategoryController::class, 'categoryList'])->name('categoryList');
    Route::get('/addCategory', [CategoryController::class, 'addCategory'])->name('addCategory');
    Route::post('/addCategoryProcess', [CategoryController::class, 'addCategoryProcess'])->name('addCategoryProcess');
    Route::get('/editCategory{id}', [CategoryController::class, 'editCategory'])->name('editCategory');
    Route::post('/editCategoryProcess', [CategoryController::class, 'editCategoryProcess'])->name('editCategoryProcess');
    Route::get('/deleteCategoryProcess{id}', [CategoryController::class, 'deleteCategoryProcess'])->name('deleteCategoryProcess');
    Route::get('/searchCategory', [CategoryController::class, 'searchCategory'])->name('searchCategory');
    
    Route::get('/addBlog', [BlogController::class, 'addBlog'])->name('addBlog');
    
    
    Route::get('/customerList', [AdminController::class, 'customerList'])->name('customerList');
    Route::get('/orderList', [AdminController::class, 'orderList'])->name('orderList');
});

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blog', [CustomerController::class, 'blog'])->name('blog');

Route::get('/productByCategory/' . '{category}', [CustomerController::class, 'productByCategory'])->name('productByCategory');

Route::post('/addtocart', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/clearCart', [CartController::class, 'clearCart'])->name('clearCart');
Route::get('/updateCart', [CartController::class, 'updateCart'])->name('updateCart');
Route::get('/removeItem/{id}', [CartController::class, 'removeItem'])->name('removeItem');

Route::get('/category', [CustomerController::class, 'category'])->name('category');

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/contact', [CustomerController::class, 'contact'])->name('contact');
Route::get('/detail/{id}', [CustomerController::class, 'detail'])->name('detail');


// Route::get('/detail{id}', [App\Http\Controllers\CustomerController::class, 'detail'])->name('detail');

Route::get('/customer/login', [CustomerController::class, 'login'])->name('login');

Route::post('/customer/register/process', [CustomerController::class, 'RegisterProcess'])->name('customer.register.process');

Route::get('/shop', [CustomerController::class, 'shop'])->name('shop');
Route::get('/story', [CustomerController::class, 'story'])->name('story');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
