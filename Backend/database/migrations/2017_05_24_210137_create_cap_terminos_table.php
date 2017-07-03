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

            $table->string('encabezado');
            $table->string('tema');
            $table->text('categoria');
            $table->text('descripcion');
            $table->text('obj_general');
            $table->text('obj_especifico');
            $table->text('productos');
            $table->string('lugar');
            $table->date('fecha');
            $table->date('fecha_limite');
            $table->time('hora_inicio');
            $table->time('hora_fin');
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
