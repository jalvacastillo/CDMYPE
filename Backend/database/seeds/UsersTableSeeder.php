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
            $user->email = 'aminta.rodas@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = 'Licenciada en Administración de Empresas.';
            $user->avatar = 'aminta.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Jesus Alvarado';
            $user->email = 'jesus.alvarado@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesor TIC';
            $user->descripcion = 'Ingeniero en Sistemas Informáticos.';
            $user->avatar = 'jesus.jpg';
            $user->url_facebook = 'jalvacastillo';
            $user->url_linkedin = 'jalvacastillo';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Ingrid Hernandez';
            $user->email = 'ingrid.hernandez@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = 'Licenciada en Mercadeo y Publicidad.';
            $user->avatar = 'ingrid.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Natalia Calderon';
            $user->email = 'natalia.calderon@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = 'Licenciada en Economía.';
            $user->avatar = 'natalia.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Walter Cuellar';
            $user->email = 'walter.cuellar@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = 'Licenciado en Administración de Empresas.';
            $user->avatar = 'walter.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Gustavo Jovel';
            $user->email = 'gustavo.jovel@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesor Financiero';
            $user->descripcion = 'Ingeniero Agrónomo en Desarrollo Rural.';
            $user->avatar = 'gustavo.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Rhina Molina';
            $user->email = 'rhina.molina@catolica.edu.sv';
            $user->tipo = 'Asesor';
            $user->titulo = 'Asesor';
            $user->cargo = 'Asesora EFE';
            $user->descripcion = 'Licenciada en Administración de Empresas.';
            $user->avatar = 'rhina.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Carmen Mercado';
            $user->email = 'carmen.mercado@catolica.edu.sv';
            $user->tipo = 'Compras';
            $user->titulo = 'Compras';
            $user->cargo = 'Técnico de Compras';
            $user->descripcion = 'Técnica en Lácteos.';
            $user->avatar = 'carmen.jpg';
            $user->password = Hash::make('admin');
            $user->save();

            $user = new User;
            $user->name = 'Marlene Argueta';
            $user->email = 'marlene.argueta@catolica.edu.sv';
            $user->tipo = 'Compras';
            $user->titulo = 'Compras';
            $user->cargo = 'Técnico de Compras';
            $user->descripcion = 'Técnica en Lácteos.';
            $user->avatar = 'marlene.jpg';
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
