<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Dashboard;
use App\Http\Controllers\C_Produk;

Route::get('/', [C_Auth::class, 'loginPage']);
Route::post('/auth/login/proses', [C_Auth::class, 'loginProses']);

Route::get('/dashboard',[C_Dashboard::class, 'dashboard']);
Route::get('/dashboard/beranda', [C_Dashboard::class, 'berandaPage']);

Route::get('/app/produk/data', [C_Produk::class, 'dataProdukPage']);
Route::post('/app/produk/tambah/proses', [C_Produk::class, 'prosesTambahProduk']);
Route::post('/app/produk/data/res', [C_Produk::class, 'getDataProdukRes']);