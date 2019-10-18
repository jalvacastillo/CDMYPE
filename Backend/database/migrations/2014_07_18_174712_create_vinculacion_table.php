<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinculacionTable extends Migration
{

    public function up()
    {
        Schema::create('vinculacion', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('tema');
            $table->string('descripcion');
            $table->integer('empresa_id');
            $table->integer('asesor_id');
            $table->string('institucion');
            $table->string('tipo');
            $table->date('fecha');
            $table->decimal('monto');
            $table->string('img')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vinculacion');
    }
}