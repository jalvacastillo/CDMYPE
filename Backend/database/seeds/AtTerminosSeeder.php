<?php

use Illuminate\Database\Seeder;
use App\Models\At\Termino;

class AtTerminosSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Termino;
                $table->cliente_id      = $faker->numberBetween(1,20);
                $table->tema            = $faker->word;
                $table->obj_general     = $faker->text;
                $table->obj_especifico  = $faker->text;
                $table->productos       = $faker->text;
                $table->tiempo_ejecucion = $faker->numberBetween(1,7);
                $table->trabajo_local   = $faker->numberBetween(1,7);
                $table->fecha           = $faker->date;
                $table->financiamiento  = $faker->numberBetween(1,7);
                $table->aporte          = $faker->numberBetween(1,7);
                $table->estado          = $faker->numberBetween(1,4);
                $table->especialidad_id = $faker->numberBetween(1,7);
                $table->asesor_id       = $faker->numberBetween(1,7);
                $table->informe         = $faker->word;
                $table->fecha_aprobacion = $faker->date;

                $table->save();

            }

    }
}
