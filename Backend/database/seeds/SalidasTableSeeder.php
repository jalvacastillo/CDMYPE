<?php

use Illuminate\Database\Seeder;
use App\Models\Salidas\Salida;

class SalidasTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();



            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Salida;
                $table->fecha           = $faker->date;
                $table->hora_salida     = $faker->time;
                $table->hora_regreso    = $faker->time;
                $table->lugar           = $faker->word;
                $table->justificacion   = $faker->text;
                $table->objetivo        = $faker->text;
                $table->encargado_id    = $faker->numberBetween(1,5);
                $table->estado          = $faker->numberBetween(1,3);
                $table->observacion     = $faker->text;
                $table->cdmype_id       = 1;
                
                $table->save();

            }
            
    }
}
