<?php

use Illuminate\Database\Seeder;
use App\Models\Salidas\Asesor;

class SalidaAsesoresTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();



            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Asesor;
                $table->Salida_id   = $faker->numberBetween(1,20);
                $table->asesor_id   = $faker->numberBetween(1,5);

                $table->save();

            }
            
    }
}
