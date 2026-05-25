<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTiket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_tiket', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->string('nama kategori');
=======
            $table->bigIncrements('kategori_id');
            $table->string('nama_kategori');
>>>>>>> 95508045a0be9396762dddc6077c1c836114a71d
            $table->integer('harga');
            $table->text('deskripsi');
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
        Schema::dropIfExists('kategori_tiket');
    }
}
