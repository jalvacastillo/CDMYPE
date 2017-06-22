<?php

use Illuminate\Database\Seeder;
use App\Models\Consultor\Consultor;

class ConsultoresTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();



            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Consultor;
                $table->nombre       = $faker->name;
                $table->dui          = $faker->buildingNumber;
                $table->nit          = $faker->buildingNumber;
                $table->sexo         = $faker->numberBetween(1,2);
                $table->correo       = $faker->email;
                $table->direccion    = $faker->address;
                $table->municipio    = $faker->word;
                $table->departamento = $faker->word;
                $table->telefono     = $faker->phoneNumber;
                $table->empresa      = $faker->name;
                $table->tipo         = $faker->numberBetween(1,2);

                $table->save();

            }
            
    }
}
