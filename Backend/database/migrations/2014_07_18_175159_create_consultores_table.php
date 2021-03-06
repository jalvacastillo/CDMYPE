<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultoresTable extends Migration {

	public function up()
	{
		 Schema::create('consultores', function(Blueprint $table){
            $table->increments('id');

            $table->string('nombre', 100);
            $table->string('dui',20)->nullable();
            $table->string('nit',30)->nullable();
            $table->string('sexo')->nullable();
            $table->string('correo',75)->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->string('departamento', 50)->nullable();
            $table->string('telefono',30)->nullable();
            $table->string('celular',30)->nullable();
            $table->string('empresa',100)->nullable();
            $table->string('tipo')->default('Externo');

            $table->integer('usuario_id')->nullable();
            
            $table->softDeletes();
            $table->timestamps();
        });
	}

	
	public function down()
	{
        Schema::dropIfExists('consultores');
	}

}
