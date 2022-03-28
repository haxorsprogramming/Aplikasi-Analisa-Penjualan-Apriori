<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblNilaiKombinasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilai_kombinasi', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_pengujian', 100);
            $table -> char('kd_kombinasi', 200);
            $table -> char('kd_barang_a', 200);
            $table -> char('kd_barang_b', 200);
            $table -> integer('jumlah_transaksi');
            $table -> float('support');
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
        Schema::dropIfExists('tbl_nilai_kombinasi');
    }
}
