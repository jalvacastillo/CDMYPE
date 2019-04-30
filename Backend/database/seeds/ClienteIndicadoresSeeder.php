<?php

use Illuminate\Database\Seeder;
use App\Models\Empresas\Indicador;

class ClienteIndicadoresSeeder extends Seeder
{

    public function run()
    {

        $faker = Faker\Factory::create();

        for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Indicador;

                $table->fecha       = $faker->date;
                $table->usuario_id       = $faker->numberBetween(1,7);
                $table->empresa_id      = $faker->numberBetween(1,20);
                $table->venta_nacional  = $faker->numberBetween(1000,3000);
                $table->venta_expo      = $faker->numberBetween(1000,3000);
                $table->empleo_hf       = $faker->numberBetween(1,30);
                $table->empleo_ht       = $faker->numberBetween(1,30);
                $table->empleo_mf       = $faker->numberBetween(1,30);
                $table->empleo_mt       = $faker->numberBetween(1,30);
                $table->costos          = $faker->numberBetween(1000,3000);
                $table->financiamiento  = $faker->numberBetween(1000,3000);
                $table->capital_semilla = $faker->numberBetween(1000,3000);
                $table->productos       = "Producto";
                // $table->tipo            = $faker->randomElement(['Inicial','Impacto','Final']);

                $table->save();

            }
    }
}
