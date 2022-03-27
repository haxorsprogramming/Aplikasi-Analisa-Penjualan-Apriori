<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Penjualan extends Controller
{
    public function dataPenjualanPage()
    {
        return view('main.penjualan.penjualan');
    }
}
