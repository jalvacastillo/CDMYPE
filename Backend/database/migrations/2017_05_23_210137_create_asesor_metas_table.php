<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorMetasTable extends Migration
{

    public function up()
    {
        Schema::create('asesor_metas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('mes');
            $table->string('ano');
            $table->integer('meta');
            $table->integer('asesor_id');

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('asesor_metas');
    }
}
