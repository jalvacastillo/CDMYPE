<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoEmpresasTable extends Migration
{

    public function up()
    {
        Schema::create('proyecto_empresas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('empresa_id')->nullable();
            $table->integer('proyecto_id')->nullable();

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('proyecto_empresas');
    }
}
