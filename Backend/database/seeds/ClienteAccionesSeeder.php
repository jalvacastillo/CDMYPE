<?php

use Illuminate\Database\Seeder;

use App\Models\Cliente\Accion;

class ClienteAccionesSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Accion;
                $table->proyecto_id     = $faker->numberBetween(1,7);
                $table->actividad       = $faker->word;
                $table->responsable     = $faker->numberBetween(1,4);
                $table->inicio          = $faker->date;
                $table->fin             = $faker->date;
                $table->estado          = $faker->numberBetween(1,3);

                $table->save();

            }
    }
}
