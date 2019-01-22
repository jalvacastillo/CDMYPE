<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoAsesoresTable extends Migration
{

    public function up()
    {
        Schema::create('proyecto_asesores', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('asesor_id')->nullable();
            $table->integer('proyecto_id')->nullable();

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('proyecto_asesores');
    }
}
