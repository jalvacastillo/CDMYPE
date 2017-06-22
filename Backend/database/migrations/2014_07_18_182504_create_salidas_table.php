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
			$table->string('lugar', 25);
			$table->text('justificacion');
			$table->text('objetivo');
			$table->integer('encargado_id');
			$table->enum('estado', ['Aprobado','Rechazado','Cancelado'])->default('Aprobado');
			$table->text('observacion')->nullable();
			
			$table->integer('cdmype_id')->default(1);

			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('salidas');
	}

}
