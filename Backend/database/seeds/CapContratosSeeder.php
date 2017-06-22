<?php

use Illuminate\Database\Seeder;
use App\Models\Cap\Contrato;

class CapContratosSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Contrato;
                $table->termino_id  = $faker->numberBetween(1,7);
                $table->lugar    = $faker->word;
                $table->firma  = $faker->numberBetween(1,2);
                $table->pago  = $faker->numberBetween(100,2000);

                $table->save();

            }

    }
}
