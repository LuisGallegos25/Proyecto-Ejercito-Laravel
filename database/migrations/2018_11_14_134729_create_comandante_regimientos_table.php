<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandanteRegimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandante_regimientos', function (Blueprint $table) {
            $table->increments('id_ComandanteR');
            $table->unsignedInteger('persona');
            $table->unsignedInteger('arma');
            $table->foreign('persona')->references('id_Persona')->on('personas');
            $table->foreign('arma')->references('id_Arma')->on('armas');
            
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
        Schema::dropIfExists('comandante_regimientos');
    }
}
