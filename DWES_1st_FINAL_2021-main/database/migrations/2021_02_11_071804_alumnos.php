<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nif')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('email');
            $table->string('genero');
            $table->timestamp('created_at');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
