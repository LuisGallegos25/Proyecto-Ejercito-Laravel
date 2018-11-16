<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuadrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuadras', function (Blueprint $table) {
            $table->increments('id_Escuadras');
            $table->unsignedInteger('soldado');
            $table->unsignedInteger('seccion');
            $table->foreign('soldado')->references('id_Soldado')->on('soldados');
            $table->string('nombre');
            $table->foreign('seccion')->references('id_Seccion')->on('seccions');
            
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
        Schema::dropIfExists('escuadras');
    }
}
