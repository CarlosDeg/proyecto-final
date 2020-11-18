<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumno', function (Blueprint $table) {
            $table->increments('idMatricula');
            $table->string('NombreA');
            $table->string('ApellidoPA');
            $table->string('ApellidoMA');
            $table->String('CorreoA');
            $table->string('DireccionA');
            $table->string('CorreoAd');
            $table->String('SexoA');
            $table->string('TipoSangre');
            $table->Integer('TelefonoT');
            $table->Integer('Estatus');
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
        Schema::dropIfExists('Alumno');
    }
}
