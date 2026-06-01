<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('transaksi_id');
            $table->foreignId('pengunjung_id')->references('pengunjung_id')->on('pengunjung');
            $table->foreignId('kategori_id')->references('kategori_id')->on('kategori_tiket');
            $table->foreignId('jadwal_id')->references('jadwal_id')->on('jadwal');
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
