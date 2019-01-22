<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaIndicadoresTable extends Migration {

    public function up()
    {
        Schema::create('empresa_indicadores',function($table){
            $table->increments('id');
            
            $table->integer('asesor_id');
            $table->integer('empresa_id');
            $table->double('venta_nacional');
            $table->double('venta_expo')->nullable();
            $table->integer('empleo_hf')->nullable();
            $table->integer('empleo_ht')->nullable();
            $table->integer('empleo_mf')->nullable();
            $table->integer('empleo_mt')->nullable();
            $table->double('costos')->nullable();
            $table->double('financiamiento')->nullable();
            $table->double('capital')->nullable();
            $table->enum('mercados', ['Local', 'Regional', 'Nacional', 'Internacional'])->nullable();
            $table->text('productos')->nullable();
            $table->enum('tipo', ['Inicial', 'Final'])->nullable();
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('empresa_indicadores');
    }

}
