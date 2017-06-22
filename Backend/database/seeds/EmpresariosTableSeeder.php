<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente\Empresario;

class EmpresariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();



            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Empresario;
                $table->nombre          = $faker->name;
                $table->apellido        = $faker->name;
                $table->dui             = $faker->buildingNumber;
                $table->nit             = $faker->buildingNumber;
                $table->sexo            = $faker->numberBetween(1,2);
                $table->edad            = $faker->numberBetween(18,27);
                $table->telefono        = $faker->buildingNumber;
                $table->celular         = $faker->buildingNumber;
                $table->direccion       = $faker->address;
                $table->municipio       = $faker->word;
                $table->departamento    = $faker->word;
                $table->correo          = $faker->email;
                $table->save();

            }
            
    }
}
