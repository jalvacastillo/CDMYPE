<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioAccionesTable extends Migration
{

    public function up()
    {
        Schema::create('servicio_acciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('servicio_id');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicio_acciones');
    }
}
