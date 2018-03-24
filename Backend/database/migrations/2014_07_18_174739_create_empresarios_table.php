<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresariosTable extends Migration {

	public function up()
	{
        Schema::create('empresarios',function($table){
            $table->increments('id');

            $table->string('nombre', 50);
            $table->string('dui',20)->unique()->nullable();
            $table->string('nit',30)->unique()->nullable();
            $table->enum('sexo', array('Mujer','Hombre'))->nullable();
            $table->integer('edad')->nullable();
            $table->string('telefono', 30)->nullable();
            $table->string('celular',30)->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('municipio', 30)->nullable();
            $table->string('departamento', 30)->nullable();
            $table->string('correo', 75)->nullable();
            
            $table->softDeletes();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::dropIfExists('empresarios');
	}

}
