<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{


    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slug')->unique();
            $table->text('descripcion');
            $table->string('imagen')->nullable();
            $table->enum('tipo', ['Tips','Asesorías','Casos de Éxito','Eventos', 'Otro']);
            $table->integer('asesor_id');

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
