<?php

use App\Http\Controllers\C_Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\C_Auth::class, 'loginPage']);
Route::post('/auth/login/proses', [C_Auth::class, 'loginProses']);

Route::get('/dashboard', [\App\Http\Controllers\C_Dashboard::class, 'dashboard']);