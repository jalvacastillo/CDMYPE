<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinacionTable extends Migration
{

    public function up()
    {
        Schema::create('coordinacion', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('tema');
            $table->string('descripcion');
            $table->string('institucion');
            $table->string('tipo');
            $table->date('fecha');
            $table->string('img')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coordinacion');
    }
}