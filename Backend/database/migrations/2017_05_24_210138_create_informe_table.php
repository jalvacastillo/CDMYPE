<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeTable extends Migration
{

    public function up()
    {
        Schema::create('informe', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('titulo');
            $table->date('periodo_inicio');
            $table->date('periodo_fin');
            $table->string('introduccion');
            $table->string('objetivo');
            $table->string('conclusion');
            $table->string('recomendacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informe');
    }
}