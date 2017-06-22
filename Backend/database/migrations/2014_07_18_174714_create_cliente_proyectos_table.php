<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteProyectosTable extends Migration {

    public function up()
    {
        Schema::create('cliente_proyectos',function($table){
            $table->increments('id');
            
            $table->integer('asesor_id');
            $table->integer('cliente_id');
            $table->string('nombre');
            $table->date('fecha_fin');
            $table->text('impacto');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cliente_proyectos');
    }

}
