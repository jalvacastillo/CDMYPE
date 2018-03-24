<?php

use Illuminate\Database\Seeder;

use App\Models\Especialidad;

class Especialidades extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        $subespecialidades = array(
          array('id' => '1','especialidad_id' => '1','sub_especialidad' => 'Diseño Web'),
          array('id' => '2','especialidad_id' => '1','sub_especialidad' => 'Publicidad'),
          array('id' => '3','especialidad_id' => '2','sub_especialidad' => 'Dispositivos Móviles'),
          array('id' => '4','especialidad_id' => '2','sub_especialidad' => 'Desktop'),
          array('id' => '5','especialidad_id' => '1','sub_especialidad' => 'Administración de empresas'),
          array('id' => '6','especialidad_id' => '1','sub_especialidad' => 'Finanzas'),
          array('id' => '7','especialidad_id' => '3','sub_especialidad' => 'Alimentos'),
          array('id' => '8','especialidad_id' => '4','sub_especialidad' => 'Financiamiento'),
          array('id' => '9','especialidad_id' => '5','sub_especialidad' => 'Mercadeo'),
          array('id' => '10','especialidad_id' => '6','sub_especialidad' => 'Textiles y Confección'),
          array('id' => '11','especialidad_id' => '7','sub_especialidad' => 'Artesanías'),
          array('id' => '12','especialidad_id' => '8','sub_especialidad' => 'Diseño de Producto Artesanal'),
          array('id' => '13','especialidad_id' => '1','sub_especialidad' => 'Diseño Gráfico'),
          array('id' => '14','especialidad_id' => '1','sub_especialidad' => 'Arquitectura'),
          array('id' => '15','especialidad_id' => '9','sub_especialidad' => 'Informática'),
          array('id' => '16','especialidad_id' => '10','sub_especialidad' => 'Pintura y Dibujo'),
          array('id' => '17','especialidad_id' => '11','sub_especialidad' => 'Turismo'),
          array('id' => '18','especialidad_id' => '1','sub_especialidad' => 'Desarrollo de sistemas'),
          array('id' => '19','especialidad_id' => '10','sub_especialidad' => 'Emprendedurismo'),
          array('id' => '20','especialidad_id' => '7','sub_especialidad' => 'Cocina'),
          array('id' => '21','especialidad_id' => '7','sub_especialidad' => 'Calzado'),
          array('id' => '22','especialidad_id' => '1','sub_especialidad' => 'Plan de negocio'),
          array('id' => '23','especialidad_id' => '12','sub_especialidad' => 'Recursos Humanos'),
          array('id' => '24','especialidad_id' => '10','sub_especialidad' => 'Contabilidad'),
          array('id' => '25','especialidad_id' => '10','sub_especialidad' => 'Educación Financiera'),
          array('id' => '26','especialidad_id' => '10','sub_especialidad' => 'Pan Artesanal'),
          array('id' => '27','especialidad_id' => '10','sub_especialidad' => 'Fruta Deshidratada'),
          array('id' => '28','especialidad_id' => '3','sub_especialidad' => 'Agroindustria'),
          array('id' => '29','especialidad_id' => '10','sub_especialidad' => 'Exportaciones e Importaciones.'),
          array('id' => '30','especialidad_id' => '10','sub_especialidad' => 'Manualidades'),
          array('id' => '31','especialidad_id' => '13','sub_especialidad' => 'Empoderamiento Económico'),
          array('id' => '32','especialidad_id' => '5','sub_especialidad' => 'Publicidad'),
          array('id' => '33','especialidad_id' => '10','sub_especialidad' => 'Teñido en Añil'),
          array('id' => '34','especialidad_id' => '1','sub_especialidad' => 'Test'),
          array('id' => '35','especialidad_id' => '14','sub_especialidad' => 'Peluquerias y Barberias')
        );

            for($i = 0; $i < count($subespecialidades) ; $i++)
            {
                $table = new Especialidad;
                $table->id   = $subespecialidades[$i]['id'];
                $table->nombre   = $subespecialidades[$i]['sub_especialidad'];

                $table->save();

            }
    }
}
