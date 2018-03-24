<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{


    public function up()
    {
        // Pagina Web
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->integer('total')->default(0);

            $table->integer('cdmype_id')->default(1);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
