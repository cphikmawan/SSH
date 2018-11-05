<?php

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

//frontpage
Route::get('/', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/harga', function () {
    return view('front.order.harga');
});

Route::get('/formulir', function () {
    return view('front.order.formulir');
});

Route::get('/invoice', function () {
    return view('front.order.invoice');
});

Route::get('/faq', function () {
    return view('front.order.faq');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/pesanan', function () {
    return view('dashboard.pesanan');
});

Route::get('/detail_pesanan', function () {
    return view('dashboard.detail_pesanan');
});

Route::get('/pelanggan', function () {
    return view('dashboard.pelanggan');
});

Route::get('/detail_pelanggan', function () {
    return view('dashboard.detail_pelanggan');
});

//auth
Route::get('/masuk', function () {
    return view('auth.login');
});

Route::get('/daftar', function () {
    return view('auth.register');
});

Route::get('/lupa_password', function () {
    return view('auth.forgot');
});

Route::get('/info', function () {
    return view('auth.info');
});