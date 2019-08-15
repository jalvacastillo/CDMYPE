<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaProductosTable extends Migration {

	public function up()
	{
		Schema::create('empresa_productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('empresa_id');
			$table->string('img');
			$table->string('nombre');
			$table->decimal('precio', 10, 2)->nullable();
			$table->text('descripcion')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('empresa_productos');
	}

}
