<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaProyectosTable extends Migration {

    public function up()
    {
        Schema::create('empresa_proyectos',function($table){
            $table->increments('id');
            
            $table->integer('asesor_id');
            $table->integer('empresa_id');
            $table->string('nombre');
            $table->date('fecha_fin');
            $table->text('impacto');
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('empresa_proyectos');
    }

}
