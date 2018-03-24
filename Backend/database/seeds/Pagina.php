<?php

use Illuminate\Database\Seeder;
use App\Models\Pagina\Noticia;
use App\Models\Pagina\Proyecto;
use App\Models\Pagina\Testimonio;
use App\Models\Pagina\Resultado;

class Pagina extends Seeder
{

    public function run()
    {

        $faker = Faker\Factory::create();

        for($i = 1; $i <= 20 ; $i++)
        {
            $table = new Noticia;
            $table->titulo      = $faker->realText(30,2);
            $table->slug        = $faker->slug;
            $table->descripcion = $faker->name;
            $table->contenido   = $faker->text;
            $table->recurso     = "default.png";
            $table->tipo        = $faker->numberBetween(1,2);
            $table->categoria   = $faker->numberBetween(1,4);
            $table->asesor_id   = $faker->numberBetween(1,3);

            $table->save();

        }

        for($i = 1; $i <= 50 ; $i++)
        {
            $table = new Proyecto;
            $table->titulo          = $faker->realText(30,2);
            $table->descripcion     = $faker->text;
            $table->finalizacion    = $faker->date;
            $table->tipo            = $faker->numberBetween(1,3);
            $table->especialidad_id = $faker->numberBetween(1,5);
            $table->estado          = $faker->numberBetween(1,3);
            $table->duracion        = '5 Semanas';
            $table->asesor_id       = $faker->numberBetween(1,3);

            $table->save();

        }

            $table = new Testimonio;
            $table->cliente_id      = 15;
            $table->descripcion     = $faker->text;
            $table->asesor_id       = 2;

            $table->save();

            $table = new Testimonio;
            $table->cliente_id      = 240;
            $table->descripcion     = $faker->text;
            $table->asesor_id       = 2;

            $table->save();

            $table = new Resultado;
            $table->nombre   = 'Empresas';
            $table->total   = $faker->numberBetween(1,799);
            $table->save();
            $table = new Resultado;
            $table->nombre   = 'Empleos';
            $table->total   = $faker->numberBetween(1,799);
            $table->save();
            $table = new Resultado;
            $table->nombre   = 'Asesorías';
            $table->total   = $faker->numberBetween(1,799);
            $table->save();
            $table = new Resultado;
            $table->nombre   = 'Capacitaciones';
            $table->total   = $faker->numberBetween(1,799);
            $table->save();
            $table = new Resultado;
            $table->nombre   = 'Creditos';
            $table->total   = $faker->numberBetween(1,799);
            $table->save();
            $table = new Resultado;
            $table->nombre   = 'Ventas';
            $table->total   = $faker->numberBetween(1,799);
            $table->save();


    }
}
