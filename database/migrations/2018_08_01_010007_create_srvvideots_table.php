<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSrvvideotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srvvideots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('abreviatura')->unique();
            $table->text('descripcion')->nullable();
            $table->text('descripcionAlt1')->nullable();
            $table->text('imagen')->nullable();
            $table->text('icono')->nullable();
            $table->text('video')->nullable();
            $table->integer('idServicio')->unsigned();
            $table->timestamps();

            $table->foreign('idServicio')->references('id')->on('servicios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('srvvideots');
    }
}
