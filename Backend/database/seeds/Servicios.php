<?php

use Illuminate\Database\Seeder;
use App\Models\Servicios\Servicio;
use App\Models\Servicios\Accion;
use App\Models\Servicios\Indicador;
use App\Models\Servicios\Asesor;

class Servicios extends Seeder
{

    public function run()
    {

        $faker = Faker\Factory::create();

        $table = new Servicio;
        $table->nombre  = 'Asesoría Empresarial';
        $table->descripcion = 'Apoyo y acompañamiento para la correcta administración y gestión de tu empresa.';
        $table->tipo    = 'Asesoria';
        $table->categoria    = 'Empresarial';
        $table->slug    = 'asesoria-empresarial';
        $table->img     = 'empresarial.jpg';
        $table->save();
        $table = new Servicio;
        $table->nombre  = 'Asesoría Financiera';
        $table->descripcion = 'Ayuda para la adquisición de créditos y prestamos, así como la asesoría en el manejo de tus finanzas.';
        $table->tipo    = 'Asesoria';
        $table->categoria    = 'Financiera';
        $table->slug    = 'asesoria-financiera';
        $table->img     = 'financiera.jpg';
        $table->save();
        $table = new Servicio;
        $table->nombre  = 'Asesoría TIC';
        $table->descripcion = 'Ayudamos a aplicar la tecnología en su empresa, le capacitamos y asesoramos en todo lo relacionado con las TIC´s.';
        $table->tipo    = 'Asesoria';
        $table->categoria    = 'TIC';
        $table->slug    = 'asesoria-tic';
        $table->img     = 'tic.jpg';
        $table->save();

            $table = new Accion;
            $table->nombre  = 'Diagnostico TIC';
            $table->descripcion = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus quae qui, reiciendis, corrupti quo iusto consectetur? Magni placeat nemo suscipit nobis quam quaerat!';
            $table->servicio_id = 3;
            $table->save();
                $table = new Indicador;
                $table->accion_id   = 1;
                $table->indicador   = 'Ventas';
                $table->save();
                $table = new Indicador;
                $table->accion_id   = 1;
                $table->indicador   = 'Costos';
                $table->save();
                $table = new Indicador;
                $table->accion_id   = 1;
                $table->indicador   = 'Administración';
                $table->save();
            $table = new Accion;
            $table->nombre  = 'Marketing Digital TIC';
            $table->descripcion = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus quae qui, reiciendis, corrupti quo iusto consectetur? Magni placeat nemo suscipit nobis quam quaerat!';
            $table->servicio_id = 3;
            $table->save();
            $table = new Accion;
            $table->nombre  = 'Uso de herramientas ofimáticas';
            $table->descripcion = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem delectus quae qui, reiciendis, corrupti quo iusto consectetur? Magni placeat nemo suscipit nobis quam quaerat!';
            $table->servicio_id = 3;
            $table->save();

            $table = new Asesor;
            $table->asesor_id  = 2;
            $table->servicio_id = 3;
            $table->save();

        $table = new Servicio;
        $table->nombre  = 'EFE';
        $table->descripcion = 'Contamos con personal especializado para apoyar las empresas que son lideradas por mujeres.';
        $table->tipo    = 'Asesoria';
        $table->categoria    = 'EFE';
        $table->slug    = 'asesoria-efe';
        $table->img     = 'efe.jpg';
        $table->save();
        $table = new Servicio;
        $table->nombre  = 'Capacitaciones';
        $table->descripcion = 'Brindamos formación en diferentes áreas de manera grupal para una o varias empresas en temas empresariales.';
        $table->tipo    = 'Otro';
        $table->categoria    = 'Otro';
        $table->slug    = 'capacitaciones';
        $table->img     = 'capacitaciones.jpg';
        $table->save();
            
            $table = new Asesor;
            $table->asesor_id  = 2;
            $table->servicio_id = 5;
            $table->save();

            $table = new Asesor;
            $table->asesor_id  = 1;
            $table->servicio_id = 5;
            $table->save();

        $table = new Servicio;
        $table->nombre  = 'Asistencia Técnica';
        $table->descripcion = 'Brindamos formación en diferentes áreas de manera grupal para una o varias empresas en temas empresariales.';
        $table->tipo    = 'Otro';
        $table->categoria    = 'Otro';
        $table->slug    = 'asistencia-tecnica';
        $table->img     = 'at.jpg';
        $table->save();
        $table = new Servicio;
        $table->nombre  = 'Vinculación';
        $table->descripcion = 'Facilitamos a las empresas el acercamiento a programas y/o servicios de otras instituciones, también a crear alianzas comerciales con otras empresas.';
        $table->tipo    = 'Otro';
        $table->categoria    = 'Otro';
        $table->slug    = 'vinculacion';
        $table->img     = 'vinculaciones.jpg';
        $table->save();

    }
}
