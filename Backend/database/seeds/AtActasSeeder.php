<?php

use Illuminate\Database\Seeder;
use App\Models\At\Acta;

class AtActasSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Acta;
                $table->termino_id  = $faker->numberBetween(1,20);
                $table->fecha       = $faker->date;
                $table->tipo      = $faker->numberBetween(1,2);

                $table->save();

            }

    }
}
