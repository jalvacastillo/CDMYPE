<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

	public function up()
	{
        Schema::create('empresas',function($table){
            $table->increments('id');

            $table->string('nombre', 100)->nullable();
            $table->string('estado');
            $table->string('procedencia');
            $table->string('nit', 20)->nullable();
            $table->string('iva', 25)->nullable();
            $table->string('constitucion')->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('municipio', 30)->nullable();
            $table->string('departamento', 30)->nullable();
            $table->string('ubicacion')->nullable();
            $table->date('fundacion')->nullable();
            $table->boolean('contabilidad')->default(false);
            $table->string('sector')->nullable();
            $table->string('tamano')->nullable();
            
            $table->text('descripcion')->nullable();
            $table->string('actividad', 3000)->nullable();

            $table->string('logo')->default('default.png');
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
