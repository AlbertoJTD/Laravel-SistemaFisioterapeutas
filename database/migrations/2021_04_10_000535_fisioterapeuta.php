<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fisioterapeuta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisioterapeuta', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('ap1');
            $table->string('ap2');
            $table->string('cedula');
            $table->integer('edad');
            $table->String('telefono');
            $table->String('foto')->nulable();
            $table->string('nickname');
            $table->string('password');
            $table->string('correo');
            $table->timestamps();
            // table->idEspecialidad
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fisioterapeuta');
    }
}
