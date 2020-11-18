<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Docente', function (Blueprint $table) {
            $table->increments('idCedula');
            $table->string('NombreD');
            $table->string('ApellidoPD');
            $table->string('ApellidoM');
            $table->String('CorreoD');
            $table->string('Telefono');
            $table->Integer('Cedula');
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
        Schema::dropIfExists('Docente');
    }
}
