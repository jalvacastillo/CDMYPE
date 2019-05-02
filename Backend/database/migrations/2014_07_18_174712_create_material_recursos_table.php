<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialRecursosTable extends Migration
{

    public function up()
    {
        Schema::create('material_recursos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('nombre');
            $table->string('archivo');
            $table->integer('material_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('material_recursos');
    }
}
