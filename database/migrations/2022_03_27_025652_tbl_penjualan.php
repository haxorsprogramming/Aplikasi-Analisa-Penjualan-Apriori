<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penjualan', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_penjualan', 100);
            $table -> char('no_faktur', 200);
            $table -> char('kd_barang', 200);
            $table -> char('qt', 10);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_penjualan');
    }
}
