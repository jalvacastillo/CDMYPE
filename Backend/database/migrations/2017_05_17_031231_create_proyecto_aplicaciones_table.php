<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoAplicacionesTable extends Migration
{

    public function up()
    {
        Schema::create('proyecto_aplicaciones', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('proyecto_id');
            $table->string('estado');
            $table->integer('usuario_id');
            $table->text('nota')->nullable();

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('proyecto_aplicaciones');
    }
}
