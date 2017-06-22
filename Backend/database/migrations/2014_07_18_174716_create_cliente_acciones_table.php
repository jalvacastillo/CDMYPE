<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteAccionesTable extends Migration {

    public function up()
    {
        Schema::create('cliente_acciones',function($table){
            $table->increments('id');
            
            $table->integer('proyecto_id');
            $table->text('actividad');
            $table->enum('responsable', ['Asesor', 'Empresa', 'Consultor', 'Estudiante']);
            $table->date('inicio');
            $table->date('fin');
            $table->enum('estado', ['Creado', 'Iniciado', 'Finalizado'])->default('Creado');

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cliente_acciones');
    }

}
