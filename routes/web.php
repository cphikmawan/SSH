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


//
Route::get('/harga', function () {
    return view('harga.harga');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
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