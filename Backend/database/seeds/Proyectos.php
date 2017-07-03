<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class Proyectos extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 50 ; $i++)
            {
                $table = new Proyecto;
                $table->titulo          = $faker->realText(30,2);
                $table->slug            = $faker->slug;
                $table->descripcion     = $faker->text;
                $table->imagen          = 'default.png';
                $table->finalizacion    = $faker->date;
                $table->tipo            = $faker->numberBetween(1,3);
                $table->especialidad_id = $faker->numberBetween(1,5);
                $table->estado          = $faker->numberBetween(1,3);
                $table->duracion        = $faker->numberBetween(1,20) + ' Semanas';
                $table->asesor_id       = $faker->numberBetween(1,3);

                $table->save();

            }
    }
}
