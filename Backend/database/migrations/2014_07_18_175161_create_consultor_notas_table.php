<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultorNotasTable extends Migration
{

    public function up()
    {
        Schema::create('consultor_notas', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('consultor_id')->nullable();
            $table->string('descripcion')->nullable();
            $table->double('evaluacion')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultor_notas');
    }
}
