<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesTable extends Migration
{

    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('asesor_id');
            $table->integer('especialidad_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materiales');
    }
}
