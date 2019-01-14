<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{

    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->enum('tipo', ['Asesoría', 'Otro']);
            $table->enum('categoria', ['TIC', 'EFE', 'Financiera', 'Empresarial', 'Otro']);
            $table->text('descripcion');
            $table->string('slug')->unique();
            $table->string('img');
            

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
