<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioAccionIndicadoresTable extends Migration
{

    public function up()
    {
        Schema::create('servicio_accion_indicadores', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('accion_id');
            $table->string('indicador');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicio_accion_indicadores');
    }
}
