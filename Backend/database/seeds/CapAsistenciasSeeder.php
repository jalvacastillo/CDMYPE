<?php

use Illuminate\Database\Seeder;
use App\Models\Cap\Asistencia;

class CapAsistenciasSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Asistencia;
                $table->termino_id     = $faker->numberBetween(1,20);
                $table->cliente_id          = $faker->numberBetween(1,20);
                $table->invitado            = $faker->name;
                $table->asistencia          = $faker->numberBetween(0,1);

                $table->save();

            }

    }
}
