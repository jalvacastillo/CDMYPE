<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	public function up()
	{
        Schema::create('clientes',function($table){
            $table->increments('id');
            
            $table->integer('empresa_id');
            $table->integer('empresario_id')->nullable();
            $table->enum('procedencia', array('CONAMYPE', 'CDMYPE', 'Cliente', 'Proyecto'))->default('CDMYPE');
            $table->enum('tipo', array('Propietario','Representante'))->default('Propietario');
            $table->enum('estado', array('Aprobado','Inscrito'))->default('Inscrito');
            $table->string('imagen')->default('default.png');

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
	}


	public function down()
	{
        Schema::dropIfExists('clientes');
	}

}
