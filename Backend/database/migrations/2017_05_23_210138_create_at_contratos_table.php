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

            $table->integer('at_id');
            $table->integer('duracion')->nullable();
            $table->string('tipo_duracion')->default('Días');
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->decimal('pago')->nullable();
            $table->decimal('aporte')->nullable();
            $table->string('lugar_firma')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_contratos');
    }
}
