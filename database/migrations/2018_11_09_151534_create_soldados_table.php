<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoldadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldados', function (Blueprint $table) {
            $table->increments('id_Soldado');
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
        Schema::dropIfExists('soldados');
    }
}
