<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubespecialidadesTable extends Migration
{

    public function up()
    {
        Schema::create('subespecialidades', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 50);
            $table->integer('especialidad_id');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subespecialidades');
    }
}
