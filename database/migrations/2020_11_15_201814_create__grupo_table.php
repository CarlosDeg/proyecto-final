<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grupo', function (Blueprint $table) {
            $table->increments('idGrupo');
            $table->String('Grupo');
            $table->String('FechaI');
            $table->String('FechaF');
            $table->unsignedInteger('idCarrera');
            $table->unsignedInteger('idSemestre');
            $table->foreign('idCarrera')->references('idCarrera')->on('Carrera');
            $table->foreign('idSemestre')->references('idSemestre')->on('Semestre');

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
        Schema::dropIfExists('Grupo');
    }
}
