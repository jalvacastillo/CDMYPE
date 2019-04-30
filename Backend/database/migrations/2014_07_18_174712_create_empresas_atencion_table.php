<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasAtencionTable extends Migration {

    public function up()
    {
        Schema::create('atenciones',function($table){
            $table->increments('id');

            $table->date('fecha');
            $table->integer('usuario_id');
            $table->integer('empresa_id');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('atenciones');
    }

}
