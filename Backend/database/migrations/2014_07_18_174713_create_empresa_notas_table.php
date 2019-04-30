<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaNotasTable extends Migration
{

    public function up()
    {
        Schema::create('empresa_notas', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('empresa_id')->nullable();
            $table->string('descripcion')->nullable();
            $table->double('evaluacion')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresa_notas');
    }
}
