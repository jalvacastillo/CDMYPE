<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClienteProductosTable extends Migration {

	public function up()
	{
		Schema::create('cliente_productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cliente_id');
			$table->string('img')->default('default.jpg');
			$table->string('nombre');
			$table->decimal('precio', 10, 2)->nullable();
			$table->text('descripcion')->nullable();

			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('cliente_productos');
	}

}
