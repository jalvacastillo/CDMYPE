<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadesTable extends Migration
{

    public function up()
    {
        Schema::create('especialidades', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 50);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('especialidades');
    }
}
