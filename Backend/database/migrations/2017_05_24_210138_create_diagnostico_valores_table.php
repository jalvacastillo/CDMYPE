<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoValoresTable extends Migration
{


    public function up()
    {
        
        Schema::create('diagnostico_valores', function (Blueprint $table) {
            $table->increments('id');

            $table->text('nombre');
            $table->text('pregunta_id');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnostico_valores');
    }
}
