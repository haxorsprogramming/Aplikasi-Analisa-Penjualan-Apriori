<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([S_User::class, S_Kategori::class]);
        Artisan::call('importDataProduk');
        // Artisan::call('importDataPenjualan');
    }

}
