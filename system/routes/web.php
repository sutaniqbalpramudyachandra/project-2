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
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/panels', function () {
    return view('pages.panels');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/loginadmin', function () {
    return view('pages.loginadmin');
});
Route::get('/inbox', function () {
    return view('pages.inbox');
});
Route::get('/', function () {
    return view('pages.adminx');
});