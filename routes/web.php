<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\C_Auth::class, 'loginPage']);
