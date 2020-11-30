<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pago', function (Blueprint $table) {
            $table->increments('idPagos');
            $table->string('TipoP');
            $table->string('NombreB');
            $table->string('Precio');
            $table->string('Referencia');
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
        Schema::dropIfExists('Pago');
    }
}
