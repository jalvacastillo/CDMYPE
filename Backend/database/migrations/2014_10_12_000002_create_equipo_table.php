<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{

    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nombre');

            $table->enum('tipo', ['Asesor','Compras','Director']);
            $table->enum('categoria', ['TIC', 'EFE', 'Financiero', 'Empresarial', 'Otro']);

            $table->string('cargo');
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_twitter')->nullable();
            $table->string('url_linkedin')->nullable();

            $table->string('avatar')->default('default.png');
            $table->boolean('web')->default(1);

            $table->integer('usuario_id')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
}
