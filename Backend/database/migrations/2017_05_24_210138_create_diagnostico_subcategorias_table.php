<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoSubcategoriasTable extends Migration
{


    public function up()
    {
        
        Schema::create('diagnostico_subcategorias', function (Blueprint $table) {
            $table->increments('id');

            $table->text('nombre');
            $table->integer('categoria_id');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnostico_subcategorias');
    }
}
