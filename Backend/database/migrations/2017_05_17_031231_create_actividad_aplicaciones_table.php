<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadAplicacionesTable extends Migration
{

    public function up()
    {
        Schema::create('actividad_aplicaciones', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('actividad_id');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('empresa');
            $table->string('correo');
            $table->string('telefono');
            $table->string('municipio');
            $table->string('departamento');
            $table->string('estado');
            $table->text('nota')->nullable();

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('actividad_aplicaciones');
    }
}
