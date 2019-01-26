<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadAsesoresTable extends Migration
{

    public function up()
    {
        Schema::create('actividad_asesores', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('asesor_id')->nullable();
            $table->integer('actividad_id')->nullable();

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('actividad_asesores');
    }
}
