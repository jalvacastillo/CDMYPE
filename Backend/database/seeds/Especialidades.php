<?php

use Illuminate\Database\Seeder;

use App\Models\Especialidad;

class Especialidades extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Especialidad;
                $table->nombre   = $faker->word;

                $table->save();

            }
    }
}
