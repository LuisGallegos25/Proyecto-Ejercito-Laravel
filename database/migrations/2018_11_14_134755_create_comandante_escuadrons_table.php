<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandanteEscuadronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandante_escuadrons', function (Blueprint $table) {
            $table->increments('id_ComandanteE');
            $table->foreign('instructor')->references('id_Instructor')->on('instructors');
            $table->foreign('escuadron')->references('id_Escuadron')->on('escuadrons');
            
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
        Schema::dropIfExists('comandante_escuadrons');
    }
}
