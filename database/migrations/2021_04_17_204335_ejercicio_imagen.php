<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EjercicioImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicio_imagen', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ejercicio_id');
            $table->unsignedBigInteger('imagen_id');

            $table->foreign('ejercicio_id')->references('id')->on('ejercicio')->onDelete('cascade');
            $table->foreign('imagen_id')->references('id')->on('imagen')->onDelete('cascade');

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
        Schema::dropIfExists('ejercicio_imagen');
    }
}
