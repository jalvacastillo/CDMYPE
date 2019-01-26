<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioAsesoresTable extends Migration
{

    public function up()
    {
        Schema::create('servicio_asesores', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('servicio_id');
            $table->integer('asesor_id');

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('servicio_asesores');
    }
}
