<?php

use Illuminate\Database\Seeder;

use App\Models\At\Contrato;

class AtContratosSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i <= 20 ; $i++)
        {
            $table = new Contrato;

            $table->termino_id      = $faker->numberBetween(1,20);
            $table->consultor_id    = $faker->numberBetween(1,20);
            $table->duracion        = $faker->numberBetween(1,20);
            $table->inicio          = $faker->date;
            $table->fin             = $faker->date;
            $table->pago            = $faker->numberBetween(1,20);
            $table->aporte          = $faker->numberBetween(1,20);
            $table->lugar_firma     = $faker->word;

            $table->save();
        }

    }
}
