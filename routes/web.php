<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AttrController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/sigin',[UserController::class,'index'])->name('sigin');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('detail/{slug}', [HomeController::class, 'detail'])->name('detail');
Route::post('getSize', [HomeController::class, 'getSize']);
Route::post('getPrice', [HomeController::class, 'getPrice']);

Route::post('add-cart', [CartController::class, 'add'])->name('cart.add');
Route::get('show-cart', [CartController::class, 'index'])->name('cart.index');
// Admin 

// Route::get('admin',[HomeController::class,'index']);
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('admin');
    Route::get('category',[CategoryController::class,'index'])->name('category.index');
    Route::get('category-add',[CategoryController::class,'add'])->name('category.add');
    Route::post('category-add',[CategoryController::class,'create']);
    Route::resource('attr', AttrController::class);
    Route::post('attr-value-add',[AttrController::class,'addValue'])->name('attr.addValue');

    // product
    Route::resource('product', ProductController::class);
    Route::get('product-variant/{id}',[ProductController::class,'variant'])->name('product.variant');
    Route::post('product-variant/{id}',[ProductController::class,'variantPost']);
});
Route::get('admin-login', [DashboardController::class,'login'])->name('login.admin');
Route::post('admin-login', [DashboardController::class,'postLogin'])->name('post-login.admin');

