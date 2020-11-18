<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personal', function (Blueprint $table) {
            $table->increments('idPersonal');
            $table->string('NombreP');
            $table->string('ApellidoPP');
            $table->string('ApellidoMP');
            $table->String('CorreoP');
            $table->string('DireccionP');
            $table->Integer('EdadP');
            $table->Integer('TelefonoP');
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
        Schema::dropIfExists('Personal');
    }
}
