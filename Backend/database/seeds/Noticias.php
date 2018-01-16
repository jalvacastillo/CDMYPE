<?php

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class Noticias extends Seeder
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
    }
}
