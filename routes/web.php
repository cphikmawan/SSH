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

Route::get('/', function () {
    return view('Front.frontpage');
});

Route::get('/about', function () {
    return view('Front.about');
});

Route::get('/donasi', function () {
    return view('Donasi.donasi');
});

Route::get('/dashboard', function () {
    return view('Dashboard.index');
});

Route::get('/post', function () {
    return view('Dashboard.post');
});

Route::get('/gallery', function () {
    return view('Dashboard.gallery');
});

Route::get('/comment', function () {
    return view('Dashboard.comment');
});

Route::get('/user', function () {
    return view('Dashboard.user');
});

Route::get('/donation', function () {
    return view('Dashboard.donation');
});

Route::get('/readmore', function () {
    return view('Front.readmore');
});

Route::get('/masuk', function () {
    return view('Auth.login');
});

Route::get('/daftar', function () {
    return view('Auth.register');
});

Route::get('/lupa_password', function () {
    return view('Auth.forgot');
});

Route::get('/info', function () {
    return view('Auth.info');
});