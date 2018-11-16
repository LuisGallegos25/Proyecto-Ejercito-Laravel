<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuadronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuadrons', function (Blueprint $table) {
            $table->increments('id_Escuadron');
            $table->string('nombre');
            $table->foreign('escuadron')->references('id_Regimiento')->on('regimientos');
            
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
        Schema::dropIfExists('escuadrons');
    }
}
