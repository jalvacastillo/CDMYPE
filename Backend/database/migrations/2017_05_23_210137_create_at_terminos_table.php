<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtTerminosTable extends Migration
{

    public function up()
    {
        Schema::create('at_terminos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('cliente_id');
            $table->string('tema');
            $table->text('obj_general');
            $table->text('obj_especifico');
            $table->text('productos');
            $table->integer('tiempo_ejecucion');
            $table->integer('trabajo_local');
            $table->date('fecha');
            $table->double('financiamiento');
            $table->double('aporte');
            $table->enum('estado', ['Creada', 'Enviada', 'Contratada', 'Finalizada']);
            $table->integer('especialidad_id');
            $table->integer('asesor_id');
            $table->string('informe')->nullable();
            $table->date('fecha_aprobacion')->nullable();

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_terminos');
    }
}
