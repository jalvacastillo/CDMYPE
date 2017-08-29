<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente\Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();



            // for($i = 1; $i <= 20 ; $i++)
            // {
            //     $table = new Empresa;
            //     $table->nombre          = $faker->name;
            //     $table->nit             = $faker->buildingNumber;
            //     $table->iva             = $faker->buildingNumber;
            //     $table->constitucion    = $faker->numberBetween(1,3);
            //     $table->direccion       = $faker->text;
            //     $table->municipio       = $faker->word;
            //     $table->departamento    = $faker->word;
            //     $table->fundacion       = $faker->date;
            //     $table->contabilidad    = false;
            //     $table->sector          = $faker->numberBetween(1,3);
            //     $table->tamano          = $faker->numberBetween(1,3);
                
            //     $table->descripcion = $faker->text;
            //     $table->actividad   = $faker->text;
            //     $table->save();

            // }

            for($i = 1; $i <= 20 ; $i++)
            {
                $table = new Empresa;
                $table->nombre          = $faker->name;
                $table->nit             = $faker->buildingNumber;
                $table->iva             = $faker->buildingNumber;
                $table->constitucion    = $faker->numberBetween(1,3);
                $table->direccion       = $faker->text;
                $table->municipio       = $faker->word;
                $table->departamento    = $faker->word;
                $table->fundacion       = $faker->date;
                $table->contabilidad    = false;
                $table->sector          = $faker->numberBetween(1,3);
                $table->tamano          = $faker->numberBetween(1,3);
                
                $table->descripcion = $faker->text;
                $table->actividad   = $faker->text;
                $table->save();

            }
            
    }
}
