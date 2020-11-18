<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrativos', function (Blueprint $table) {
            $table->increments('idAdminitrativo');
            $table->string('NombreAd');
            $table->string('ApellidoPAd');
            $table->string('ApellidoMAd');
            $table->Integer('TelefonoAd');
            $table->string('Puesto');
            $table->string('CorreoAd');
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
        Schema::dropIfExists('administrativos');
    }
}
