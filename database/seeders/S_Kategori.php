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
        $this -> createKategori("SAYURAN");
        $this -> createKategori("MINYAK");
        $this -> createKategori("TELUR"); 
        $this -> createKategori("TEPUNG");
        $this -> createKategori("SIRUP");
        $this -> createKategori("MAKANANRINGAN");
        $this -> createKategori("BUMBU");
        $this -> createKategori("DAGING");
        $this -> createKategori("DETERJEN");
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
