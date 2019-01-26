<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtEmpresasTable extends Migration
{

    public function up()
    {
        Schema::create('at_empresas', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('at_id')->nullable();
            $table->integer('empresa_id')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_empresas');
    }
}
