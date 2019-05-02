<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalidasTable extends Migration {

	public function up()
	{
		Schema::create('salidas', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->date('fecha');
			$table->time('hora_salida');
			$table->time('hora_regreso');
			$table->string('lugar');
			$table->text('justificacion');
			$table->text('objetivo');
			$table->string('estado')->default('Creado');
			$table->text('observacion')->nullable();
			$table->integer('encargado_id');
			
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('salidas');
	}

}
