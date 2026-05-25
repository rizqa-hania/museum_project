<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
<<<<<<< HEAD
           $table->bigIncrements('id');
           $table->string('nama');
           $table->string('email');
           $table->password('password');
           $table->timestamps();
=======
            $table->bigIncrements('petugas_id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
>>>>>>> 95508045a0be9396762dddc6077c1c836114a71d
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
