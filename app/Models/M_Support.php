<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Produk;
use App\Models\M_Penjualan;

class M_Support extends Model
{
    protected $table = "tbl_support";

    protected $fillable = [
        'kd_pengujian',
        'kd_produk',
        'support'
    ];

    public function dataProduk($kdProduk)
    {
        return M_Produk::where('kd_produk', $kdProduk) -> first();
    }

    public function totalTransaksi($kdProduk)
    {
        return M_Penjualan::where('kd_barang', $kdProduk) -> count();
    }

}
