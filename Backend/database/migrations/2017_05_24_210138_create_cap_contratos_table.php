<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapContratosTable extends Migration
{

    public function up()
    {
        Schema::create('cap_contratos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('termino_id');
            $table->string('lugar')->nullable();
            $table->enum('firma', ['Director', 'Directora'])->nullable();
            $table->double('pago')->nullable();
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cap_contratos');
    }
}
