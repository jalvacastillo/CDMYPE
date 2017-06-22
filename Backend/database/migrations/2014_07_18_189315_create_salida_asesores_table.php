<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalidaAsesoresTable extends Migration {

	public function up()
	{
		Schema::create('salida_asesores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('salida_id');
			$table->integer('asesor_id');

			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('salida_asesores');
	}

}
