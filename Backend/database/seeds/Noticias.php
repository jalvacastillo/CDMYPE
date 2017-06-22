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
                $table->titulo      = $faker->title;
                $table->slug        = $faker->slug;
                $table->descripcion = $faker->text;
                $table->tipo        = $faker->numberBetween(1,3);
                $table->asesor_id   = $faker->numberBetween(1,3);

                $table->save();

            }
    }
}
