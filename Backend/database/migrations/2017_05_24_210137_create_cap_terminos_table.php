<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapTerminosTable extends Migration
{

    public function up()
    {
        Schema::create('cap_terminos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('encabezado')->nullable();
            $table->string('tema')->nullable();
            $table->text('categoria')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('obj_general')->nullable();
            $table->text('obj_especifico')->nullable();
            $table->text('productos')->nullable();
            $table->string('lugar')->nullable();
            $table->date('fecha')->nullable();
            $table->date('fecha_limite')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fin')->nullable();
            $table->string('nota')->nullable();
            $table->enum('estado', ['Creada', 'Enviada', 'Contratada', 'Finalizada']);
            $table->integer('asesor_id');
            $table->integer('especialidad_id');
            $table->string('informe')->nullable();

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cap_terminos');
    }
}
