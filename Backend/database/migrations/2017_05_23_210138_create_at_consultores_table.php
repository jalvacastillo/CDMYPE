<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtConsultoresTable extends Migration
{

    public function up()
    {
        Schema::create('at_consultores', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('termino_id')->nullable();
            $table->integer('consultor_id')->nullable();
            $table->date('fecha_oferta')->nullable();
            $table->date('fecha_seleccion')->nullable();
            $table->enum('estado', ['Enviado', 'Seleccionado'])->default('Enviado');
            $table->string('doc_oferta')->nullable();
            $table->double('evaluacion')->nullable();


            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_consultores');
    }
}
