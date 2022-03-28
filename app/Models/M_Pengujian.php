<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Pengujian extends Model
{
    protected $table = "tbl_pengujian";

    protected $fillable = [
        'kd_pengujian',
        'nama_penguji',
        'min_supp',
        'min_confidence'
    ];
}
