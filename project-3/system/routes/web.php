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
    return view('index');
});


Route::get('cart', function () {
    return view('cart');
});


Route::get('category', function () {
    return view('category');
});

Route::get('contact_process', function () {
    return view('contact_process');
});


Route::get('checkout', function () {
    return view('checkout');
});


Route::get('contact', function () {
    return view('contact');
});

Route::get('login', function () {
    return view('login');
});

Route::get('single-product', function () {
    return view('single-product');
});



Route::get('/tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('/beranda', function () {
    return view('admin.section.beranda');
});

Route::get('/product', function () {
    return view('admin.section.product');
});

Route::get('/kategori', function () {
    return view('admin.section.kategori');
});

Route::get('/promo', function () {
    return view('admin.section.promo');
});

Route::get('/pelanggan', function () {
    return view('admin.section.pelanggan');
});

Route::get('/supplier', function () {
    return view('admin.section.supplier');
});

Route::get('/login_admin', function () {
    return view('admin.section.login_admin');
});