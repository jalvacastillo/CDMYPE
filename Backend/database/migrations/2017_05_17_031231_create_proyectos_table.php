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
            $table->string('slug');
            $table->text('descripcion');
            $table->enum('tipo', ['Pasantía', 'Hora Social', 'Investigación', 'Proyecto', 'Otro']);
            $table->enum('categoria', ['TIC', 'EFE', 'Financiero', 'Empresarial', 'Otro']);
            $table->enum('estado', ['Inactivo', 'Activo', 'Ejecución', 'Completado']);
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
