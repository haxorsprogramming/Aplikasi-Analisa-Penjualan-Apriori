<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Kategori extends Model
{
    protected $table = "tbl_kategori";
    protected $fillable = [
        'kd_kategori',
        'nama_kategori',
        'active'
    ];
    public $timestamps = false;
}
