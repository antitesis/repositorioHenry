<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('abreviatura')->unique();
            $table->text('descripcion')->nullable();
            $table->text('descripcionAlt1')->nullable();
            $table->text('descripcionAlt2')->nullable();
            $table->text('imagen1')->nullable();
            $table->text('imagen2')->nullable();
            $table->text('icono1')->nullable();
            $table->text('icono2')->nullable();
            $table->enum('tipo',['publico','privado','en desarrollo','otro'])->default('privado');
            $table->integer('prioridad')->nullable();
            $table->text('link')->nullable();
            $table->enum('estado',['activo','inactivo'])->default('activo');
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
        Schema::dropIfExists('servicios');
    }
}
