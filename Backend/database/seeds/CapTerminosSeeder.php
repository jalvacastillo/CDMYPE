<?php

use Illuminate\Database\Seeder;
use App\Models\Cap\Termino;

class CapTerminosSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Termino;
                $table->encabezado      = $faker->word;
                $table->tema            = $faker->word;
                $table->categoria       = $faker->text;
                $table->descripcion     = $faker->text;
                $table->obj_general     = $faker->text;
                $table->obj_especifico  = $faker->text;
                $table->productos       = $faker->text;
                $table->lugar           = $faker->word;
                $table->fecha           = $faker->date;
                $table->fecha_limite    = $faker->date;
                $table->hora_inicio     = $faker->time;
                $table->hora_fin        = $faker->time;
                $table->nota            = $faker->word;
                $table->asesor_id       = $faker->numberBetween(1,7);
                $table->especialidad_id = $faker->numberBetween(1,7);
                $table->estado          = $faker->numberBetween(1,4);
                $table->informe         = $faker->word;

                $table->save();

            }

    }
}
