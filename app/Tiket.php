<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    public function up()
{
    Schema::create('tikets', function (Blueprint $table) {
       $table->bigIncrements('id');
       $table->string('nama pengunjung');
       $table->integer('harga');
       $table->text('deskripsi');
       $table->timestamps();
    });
}
}
