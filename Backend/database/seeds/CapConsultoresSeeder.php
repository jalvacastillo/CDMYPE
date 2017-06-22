<?php

use Illuminate\Database\Seeder;
use App\Models\Cap\Consultor;

class CapConsultoresSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Consultor;
                $table->termino_id      = $faker->numberBetween(1,20);
                $table->consultor_id    = $faker->numberBetween(1,20);
                $table->fecha_oferta    = $faker->date;
                $table->fecha_seleccion = $faker->date;
                $table->estado          = $faker->numberBetween(1,2);
                $table->doc_oferta      = "Doc";
                $table->evaluacion      = $faker->numberBetween(1,100);

                $table->save();

            }

    }
}
