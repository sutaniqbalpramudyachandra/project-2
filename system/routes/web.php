<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/regular-page', function () {
    return view('pages.regular-page');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/single-blog', function () {
    return view('pages.single-blog');
});
Route::get('/single-product-details', function () {
    return view('pages.single-product-details');
});
Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/admin', function () {
    return view('template.base');
});

Route::get('/beranda', [HomeController::class,'showBeranda']);
Route::get('/kategori', [HomeController::class,'showKategori']);
Route::get('/promo', [HomeController::class,'showPromo']);
Route::get('/supplier', [HomeController::class,'showSupplier']);
Route::get('/pelanggan', [HomeController::class,'showPelanggan']);
Route::get('/loginadmin', [AuthController::class,'showLoginAdmin']);


Route::get('/product', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::post('/product', [ProductController::class,'store']);
Route::get('product/{product}',[ProductController::class,'show']) ;
Route::get('product/{product}/edit',[ProductController::class,'edit']) ;
Route::put('product/{product}',[ProductController::class,'update']) ;
Route::delete('product/{product}',[ProductController::class,'destroy']) ;