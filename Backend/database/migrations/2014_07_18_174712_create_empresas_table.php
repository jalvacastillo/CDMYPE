<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

	public function up()
	{
        Schema::create('empresas',function($table){
            $table->increments('id');

            $table->string('nombre', 100);
            $table->string('estado');
            $table->string('procedencia')->nullable();
            $table->string('nit', 20);
            $table->string('nrc');
            $table->string('iva', 25)->nullable();
            $table->string('constitucion');
            $table->string('direccion', 250);
            $table->string('municipio', 30);
            $table->string('departamento', 30);
            $table->string('ubicacion')->nullable();
            $table->date('fundacion')->nullable();
            $table->boolean('contabilidad')->default(false);
            $table->string('sector');
            $table->string('tamano');
            $table->string('telefono', 20);
            $table->text('descripcion')->nullable();
            $table->string('actividad', 3000)->nullable();
            $table->string('dui');
            $table->string('img')->default('default.png');
            $table->string('correo')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_web')->nullable();
            $table->boolean('catalogo')->default(0);
            
            $table->softDeletes();
            $table->timestamps();
        });
	}


	public function down()
	{
        Schema::dropIfExists('empresas');
	}

}
