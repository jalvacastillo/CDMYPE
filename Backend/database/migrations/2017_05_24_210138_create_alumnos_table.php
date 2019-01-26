<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{

    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nombre');
            $table->string('correo')->nullable();
            $table->string('carrera')->nullable();
            $table->string('sexo')->nullable();
            $table->string('direccion')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('municipio')->nullable();
            $table->string('telefono')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_linkedin')->nullable();

            $table->boolean('web')->default(1);

            $table->integer('usuario_id')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
