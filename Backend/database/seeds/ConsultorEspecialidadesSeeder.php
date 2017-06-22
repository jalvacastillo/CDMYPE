<?php

use Illuminate\Database\Seeder;

use App\Models\Consultor\Especialidad;

class ConsultorEspecialidadesSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 40 ; $i++)
            {
                $table = new Especialidad;
                $table->consultor_id   = $faker->numberBetween(1,20);
                $table->especialidad_id   = $faker->numberBetween(1,20);

                $table->save();

            }
    }
}
