<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FisioEspe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad_fisioterapeuta', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fisioterapeuta_id');
            $table->unsignedBigInteger('especialidad_id');

            $table->foreign('fisioterapeuta_id')->references('id')->on('fisioterapeuta')->onDelete('cascade');
            $table->foreign('especialidad_id')->references('id')->on('especialidad')->onDelete('cascade');

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
        Schema::dropIfExists('especialidad_fisioterapeuta');
    }
}
