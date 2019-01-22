<?php

use Illuminate\Database\Seeder;
use App\Models\Alumnos\Alumno;
use App\User;
class Alumnos extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i <= 50 ; $i++)
        {
            $user = new User;
            $user->name         = $faker->name;
            $user->email        = 'alumno_' . $i . '@academia.com';
            $user->avatar       = 'default.jpg';
            $user->password     = Hash::make('alumno');
            $user->tipo         = 'Estudiante';
            $user->save();
            
            $table = new Alumno;
            $table->nombre      = $user->name;
            $table->carrera     = $faker->name;
            $table->correo      = $user->email;
            $table->direccion   = $faker->address;
            $table->descripcion = $faker->text;
            $table->municipio   = $faker->city;
            $table->telefono    = $faker->phonenumber;
            $table->url_facebook = 'https://facebook.com';
            $table->url_twitter     = 'https://twitter.com';
            $table->url_linkedin    = 'https://linkedin.com';
            $table->usuario_id     = $i;
            $table->save();

        }


    }
}
