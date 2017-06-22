<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtContratosTable extends Migration
{

    public function up()
    {
        Schema::create('at_contratos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('termino_id');
            $table->integer('consultor_id');
            $table->integer('duracion')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->double('pago')->nullable();
            $table->double('aporte')->nullable();
            $table->string('lugar_firma')->nullable();


            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_contratos');
    }
}
