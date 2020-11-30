<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reportes', function (Blueprint $table) {
            $table->increments('idReportes');
            $table->string('NombreR');
            $table->string('Castigo');
            $table->unsignedInteger('idMatricula');
            $table->foreign('idMatricula')->references('idMatricula')->on('Alumno')->onDelete('cascade');

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
        Schema::dropIfExists('Reportes');
    }
}
