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
            $table->enum('procedencia', ['CONAMYPE', 'CDMYPE', 'Cliente', 'Proyecto'])->default('CDMYPE');
            $table->enum('tipo', ['Propietario','Representante'])->default('Propietario');
            $table->string('logo')->default('default.png');
            $table->string('url_facebook')->nullable();
            $table->string('url_web')->nullable();

            $table->boolean('catalogo')->default(1);
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
