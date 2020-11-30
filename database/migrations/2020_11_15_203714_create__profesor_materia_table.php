<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProfesorMateria', function (Blueprint $table) {
            $table->increments('idProfesorMateria');
            $table->unsignedInteger('idCedula');
            $table->unsignedInteger('idMateria');
            $table->foreign('idCedula')->references('idCedula')->on('Docente')->onDelete('cascade');
            $table->foreign('idMateria')->references('idMateria')->on('Materia')->onDelete('cascade');



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
        Schema::dropIfExists('ProfesorMateria');
    }
}
