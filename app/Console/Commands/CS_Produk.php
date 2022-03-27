<?php

namespace App\Console\Commands;
use App\Imports\ProdukImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Console\Command;
use App\Models\M_Produk;

class CS_Produk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importDataProduk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perintah untuk melakukan import produk';

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
        M_Produk::truncate();  
        Excel::import(new ProdukImport, public_path('/file_import/DATA_PRODUK.xlsx'));
    }
}
