<?php

namespace App\Console\Commands;

use App\Models\M_Penjualan;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

use App\Models\M_Produk;

class CS_Create_Fake_Penjualan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createFakePenjualan {tf}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Buat perintah untuk buat data penjualan dummy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        M_Penjualan::truncate();
        $argument = $this -> argument('tf');
        $bahanArgunmen = explode("=", $argument);
        $totalProduk = M_Produk::count();
        for($x = 0; $x < $bahanArgunmen[1]; $x++){
            $kdFaktur = Str::uuid();
            $jarak = rand(0, 15);
            $dataProdukTemp = array();
            $dataProduk = M_Produk::all();
            foreach($dataProduk as $produk){
                array_push($dataProdukTemp, $produk -> kd_produk);
            }
            shuffle($dataProdukTemp);
            for($k = 0; $k <= $jarak; $k++){
                $penjualan = new M_Penjualan();
                $penjualan -> kd_penjualan = Str::uuid();
                $penjualan -> no_faktur = $kdFaktur;
                $penjualan -> kd_barang = $dataProdukTemp[$k];
                $penjualan -> qt = rand(1, 10);
                $penjualan -> save();
            }
            echo "No faktur : ".$kdFaktur." \n";
        }

        echo "Data dummy sukses di buat, total ".$bahanArgunmen[1]." data \n";
    }
}
