<?php

namespace App\Console\Commands;
use App\Imports\PenjualanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Console\Command;
use App\Models\M_Penjualan;

class CS_Penjualan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importDataPenjualan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Excel::import(new PenjualanImport, public_path('/file_import/DATA_PENJUALAN.xlsx'));
    }
}
