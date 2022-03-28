<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\M_Pengujian;
use App\Models\M_Penjualan;
use App\Models\M_Produk;
use App\Models\M_Support;

class C_Apriori extends Controller
{
    public function setupPerhitunganApriori()
    {
        return view('main.apriori.setup');
    }

    public function prosesAnalisaApriori(Request $request)
    {
        $minSupp = 10;
        // 'support': support,
        //     'confidence': confidence,
        //     'nama' : nama
        // $
        // insert data pengujian 
        $kdPengujian = Str::uuid();
        $pengujian = new M_Pengujian();
        $pengujian -> kd_pengujian = $kdPengujian;
        $pengujian -> nama_penguji = $request -> nama;
        $totalProduk = M_Produk::count();
        // cari nilai support 
        $dataProduk = M_Produk::all();
        foreach($dataProduk as $produk){
            $kdProduk = $produk -> kd_produk;
            $totalTransaksi = M_Penjualan::where('kd_barang', $kdProduk) -> count();
            $nSupport = ($totalTransaksi / $totalProduk) * 100;
            $supp = new M_Support();
            $supp -> kd_pengujian = $kdPengujian;
            $supp -> kd_produk = $kdProduk;
            $supp -> support = $nSupport;
            $supp -> save();
        }
        // kombinasi 2 item set 
        $qProdukA = M_Support::where('kd_pengujian', $kdPengujian) -> where('support', '>=', $minSupp) -> get();
        foreach($qProdukA as $qProdA){
            $kdProdukA = $qProdA -> kd_produk;
            $qProdukB = M_Support::where('kd_pengujian', $kdPengujian) -> where('support', '>=', $minSupp) -> get();
            foreach($qProdukB as $qProdB){
                $kdProdukB = $qProdB -> kd_produk;
                // $qJumlahB = 
            }
        }

        $pengujian -> save();
        $dr = ['status' => 'sukses', 'prodA' => $qProdukA];
        return \Response::json($dr);
    }

}
