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
            $table->foreignId('id')->references('id')->on('pengunjung');
            $table->foreignId('id')->references('id')->on('kategori_tiket');
            $table->foreignId('jadwal_id')->references('jadwal_id')->on('transaksi');
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
            $table->enum('status', ['pending', 'lunas']);
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
