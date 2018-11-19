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
            $table->string('nombres');
            $table->string('sexo');
            $table->string('ci');
            $table->string('telefono');
            $table->string('ojos');
            $table->string('sangre');
            $table->string('estatura');
            $table->string('peso');
            $table->string('arma');
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
