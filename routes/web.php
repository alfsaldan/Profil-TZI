<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

Route::get('/produk-detail', function () {
    return view('pages.produk-detail');
});
