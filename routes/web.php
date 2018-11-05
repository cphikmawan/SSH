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

Route::get('/pesan', function () {
    return view('front.info');
});

//
Route::get('/harga', function () {
    return view('harga.harga');
});

Route::get('/pesan_donasi', function () {
    return view('harga.info');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/post', function () {
    return view('dashboard.post');
});

Route::get('/gallery', function () {
    return view('dashboard.gallery');
});

Route::get('/comment', function () {
    return view('dashboard.comment');
});

Route::get('/user', function () {
    return view('dashboard.user');
});

Route::get('/donation', function () {
    return view('dashboard.donation');
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