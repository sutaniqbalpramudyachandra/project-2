<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.adminx');
});
Route::get('/supplier', function () {
    return view('pages.supplier');
});
Route::get('/kategori', function () {
    return view('pages.kategori');
});
Route::get('/pelanggan', function () {
    return view('pages.pelanggan');
});
Route::get('/promo', function () {
    return view('pages.promo');
});
Route::get('/', function () {
    return view('pages.adminx');
});
Route::get('/product', function () {
    return view('pages.product');
});