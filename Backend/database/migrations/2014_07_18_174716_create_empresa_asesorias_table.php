<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaAsesoriasTable extends Migration {

    public function up()
    {
        Schema::create('empresa_asesorias',function($table){
            $table->increments('id');
            
            $table->integer('accion_id');
            $table->text('descripcion');
            $table->date('fecha');
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('empresa_asesorias');
    }

}
