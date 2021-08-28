<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('ap1');
            $table->string('ap2');
            $table->integer('edad');
            $table->string('foto')->nullable();
            $table->string('nickname');
            $table->string('correo');
            $table->string('contra');
            $table->enum('genero',['Masculino','Femenino']);
        
            
            $table->unsignedBigInteger('tipousuario_id');
            $table->foreign('tipousuario_id')->references('id')->on('tipousuario');

            $table->unsignedBigInteger('fisio_id')->nullable();
            $table->foreign('fisio_id')->references('id')->on('fisioterapeuta');

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
        Schema::dropIfExists('usuario');
    }
}
