<?php

use Illuminate\Database\Seeder;

use App\Models\Cliente\Proyecto;

class ClienteProyectosSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Proyecto;
                $table->asesor_id   = $faker->numberBetween(1,7);
                $table->cliente_id  = $faker->numberBetween(1,20);
                $table->nombre      = $faker->word;
                $table->fecha_fin   = $faker->date;
                $table->impacto     = $faker->text;

                $table->save();

            }
    }
}
