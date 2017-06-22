<?php

use Illuminate\Database\Seeder;
use App\Models\Bitacora;

class Bitacoras extends Seeder
{

    public function run()
    {
         $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Bitacora;
                $table->usuario_id  = $faker->numberBetween(1,5);
                $table->tabla       = $faker->numberBetween(1,20);
                $table->tabla_id    = $faker->numberBetween(1,20);
                $table->accion      = $faker->numberBetween(1,3);
                $table->save();

            }
            
    }
}
