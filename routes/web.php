<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Dashboard;
use App\Http\Controllers\C_Produk;
use App\Http\Controllers\C_Penjualan;
use App\Http\Controllers\C_Apriori;


Route::get('/', [C_Auth::class, 'loginPage']);
Route::post('/auth/login/proses', [C_Auth::class, 'loginProses']);

Route::get('/dashboard',[C_Dashboard::class, 'dashboard']);
Route::get('/dashboard/beranda', [C_Dashboard::class, 'berandaPage']);

Route::get('/app/produk/data', [C_Produk::class, 'dataProdukPage']);
Route::post('/app/produk/tambah/proses', [C_Produk::class, 'prosesTambahProduk']);
Route::post('/app/produk/data/res', [C_Produk::class, 'getDataProdukRes']);
Route::post('/app/produk/update/proses', [C_Produk::class, 'prosesUpdateProduk']);
Route::post('/app/produk/hapus/proses', [C_Produk::class, 'prosesHapusProduk']);
Route::post('/app/produk/import/proses', [C_Produk::class, 'prosesImportProduk']);

Route::get('/app/penjualan/data', [C_Penjualan::class, 'dataPenjualanPage']);
Route::get('/app/penjualan/detail/{kdFaktur}', [C_Penjualan::class, 'detailPenjualan']);

Route::get('/app/apriori/setup', [C_Apriori::class, 'setupPerhitunganApriori']);
Route::post('/app/apriori/analisa/proses', [C_Apriori::class, 'prosesAnalisaApriori']);
Route::get('/app/apriori/analisa/hasil/{kdPengujian}', [C_Apriori::class, 'hasilAnalisa']);