<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class Proyectos extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Proyecto;
                $table->titulo       = $faker->title;
                $table->slug        = $faker->slug;
                $table->descripcion = $faker->text;
                $table->tipo        = $faker->numberBetween(1,3);
                $table->especialidad_id = $faker->numberBetween(1,5);
                $table->asesor_id   = $faker->numberBetween(1,3);

                $table->save();

            }
    }
}
