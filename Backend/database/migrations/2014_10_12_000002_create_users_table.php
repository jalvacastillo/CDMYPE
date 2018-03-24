<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('tipo', ['Administrador','Asesor','Compras','Director', 'Alumno']);
            $table->string('avatar')->default('default.png');

            $table->string('cargo');
            $table->string('titulo')->nullable();;
            $table->text('descripcion')->nullable();
            $table->string('url_facebook')->nullable();;
            $table->string('url_linkedin')->nullable();;

            $table->boolean('activo')->default(1);
            $table->integer('cdmype_id')->default(1);

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
