<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ingreso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso', function(Blueprint $table){
            $table->id();
            $table->float('monto',4,2);
            $table->date('fechainicial');
            $table->date('fechafinal');
            $table->unsignedBigInteger('usu_id');
            $table->foreign('usu_id')->references('id')->on('usuario');
            $table->timestamps();

            

            // table->idUsuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingreso');
    }
}
