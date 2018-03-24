<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

	public function up()
	{
        Schema::create('empresas', function($table) {
            $table->increments('id');
            
            $table->string('nombre', 100);
            $table->string('nit', 20)->nullable();
            $table->string('iva', 25)->nullable();
            $table->enum('constitucion', ['Persona Natural','Persona Juridica', 'Grupo de Empresas', 'Grupo de Emprendedores','UDP','Informal'])->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('municipio', 30)->nullable();
            $table->string('departamento', 30)->nullable();
            $table->enum('ubicacion', ['Rural', 'Urbana'])->nullable();
            $table->date('fundacion')->nullable();
            $table->boolean('contabilidad')->default(false);
            $table->enum('sector',['Artesanias','Agroindustria Alimentaria','Calzado','Comercio','Construcción','Química Farmaceutica','TIC','Textiles y Confección','Turismo','Otros'])->nullable();
            $table->enum('tamano',['Subsistencia', 'Emprendedor', 'Micro','Pequeña', 'Grande'])->nullable();
            
            $table->text('descripcion')->nullable();
            $table->string('actividad', 3000)->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
	}

	public function down()
	{
        Schema::dropIfExists('empresas');
	}

}
