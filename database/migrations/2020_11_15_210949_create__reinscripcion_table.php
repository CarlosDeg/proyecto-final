<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReinscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reinscripcion', function (Blueprint $table) {
            $table->increments('idReinscripcion');
            $table->string('estatus');
            $table->unsignedInteger('idPagos');
            $table->unsignedInteger('idAdminitrativo');
            $table->foreign('idPagos')->references('idPagos')->on('Pago')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('idAdminitrativo')->references('idAdminitrativo')->on('administrativos')->onDelete('cascade');

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
        Schema::dropIfExists('Reinscripcion');
    }
}
