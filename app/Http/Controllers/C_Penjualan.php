<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Penjualan;

class C_Penjualan extends Controller
{
    public function dataPenjualanPage()
    {
        $dataPenjualan = M_Penjualan::distinct() -> get(['no_faktur']);
        $dr = ['dataPenjualan' => $dataPenjualan];
        return view('main.penjualan.penjualan', $dr);
    }
}
