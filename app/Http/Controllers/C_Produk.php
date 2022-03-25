<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Produk;
use App\Models\M_Kategori;

class C_Produk extends Controller
{
    public function dataProdukPage()
    {
        $dataProduk = M_Produk::all();
        $dataKategori = M_Kategori::all();
        $dr = ['dataProduk' => $dataProduk, 'dataKategori' => $dataKategori];
        return view('main.produk.produk', $dr);
    }
}
