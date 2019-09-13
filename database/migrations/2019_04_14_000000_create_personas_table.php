<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('codigo_persona');
            $table->string('nombre_persona', 45);
            $table->string('cedula');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->integer('codigo_pais')->unsigned();
            $table->integer('codigo_departamento')->unsigned();
            $table->integer('codigo_ciudad')->unsigned();
            $table->string('email', 45)->unique();
            $table->string('nickname', 45)->unique();
            $table->integer('codigo_area')->unsigned();
            $table->string('password');
            $table->integer('rol');
            $table->string('comentarios', 255);
            $table->rememberToken();
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
        Schema::dropIfExists('personas');
    }
}
