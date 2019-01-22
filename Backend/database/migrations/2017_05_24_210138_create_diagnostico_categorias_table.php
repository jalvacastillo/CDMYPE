<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoCategoriasTable extends Migration
{


    public function up()
    {
        
        Schema::create('diagnostico_categorias', function (Blueprint $table) {
            $table->increments('id');

            $table->text('nombre');
            $table->integer('diagnostico_id');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnostico_categorias');
    }
}
