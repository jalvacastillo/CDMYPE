<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente\Cliente;

class ClientesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();



            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Cliente;
                $table->empresario_id   = $faker->numberBetween(1,15);
                $table->empresa_id      = $faker->numberBetween(1,15);
                $table->procedencia     = $faker->numberBetween(1,4);
                $table->tipo            = $faker->numberBetween(1,2);

                $table->cdmype_id       = 1;
                
                $table->save();

            }
            
    }
}
