<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cts')->nullable();
            $table->enum('tipo',['user','admin'])->default('user');
            $table->enum('estado',['activo','inactivo'])->default('activo');
            $table->integer('idSede')->unsigned();
            $table->integer('idPerfil')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idSede')->references('id')->on('sedes')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
