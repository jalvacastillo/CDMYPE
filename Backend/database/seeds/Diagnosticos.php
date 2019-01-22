<?php

use Illuminate\Database\Seeder;
use App\Models\Diagnosticos\Diagnostico;
use App\Models\Diagnosticos\Pregunta;
use App\Models\Diagnosticos\Valor;

use App\Models\Diagnosticos\Categoria;
use App\Models\Diagnosticos\Subcategoria;

class Diagnosticos extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        Categoria::create(['nombre' => 'Infraestructura', 'diagnostico_id' => 1]);
            Subcategoria::create(['nombre' => 'Equipo', 'categoria_id' => 1]);
            Subcategoria::create(['nombre' => 'Software', 'categoria_id' => 1]);
            Subcategoria::create(['nombre' => 'Conectividad', 'categoria_id' => 1]);
            Subcategoria::create(['nombre' => 'Seguridad', 'categoria_id' => 1]);
        Categoria::create(['nombre' => 'Administración', 'diagnostico_id' => 1]);
            Subcategoria::create(['nombre' => 'Contabilidad', 'categoria_id' => 2]);
            Subcategoria::create(['nombre' => 'Gestión', 'categoria_id' => 2]);
        Categoria::create(['nombre' => 'Procesos', 'diagnostico_id' => 1]);
            Subcategoria::create(['nombre' => 'Control', 'categoria_id' => 3]);
            Subcategoria::create(['nombre' => 'Información', 'categoria_id' => 3]);
        Categoria::create(['nombre' => 'Mercadeo', 'diagnostico_id' => 1]);
            Subcategoria::create(['nombre' => 'Gestión', 'categoria_id' => 4]);
            Subcategoria::create(['nombre' => 'Promoción', 'categoria_id' => 4]);
            Subcategoria::create(['nombre' => 'Ventas', 'categoria_id' => 4]);
        Categoria::create(['nombre' => 'Innovación', 'diagnostico_id' => 1]);
            Subcategoria::create(['nombre' => 'Investigación', 'categoria_id' => 5]);
            Subcategoria::create(['nombre' => 'Análisis', 'categoria_id' => 5]);

        $table = new Diagnostico;
        $table->nombre          = 'Diagnostico TIC';
        $table->categoria       = 'TIC';
        $table->descripcion     = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quaerat ut architecto modi dolores perferendis quia, laboriosam reiciendis provident. Beatae dignissimos totam ex ad, inventore quibusdam, necessitatibus cumque eius debitis!';
        $table->save();

        for ($i=1; $i < 5; $i++) { 
            $table = new Pregunta;
            $table->nombre          = $faker->name;
            $table->subcategoria_id    = $faker->numberBetween(1,13);
            $table->diagnostico_id  = 1;
            $table->save();

                $table = new Valor;
                $table->nombre       = 'SI';
                $table->pregunta_id  = $i;
                $table->save();
                $table = new Valor;
                $table->nombre       = 'NO';
                $table->pregunta_id  = $i;
                $table->save();
        }

            
    }
}
