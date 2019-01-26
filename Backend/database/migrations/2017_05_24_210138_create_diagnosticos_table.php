<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticosTable extends Migration
{


    public function up()
    {
        
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('categoria');
            $table->text('descripcion');
            $table->boolean('activo')->default(0);
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnosticos');
    }
}
