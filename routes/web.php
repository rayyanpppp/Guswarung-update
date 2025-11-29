<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sell', function () {
    return view('penjualan');
});

Route::get('/stock', function () {
    return view('inventaris');
});

Route::get('/checkout', function () {
    return view('keranjang');
});

Route::get('/report', function () {
    return view('laporan');
});

Route::get('/setting', function () {
    return view('pengaturan');
});