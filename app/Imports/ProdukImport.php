<?php

namespace App\Imports;
use Illuminate\Support\Str;
use App\Models\M_Produk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProdukImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new M_Produk([
            'kd_produk' => Str::uuid(),
            'nama_produk' => $row['nama_produk'],
            'harga' => $row['harga'],
            'kd_kategori' => $row['kategori'],
            'active' => '1'
        ]);
    }
}
