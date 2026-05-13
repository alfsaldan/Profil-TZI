<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/produk-detail', [PageController::class, 'produkDetail'])->name('produk-detail');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
