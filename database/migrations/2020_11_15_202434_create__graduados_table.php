<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Graduados', function (Blueprint $table) {
            $table->increments('idGraduado');
            $table->String('promedioGeneral');
            $table->unsignedInteger('idGrupo');
            $table->unsignedInteger('idMatricula');
            $table->foreign('idGrupo')->references('idGrupo')->on('Grupo');
            $table->foreign('idMatricula')->references('idMatricula')->on('Alumno');


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
        Schema::dropIfExists('Graduados');
    }
}
