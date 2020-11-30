<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaSemestreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MateriaSemestre', function (Blueprint $table) {
            $table->increments('idMateriaSemestre');

            $table->unsignedInteger('idSemestre');
            $table->unsignedInteger('idMateria');
            $table->foreign('idSemestre')->references('idSemestre')->on('Semestre')->onDelete('cascade');
            $table->foreign('idMateria')->references('idMateria')->on('Materia')->onDelete('cascade');;
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
        Schema::dropIfExists('MateriaSemestre');
    }
}
