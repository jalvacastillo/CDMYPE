<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapTerminosTable extends Migration
{

    public function up()
    {
        Schema::create('caps', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('encabezado');
            $table->string('tema');
            $table->text('categoria');
            $table->text('descripcion');
            $table->text('obj_general');
            $table->text('obj_especifico');
            $table->text('productos');
            $table->string('lugar');
            $table->datetime('fecha_ini');
            $table->datetime('fecha_fin');
            $table->date('fecha_limite');
            $table->string('nota')->nullable();
            $table->string('estado'); //, ['Creada', 'Enviada', 'Contratada', 'Finalizada'
            $table->integer('usuario_id');
            $table->integer('especialidad_id');
            $table->string('informe')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('caps');
    }
}
