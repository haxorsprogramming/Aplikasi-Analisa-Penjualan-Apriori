<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use App\Models\M_Produk;


class M_Penjualan extends Model
{
    
    protected $table = "tbl_penjualan";

    protected $fillable = [
        'kd_penjualan',
        'no_faktur',
        'kd_barang',
        'qt'
    ];

    public function dataProduk($kdProduk)
    {
        return M_Produk::where('kd_produk', $kdProduk) -> first();
    }

    public function hitungTransaksi($idTransaksi)
    {
        return $this::where('no_faktur', $idTransaksi) -> count();
    }

    public function hitungTotalQt($idTransaksi)
    {
        return $this::where('no_faktur', $idTransaksi) -> sum('qt');
    }

    public function getCreatedAt($idTransaksi)
    {
        return $this::where('no_faktur', $idTransaksi) -> pluck('created_at') -> first();
    }

    public function getTotalHarga($idTransaksi)
    {
        $qTransaksi = $this::where('no_faktur', $idTransaksi) -> get();
        $totalHarga = 0;
        foreach($qTransaksi as $transaksi){
            $dataProduk = M_Produk::where('kd_produk', $transaksi -> kd_barang) -> first();
            $totalHarga = $totalHarga + $dataProduk['harga'];
        }
        return $totalHarga;
    }

}
