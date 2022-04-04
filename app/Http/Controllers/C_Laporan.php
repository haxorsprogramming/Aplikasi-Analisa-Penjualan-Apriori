<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Pengujian;

class C_Laporan extends Controller
{
    public function dataLaporan()
    {
        $dataPengujian = M_Pengujian::all();
        $dr = ['dataPengujian' => $dataPengujian];
       return view('main.laporan.laporanData', $dr); 
    }
}
