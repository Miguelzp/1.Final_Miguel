<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->string('web');
            $table->timestamp('created_at');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
