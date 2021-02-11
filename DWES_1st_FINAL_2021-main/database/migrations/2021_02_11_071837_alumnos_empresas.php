<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumnosEmpresas extends Migration
{
    //Creamos una tabla pivot para la relación entre las empresas y los alumnos.
    public function up()
    {
        Schema::create('alumno_empresa', function (Blueprint $table) {

            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('empresa_id');
            
            //Hacemos referencia en nuestra tabla pivot, a los id's de las tablas de alumnos y empresas.
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumno_empresa');
    }
}
