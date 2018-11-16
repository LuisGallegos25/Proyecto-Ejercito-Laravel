<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimientos', function (Blueprint $table) {
            $table->increments('id_Regimiento');
            $table->string('nombre');
            $table->string('ubicacion');
            $table->unsignedInteger('comandante');
            $table->unsignedInteger('arma');
            $table->foreign('arma')->references('id_Arma')->on('armas');
            $table->foreign('comandante')->references('id_ComandanteR')->on('comandante_regimientos');
            
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
        Schema::dropIfExists('regimientos');
    }
}
