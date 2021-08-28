<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EjerUsu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejer_usu', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ejercicio_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('ejercicio_id')->references('id')->on('ejercicio')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

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
        Schema::dropIfExists('ejer_usu');
    }
}
