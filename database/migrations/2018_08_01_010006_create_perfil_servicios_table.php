<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_servicios', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('idServicio')->unsigned();
            $table->integer('idPerfil')->unsigned();
            $table->timestamps();

            $table->foreign('idServicio')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('idPerfil')->references('id')->on('perfils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_servicios');
    }
}
