<?php

use Illuminate\Database\Seeder;

use App\Models\Especialidad;
use App\Models\Subespecialidad;

class Especialidades extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $especialidades = array(
          array('id' => '1','especialidad' => 'Diseño','deleted_at' => NULL,'created_at' => '2014-08-28 14:37:30','updated_at' => '2014-08-28 14:37:30'),
          array('id' => '2','especialidad' => 'Programación','deleted_at' => NULL,'created_at' => '2014-08-28 14:37:30','updated_at' => '2014-08-28 14:37:30'),
          array('id' => '3','especialidad' => 'Agroindustria','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '4','especialidad' => 'Finanzas','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '5','especialidad' => 'Mercadeo','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '6','especialidad' => 'Textiles y Confección','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '7','especialidad' => 'Artesanías','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '8','especialidad' => 'Diseño de Producto Artesanal','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '9','especialidad' => 'Informática','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '10','especialidad' => 'Oficios Técnicos','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '11','especialidad' => 'Turismo','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '12','especialidad' => 'Recursos Humanos','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '13','especialidad' => 'Empoderamiento','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '14','especialidad' => 'Peluquerias y Barberias','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00')
        );

        $subespecialidades = array(
          array('id' => '1','especialidad_id' => '1','sub_especialidad' => 'Diseño Web','deleted_at' => NULL,'created_at' => '2014-08-28 14:37:30','updated_at' => '2014-08-28 14:37:30'),
          array('id' => '2','especialidad_id' => '1','sub_especialidad' => 'Publicidad','deleted_at' => NULL,'created_at' => '2014-08-28 14:37:30','updated_at' => '2014-08-28 14:37:30'),
          array('id' => '3','especialidad_id' => '2','sub_especialidad' => 'Dispositivos Móviles','deleted_at' => NULL,'created_at' => '2014-08-28 14:37:30','updated_at' => '2014-08-28 14:37:30'),
          array('id' => '4','especialidad_id' => '2','sub_especialidad' => 'Desktop','deleted_at' => NULL,'created_at' => '2014-08-28 14:37:30','updated_at' => '2014-08-28 14:37:30'),
          array('id' => '5','especialidad_id' => '1','sub_especialidad' => 'Administración de empresas','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '6','especialidad_id' => '1','sub_especialidad' => 'Finanzas','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '7','especialidad_id' => '3','sub_especialidad' => 'Alimentos','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '8','especialidad_id' => '4','sub_especialidad' => 'Financiamiento','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '9','especialidad_id' => '5','sub_especialidad' => 'Mercadeo','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '10','especialidad_id' => '6','sub_especialidad' => 'Textiles y Confección','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '11','especialidad_id' => '7','sub_especialidad' => 'Artesanías','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '12','especialidad_id' => '8','sub_especialidad' => 'Diseño de Producto Artesanal','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '13','especialidad_id' => '1','sub_especialidad' => 'Diseño Gráfico','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '14','especialidad_id' => '1','sub_especialidad' => 'Arquitectura','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '15','especialidad_id' => '9','sub_especialidad' => 'Informática','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '16','especialidad_id' => '10','sub_especialidad' => 'Pintura y Dibujo','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '17','especialidad_id' => '11','sub_especialidad' => 'Turismo','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '18','especialidad_id' => '1','sub_especialidad' => 'Desarrollo de sistemas','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '19','especialidad_id' => '10','sub_especialidad' => 'Emprendedurismo','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '20','especialidad_id' => '7','sub_especialidad' => 'Cocina','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '21','especialidad_id' => '7','sub_especialidad' => 'Calzado','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '22','especialidad_id' => '1','sub_especialidad' => 'Plan de negocio','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '23','especialidad_id' => '12','sub_especialidad' => 'Recursos Humanos','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '24','especialidad_id' => '10','sub_especialidad' => 'Contabilidad','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '25','especialidad_id' => '10','sub_especialidad' => 'Educación Financiera','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '26','especialidad_id' => '10','sub_especialidad' => 'Pan Artesanal','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '27','especialidad_id' => '10','sub_especialidad' => 'Fruta Deshidratada','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '28','especialidad_id' => '3','sub_especialidad' => 'Agroindustria','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '29','especialidad_id' => '10','sub_especialidad' => 'Exportaciones e Importaciones.','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '30','especialidad_id' => '10','sub_especialidad' => 'Manualidades','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '31','especialidad_id' => '13','sub_especialidad' => 'Empoderamiento Económico','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '32','especialidad_id' => '5','sub_especialidad' => 'Publicidad','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '33','especialidad_id' => '10','sub_especialidad' => 'Teñido en Añil','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '34','especialidad_id' => '1','sub_especialidad' => 'Test','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
          array('id' => '35','especialidad_id' => '14','sub_especialidad' => 'Peluquerias y Barberias','deleted_at' => NULL,'created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00')
        );

        for($i = 0; $i < count($especialidades) ; $i++)
        {
            $table = new Especialidad;
            $table->id   = $especialidades[$i]['id'];
            $table->nombre   = $especialidades[$i]['especialidad'];

            $table->save();

        }

        for($i = 0; $i < count($subespecialidades) ; $i++)
        {
            $table = new Subespecialidad;
            $table->id   = $subespecialidades[$i]['id'];
            $table->nombre   = $subespecialidades[$i]['sub_especialidad'];
            $table->especialidad_id   = $subespecialidades[$i]['especialidad_id'];
            $table->save();

        }

    }
}
