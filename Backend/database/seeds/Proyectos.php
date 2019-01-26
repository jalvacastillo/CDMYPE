<?php

use Illuminate\Database\Seeder;
use App\Models\Proyectos\Proyecto;
use App\Models\Proyectos\Aplicacion;
use App\Models\Proyectos\Asesor;
use App\Models\Proyectos\Empresa;

class Proyectos extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i <= 20 ; $i++)
        {
            $table = new Proyecto;
            $table->nombre          = $faker->realText(30,2);
            $table->slug            = str_slug($table->nombre);
            $table->descripcion     = $faker->text;
            $table->tipo            = $faker->randomElement(['Pasantía', 'Hora Social', 'Investigación', 'Proyecto', 'Otro']);
            $table->categoria       = $faker->randomElement(['TIC', 'EFE', 'Financiero', 'Empresarial', 'Otro']);
            $table->estado          = $faker->randomElement(['Inactivo', 'Activo', 'Ejecución', 'Completado']);
            $table->especialidad    = 'Mercadeo';
            $table->finalizacion    = $faker->date;
            $table->duracion        = '5 Semanas';
            $table->contenido       = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quasi aperiam perferendis eaque velit laboriosam, doloribus dolore, consequatur maxime adipisci delectus error tempora iure odio pariatur, voluptatem ea incidunt deleniti!' ;
            $table->save();

            $table = new Asesor;
            $table->asesor_id       = $faker->numberBetween(1,5);
            $table->proyecto_id     = $i;
            $table->save();

            $table = new Empresa;
            $table->empresa_id       = $faker->numberBetween(1,100);
            $table->proyecto_id      = $i;
            $table->save();

            for($j = 1; $j <= 5 ; $j++)
            {
                $table = new Aplicacion;
                $table->proyecto_id = $i;
                $table->estado      = $j == 5 ? 'Seleccionado' : 'En Revisión';
                $table->usuario_id  = $faker->numberBetween(10,25);
                $table->nota        = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptatem doloremque temporibus, doloribus eum animi optio, laborum excepturi. Officiis aliquam, totam repellendus, nemo perspiciatis quis! Cumque quos, sequi sint debitis.';
                $table->save();

            }
        }

    }
}
