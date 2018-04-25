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

Route::get('/readmore', function () {
    return view('Front.readmore');
});