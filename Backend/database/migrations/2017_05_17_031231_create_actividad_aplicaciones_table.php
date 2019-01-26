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
            $table->string('estado');
            $table->integer('usuario_id');
            $table->text('nota')->nullable();

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('actividad_aplicaciones');
    }
}
