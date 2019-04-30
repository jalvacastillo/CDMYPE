<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapConsultoresTable extends Migration
{

    public function up()
    {
        Schema::create('cap_consultores', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('cap_id')->nullable();
            $table->integer('consultor_id')->nullable();
            $table->datetime('fecha_oferta')->nullable();
            $table->datetime('fecha_seleccion')->nullable();
            $table->string('doc_oferta')->nullable();
            $table->boolean('seleccionado')->default(false);
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cap_consultores');
    }
}
