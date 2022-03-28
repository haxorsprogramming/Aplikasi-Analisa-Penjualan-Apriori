<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Support extends Model
{
    protected $table = "tbl_support";

    protected $fillable = [
        'kd_pengujian',
        'kd_produk',
        'support'
    ];
}
