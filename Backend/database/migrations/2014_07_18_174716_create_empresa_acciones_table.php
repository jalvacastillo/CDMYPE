<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaAccionesTable extends Migration {

    public function up()
    {
        Schema::create('empresa_acciones',function($table){
            $table->increments('id');
            
            $table->integer('proyecto_id');
            $table->text('actividad');
            $table->enum('responsable', ['Asesor', 'Empresa', 'Consultor', 'Estudiante']);
            $table->date('inicio');
            $table->date('fin');
            $table->enum('estado', ['Creado', 'Iniciado', 'Finalizado'])->default('Creado');
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('empresa_acciones');
    }

}
