<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtAmpliacionesTable extends Migration
{

    public function up()
    {
        Schema::create('at_ampliaciones', function (Blueprint $table) {
            
            $table->increments('id');

            $table->date('fecha');
            $table->integer('tiempo_ampliacion');
            $table->string('periodo');
            $table->text('razonamiento');
            $table->integer('at_id');
            $table->string('solicitante');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_ampliaciones');
    }
}
