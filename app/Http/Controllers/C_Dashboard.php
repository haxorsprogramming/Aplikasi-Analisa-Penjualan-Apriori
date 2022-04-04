<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Produk;
use App\Models\M_Penjualan;

class C_Dashboard extends Controller
{
    public function dashboard()
    {
        return view('main.dashboard');
    }
    public function berandaPage()
    {
        $totalProduk = M_Produk::count();
        $totalPenjualan = M_Penjualan::count();
        $totalHarga = M_Produk::sum('harga');
        $transaksiTerakhir = M_Penjualan::distinct() -> take (7) -> get(['no_faktur']);
        $rataRata = $totalHarga / $totalProduk;
        $dr = [
            'totalProduk' => $totalProduk,
            'totalPenjualan' => $totalPenjualan,
            'rataRata' => $rataRata,
            'transaksiTerakhir' => $transaksiTerakhir
        ];
        return view('main.berandaPage', $dr);
    }

    public function infoAplikasi()
    {
        return view('main.infoAplikasi');
    }

    function setAwal()
    {
        $dataAwal = array();
        $dr = ['respon' => $dataAwal];
        return \Response::json($dr);
    }
}
