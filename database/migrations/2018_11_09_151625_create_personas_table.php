<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id_Persona');
            $table->string('nombres');
            $table->string('sexo');
            $table->string('ci');
            $table->string('telefono');
            $table->string('ojos');
            $table->string('sangre');
            $table->string('estatura');
            $table->string('peso');

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
        Schema::dropIfExists('personas');
    }
}
