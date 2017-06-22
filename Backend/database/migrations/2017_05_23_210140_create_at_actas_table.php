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

            $table->integer('termino_id');
            $table->date('fecha');
            $table->enum('tipo', ['Conformidad', 'Rechazo'])->default('Conformidad');


            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('at_actas');
    }
}
