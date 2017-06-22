<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultorEspecialidadesTable extends Migration
{

    public function up()
    {
        Schema::create('consultor_especialidades', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('consultor_id');
            $table->integer('especialidad_id');
            
            $table->integer('cdmype_id')->default(1);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultor_especialidades');
    }
}
