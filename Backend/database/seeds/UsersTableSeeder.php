<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Pagina\Equipo;

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
            $user->avatar = 'aminta.jpg';
            $user->password = Hash::make('admin');
            $user->save();
            $user = new Equipo;
            $user->nombre = 'Aminta Rodas';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Administración de Empresas.';
            $user->categoria = 'Empresarial';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = '';
            $user->avatar = 'aminta.jpg';
            $user->save();

            $user = new User;
            $user->name = 'Jesus Alvarado';
            $user->email = 'jesus.alvarado@catolica.edu.sv';
            $user->avatar = 'jesus.jpg';
            $user->password = Hash::make('admin');
            $user->save();
            $user = new Equipo;
            $user->nombre = 'Jesus Alvarado';
            $user->tipo = 'Asesor';
            $user->titulo = 'Ingeniero en Sistemas Informáticos.';
            $user->cargo = 'Asesor TIC';
            $user->categoria = 'TIC';
            $user->descripcion = '';
            $user->avatar = 'jesus.jpg';
            $user->url_facebook = 'http://facebook.com/jalvacastillo';
            $user->url_linkedin = 'https://www.linkedin.com/in/jalvacastillo';
            $user->url_twitter = 'https://twitter.com/jalvacastillo';
            $user->save();

            $user = new User;
            $user->name = 'Ingrid Hernandez';
            $user->email = 'ingrid.hernandez@catolica.edu.sv';
            $user->avatar = 'ingrid.jpg';
            $user->password = Hash::make('admin');
            $user->save();
            $user = new Equipo;
            $user->nombre = 'Ingrid Hernandez';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Mercadeo y Publicidad.';
            $user->cargo = 'Asesora Empresarial';
            $user->categoria = 'Empresarial';
            $user->descripcion = '';
            $user->avatar = 'ingrid.jpg';
            $user->save();

            $user = new User;
            $user->name = 'Natalia Calderon';
            $user->email = 'natalia.calderon@catolica.edu.sv';
            $user->avatar = 'natalia.jpg';
            $user->password = Hash::make('admin');
            $user->save();
            $user = new Equipo;
            $user->nombre = 'Natalia Calderon';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Economía.';
            $user->categoria = 'Empresarial';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = '';
            $user->avatar = 'natalia.jpg';
            $user->save();

            $user = new User;
            $user->name = 'Walter Cuellar';
            $user->email = 'walter.cuellar@catolica.edu.sv';
            $user->avatar = 'walter.jpg';
            $user->password = Hash::make('admin');
            $user->save();
            $user = new Equipo;
            $user->nombre = 'Walter Cuellar';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciado en Administración de Empresas.';
            $user->cargo = 'Asesora Empresarial';
            $user->categoria = 'Empresarial';
            $user->descripcion = '';
            $user->avatar = 'walter.jpg';
            $user->save();
            // $user->avatar = 'gustavo.jpg';

            // $user = new User;
            // $user->nombre = 'Gustavo Jovel';
            // $user->email = 'gustavo.jovel@catolica.edu.sv';
            // $user->nombre = 'Gustavo Jovel';
            // $user->tipo = 'Asesor';
            // $user->= 'gustavo.jpg = 'Asesor';
            // $user->cargo = 'Asesor Financiero';
            // $user->descripcion = 'Ingeniero Agrónomo en Desarrollo Rural.';
            // $user->avatar';
            // $user->password = Hash::make('admin');
            // $user->avatar = 'rhina.jpg';
            // $user->save();

            // $user = new User;
            // $user->nombre = 'Rhina Molina';
            // $user->email = 'rhina.molina@catolica.edu.sv';
            // $user->tipo = 'Asesor';
            // $user->= 'rhina.jpg = 'Asesor';
            // $user->cargo = 'Asesora EFE';
            // $user->descripcion = 'Licenciada en Administración de Empresas.';
            // $user->avatar';
            // $user->password = Hash::make('admin');
            // $user->avatar = 'carmen.jpg';
            // $user->save();

            // $user = new User;
            // $user->nombre = 'Carmen Mercado';
            // $user->email = 'carmen.mercado@catolica.edu.sv';
            // $user->tipo = 'Compras';
            // $user->= 'carmen.jpg = 'Compras';
            // $user->cargo = 'Técnico de Compras';
            // $user->descripcion = 'Técnica en Lácteos.';
            // $user->avatar';
            // $user->password = Hash::make('admin');
            // $user->save();
            
    }
}
