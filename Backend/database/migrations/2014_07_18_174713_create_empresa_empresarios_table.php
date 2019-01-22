<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaEmpresariosTable extends Migration {

    public function up()
    {
        Schema::create('empresa_empresarios',function($table){
            $table->increments('id');

            $table->integer('empresa_id');
            $table->integer('empresario_id');
            $table->string('tipo');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresa_empresarios');
    }

}
