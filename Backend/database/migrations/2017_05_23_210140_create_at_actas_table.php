<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtActasTable extends Migration
{

    public function up()
    {
        Schema::create('at_actas', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('at_id');
            $table->date('fecha');
            $table->string('tipo');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_actas');
    }
}
