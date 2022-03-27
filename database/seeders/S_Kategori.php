<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\M_Kategori;

class S_Kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = array("SAYURAN", "MINYAK", "TELUR", "TEPUNG", "SIRUP", "MAKANANRINGAN", "BUMBU", "DAGING", "DETERJEN", "PEWANGI", "SABUN", "OBAT", "MINUMAN");
        for($x = 0; $x < count($kategori); $x++){
            $this -> createKategori($kategori[$x]);
        }
    }

    function createKategori($namaKategori)
    {
        $kategori = new M_Kategori();
        $kategori -> kd_kategori = Str::uuid();
        $kategori -> nama_kategori = $namaKategori;
        $kategori -> active = "1";
        $kategori -> save();
    }

}
