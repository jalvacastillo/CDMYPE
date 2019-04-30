<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtsTable extends Migration
{

    public function up()
    {
        Schema::create('ats', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('tema');
            $table->text('obj_general');
            $table->text('obj_especifico');
            $table->text('productos');
            $table->integer('tiempo_ejecucion');
            $table->integer('trabajo_local');
            $table->date('fecha');
            $table->double('financiamiento');
            $table->double('aporte');
            $table->string('estado');
            $table->integer('especialidad_id');
            $table->string('informe')->nullable();
            $table->date('fecha_aprobacion')->nullable();
            $table->integer('empresario_id')->nullable();
            $table->integer('asesor_id')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ats');
    }
}
