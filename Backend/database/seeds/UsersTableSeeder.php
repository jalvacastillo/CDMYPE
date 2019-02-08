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
            $user->id = 1;
            $user->name = 'Carmen Mercado';
            $user->email = 'carmen.mercado@cdmype.org.sv';
            $user->avatar = 'carmen.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 1;
            $user->nombre = 'Carmen Mercado';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Administración de Empresas.';
            $user->categoria = 'Empresarial';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = '';
            $user->avatar = 'carmen.jpg';
            $user->usuario_id = 1;
            $user->save();

            $user = new User;
            $user->id = 4;
            $user->name = 'Aminta Rodas';
            $user->email = 'aminta.rodas@catolica.edu.sv';
            $user->avatar = 'aminta.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 4;
            $user->nombre = 'Aminta Rodas';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Administración de Empresas.';
            $user->categoria = 'Empresarial';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = '';
            $user->avatar = 'aminta.jpg';
            $user->usuario_id = 4;
            $user->save();

            $user = new User;
            $user->id = 15;
            $user->name = 'Jesus Alvarado';
            $user->email = 'jesus.alvarado@catolica.edu.sv';
            $user->avatar = 'jesus.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 15;
            $user->nombre = 'Jesus Alvarado';
            $user->tipo = 'Asesor';
            $user->titulo = 'Ingeniero en Sistemas Informáticos.';
            $user->cargo = 'Asesor TIC';
            $user->categoria = 'TIC';
            $user->descripcion = '';
            $user->avatar = 'jesus.jpg';
            $user->usuario_id = 15;
            $user->url_facebook = 'http://facebook.com/jalvacastillo';
            $user->url_linkedin = 'https://www.linkedin.com/in/jalvacastillo';
            $user->url_twitter = 'https://twitter.com/jalvacastillo';
            $user->save();

            $user = new User;
            $user->id = 5;
            $user->name = 'Ingrid Hernandez';
            $user->email = 'ingrid.hernandez@catolica.edu.sv';
            $user->avatar = 'ingrid.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 5;
            $user->nombre = 'Ingrid Hernandez';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Mercadeo y Publicidad.';
            $user->cargo = 'Asesora Empresarial';
            $user->categoria = 'Empresarial';
            $user->descripcion = '';
            $user->avatar = 'ingrid.jpg';
            $user->usuario_id = 5;
            $user->save();

            $user = new User;
            $user->id = 6;
            $user->name = 'Natalia Calderon';
            $user->email = 'natalia.calderon@catolica.edu.sv';
            $user->avatar = 'natalia.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 6;
            $user->nombre = 'Natalia Calderon';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciada en Economía.';
            $user->categoria = 'Empresarial';
            $user->cargo = 'Asesora Empresarial';
            $user->descripcion = '';
            $user->avatar = 'natalia.jpg';
            $user->usuario_id = 6;
            $user->save();

            $user = new User;
            $user->id = 3;
            $user->name = 'Walter Cuellar';
            $user->email = 'walter.cuellar@catolica.edu.sv';
            $user->avatar = 'walter.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 3;
            $user->nombre = 'Walter Cuellar';
            $user->tipo = 'Asesor';
            $user->titulo = 'Licenciado en Administración de Empresas.';
            $user->cargo = 'Asesora Empresarial';
            $user->categoria = 'Empresarial';
            $user->descripcion = '';
            $user->avatar = 'walter.jpg';
            $user->usuario_id = 3;
            $user->save();

            $user = new User;
            $user->id = 12;
            $user->name = 'Gustavo Jovel';
            $user->email = 'gustavo.jovel@catolica.edu.sv';
            $user->avatar = 'gustavo.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 12;
            $user->nombre = 'Gustavo Jovel';
            $user->tipo = 'Asesor';
            $user->titulo = 'Ingeniero Agrónomo en Desarrollo Rural.';
            $user->cargo = 'Asesora Financiero';
            $user->categoria = 'Financiero';
            $user->descripcion = '';
            $user->avatar = 'gustavo.jpg';
            $user->usuario_id = 12;
            $user->save();

            $user = new User;
            $user->id = 7;
            $user->name = 'Rhina Molina';
            $user->email = 'rhina.molina@catolica.edu.sv';
            $user->avatar = 'rhina.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 7;
            $user->nombre = 'Rhina Molina';
            $user->tipo = 'Asesor';
            $user->titulo = 'Ingeniero Agrónomo en Desarrollo Rural.';
            $user->cargo = 'Asesora EFE';
            $user->categoria = 'EFE';
            $user->descripcion = '';
            $user->avatar = 'rhina.jpg';
            $user->usuario_id = 7;
            $user->save();

            $user = new User;
            $user->id = 8;
            $user->name = 'Raul Escalante';
            $user->email = 'raul.escalante@catolica.edu.sv';
            $user->avatar = 'raul.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 8;
            $user->nombre = 'Raul Escalante';
            $user->tipo = 'Asesor';
            $user->titulo = 'Ingeniero Agrónomo en Desarrollo Rural.';
            $user->cargo = 'Asesora EFE';
            $user->categoria = 'EFE';
            $user->descripcion = '';
            $user->avatar = 'raul.jpg';
            $user->usuario_id = 8;
            $user->save();

            $user = new User;
            $user->id = 2;
            $user->name = 'Rene Sanabria';
            $user->email = 'rene.sanabria@catolica.edu.sv';
            $user->avatar = 'rene.jpg';
            $user->password = Hash::make('admin');
            $user->tipo = 'Administrador';
            $user->save();
            $user = new Equipo;
            $user->id = 2;
            $user->nombre = 'Rene Sanabria';
            $user->tipo = 'Asesor';
            $user->titulo = 'Ingeniero Agrónomo en Desarrollo Rural.';
            $user->cargo = 'Asesora EFE';
            $user->categoria = 'EFE';
            $user->descripcion = '';
            $user->avatar = 'rene.jpg';
            $user->usuario_id = 2;
            $user->save();
            
    }
}
