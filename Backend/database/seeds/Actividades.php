<?php

use Illuminate\Database\Seeder;
use App\Models\Actividades\Actividad;
use App\Models\Actividades\Aplicacion;
use App\Models\Actividades\Asesor;

class Actividades extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i <= 21 ; $i++)
        {
            $table = new Actividad;
            $table->nombre          = $faker->realText(30,2);
            $table->img             = 'default.jpg';
            $table->descripcion     = $faker->text;
            $table->tipo            = $faker->randomElement(['Capacitación', 'Taller', 'Webinar', 'Seminario', 'Curso', 'Evento']);
            $table->categoria       = $faker->randomElement(['Formación', 'Comercialización']);
            $table->estado          = $faker->randomElement(['Inactivo', 'Activo', 'Ejecución', 'Finalizado']);
            $table->especialidad_id = $faker->numberBetween(1,10);
            $table->contenido       = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quasi aperiam perferendis eaque velit laboriosam, doloribus dolore, consequatur maxime adipisci delectus error tempora iure odio pariatur, voluptatem ea incidunt deleniti!' ;
            $table->fecha_inicio          = $faker->dateTimeBetween('-1 days', '+ 5 days');
            $table->fecha_fin             = $faker->dateTimeBetween('-1 days', '+ 5 days');
            $table->hora_inicio     = $faker->time('08:00');
            $table->hora_fin        = $faker->time('12:00');
            $table->cupo            = $faker->numberBetween(1,20);
            $table->save();

            $table = new Asesor;
            $table->asesor_id       = $faker->numberBetween(1,12);
            $table->actividad_id     = $i;
            $table->save();

            for($j = 1; $j <= 5 ; $j++)
            {
                $table = new Aplicacion;
                $table->actividad_id = $i;
                $table->estado       = $j == 5 ? 'Seleccionado' : 'En Revisión';
                $table->usuario_id   = $faker->numberBetween(1,13);
                $table->nota         = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptatem doloremque temporibus, doloribus eum animi optio, laborum excepturi. Officiis aliquam, totam repellendus, nemo perspiciatis quis! Cumque quos, sequi sint debitis.';
                $table->save();

            }
        }

    }
}
