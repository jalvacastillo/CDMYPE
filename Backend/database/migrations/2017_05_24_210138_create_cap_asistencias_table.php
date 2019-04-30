<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapAsistenciasTable extends Migration
{

    public function up()
    {
        Schema::create('cap_asistencias', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('cap_id')->nullable();
            $table->integer('empresario_id')->nullable();
            $table->boolean('asistencia')->nullable();
                        
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cap_asistencias');
    }
}
