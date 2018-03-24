<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

            $user = new User;
            $user->name = 'Aminta Rodas';
            $user->email = 'aminta@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = $faker->text;
            $user->avatar = 'aminta.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Jesus Alvarado';
            $user->email = 'jesus@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesor TIC';
            $user->descripcion = $faker->text;
            $user->avatar = 'jesus.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Ingrid Hernandez';
            $user->email = 'ingrid@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = $faker->text;
            $user->avatar = 'ingrid.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Natalia Calderon';
            $user->email = 'natalia@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = $faker->text;
            $user->avatar = 'natalia.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Walter Cuellar';
            $user->email = 'walter@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = $faker->text;
            $user->avatar = 'walter.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Gustavo Jovel';
            $user->email = 'gustavo@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesor Financiero';
            $user->descripcion = $faker->text;
            $user->avatar = 'gustavo.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Rhina Molina';
            $user->email = 'rhina@admin.com';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora EFE';
            $user->descripcion = $faker->text;
            $user->avatar = 'rhina.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Carmen Mercado';
            $user->email = 'carmen@admin.com';
            $user->tipo = 'Compras';
            $user->titulo = 'Compras';
            $user->cargo = 'Técnico de Compras';
            $user->descripcion = $faker->text;
            $user->avatar = 'carmen.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            // for($i = 1; $i <= 20 ; $i++)
            // {
            //     $user = new User;
            //     $user->name = 'Alumno Prueba';
            //     $user->email = $faker->email();
            //     $user->nit = '2222-222222-222-'. $i;
            //     $user->tipo = 3;
            //     $user->titulo = 3;
            //     $user->sexo = $faker->numberBetween(1,2);
            //     $user->avatar = 'alumno.png';
            //     $user->password = Hash::make('admin');
            //     $user->escuela_id = 1;
            //     $user->save();

            // }
            
    }
}
