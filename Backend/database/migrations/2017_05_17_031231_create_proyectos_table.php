<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nombre');
            $table->string('img')->default('default.jpg');
            $table->string('slug');
            $table->text('descripcion');
            $table->string('tipo');
            $table->string('categoria');
            $table->string('estado');
            $table->string('especialidad');
            $table->date('finalizacion');
            $table->string('duracion');
            $table->text('contenido');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
