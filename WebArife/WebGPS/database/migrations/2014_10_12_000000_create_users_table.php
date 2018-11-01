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
          $table->increments('id')->nullable()->unsigned()->unique();
          $table->string('name');
          $table->string('username')->unique();
          $table->string('email')->unique();
          $table->string('password');
          $table->rememberToken();
          $table->timestamps();
          $table->foreign('IdEmpresa')
            ->references('IdEmpresa')->on('empresa')
            ->onDelete('cascade');
          $table->foreign('IdActor')
          ->references('IdActor')->on('actor')
            ->onDelete('cascade');

        });

        Schema::create('usuarioempresa', function (Blueprint $table) {
            $table->increments('IdUsuarioEmpresa')->unique()->nullable();
            $table->unsignedinteger('id');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users');
        });

        Schema::create('opciones', function (Blueprint $table) {
            $table->increments('IdOpciones')->unique()->nullable();
            $table->integer('IdParent');
            $table->string('Nombre');
            $table->string('Ruta');
            $table->string('Icono');
            $table->timestamps();
        });

        Schema::create('usuarioopciones', function (Blueprint $table) {
            $table->increments('IdUsuarioOpciones')->unique()->nullable();
            $table->unsignedinteger('id');
            $table->unsignedinteger('IdOpciones')->unique()->nullable();
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('IdOpciones')->references('IdOpciones')->on('opciones')->onDelete('cascade');
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
        Schema::dropIfExists('usuarioempresa');
        Schema::dropIfExists('usuarioopciones');
        Schema::dropIfExists('opciones');
    }
}
