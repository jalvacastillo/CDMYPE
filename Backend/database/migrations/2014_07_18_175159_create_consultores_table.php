<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultoresTable extends Migration {

	public function up()
	{
		 Schema::create('consultores', function(Blueprint $table){
            $table->increments('id');

            $table->string('nombre', 100);
            $table->string('dui',20)->unique();
            $table->string('nit',30)->unique();
            $table->enum('sexo', ['Mujer','Hombre'])->nullable();
            $table->string('correo',75)->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('municipio', 20)->nullable();
            $table->string('departamento', 20)->nullable();
            $table->string('telefono',30)->nullable();
            $table->string('celular',30)->nullable();
            $table->string('empresa',50)->nullable();
            $table->enum('tipo', ['Externo', 'Interno'])->default('Externo');

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
	}

	
	public function down()
	{
        Schema::dropIfExists('consultores');
	}

}
