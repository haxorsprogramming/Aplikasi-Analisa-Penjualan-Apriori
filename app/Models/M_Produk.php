<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class M_Produk extends Model
{
    protected $table = "tbl_produk";
    protected $fillable = [
        'kd_produk',
        'nama_produk',
        'harga',
        'kd_kategori',
        'active'
    ];
}
