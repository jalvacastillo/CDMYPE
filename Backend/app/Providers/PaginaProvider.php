<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Empresas\Empresa;    
use Illuminate\Support\Collection;

class PaginaProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*", function($view){
            
            $menu = [
                [ 
                    'nombre'   => 'Servicios', 'route'    => 'servicios',
                    'elementos' => [
                            ['nombre' => 'Asesorías', 'route'    => 'servicios'],
                            ['nombre' => 'Capacitaciones', 'route'    => 'servicios'],
                            ['nombre' => 'Asistencias Técnicas', 'route'    => 'servicios'],
                            ['nombre' => 'Vinculaciones', 'route'    => 'servicios'],
                            // ['nombre' => 'Proceso de Atención', 'route'    => 'servicios'],
                            // ['nombre' => 'Requisitos', 'route'    => 'servicios'],
                    ]
                ],
                [ 
                    'nombre'   => 'Nosotros', 'route'    => 'nosotros',
                    'elementos' => [
                            ['nombre' => 'Quienes somos', 'route'    => 'nosotros'],
                            ['nombre' => 'Asesores', 'route'    => 'nosotros'],
                            ['nombre' => 'Testimonios', 'route'    => 'nosotros'],
                    ]
                ],
                [ 
                    'nombre'   => 'Empresas', 'route'    => 'empresas',
                    'elementos' => [
                            ['nombre' => 'Directorio MYPE', 'route'    => 'empresas'],
                    ]
                ],
                [ 
                    'nombre'   => 'Academia', 'route'    => 'proyectos',
                    'elementos' => [
                            ['nombre' => 'Asesor Junior', 'route'    => 'proyectos'],
                            ['nombre' => 'Consultor', 'route'    => 'proyectos'],
                    ]
                ],
                [ 
                    'nombre'   => 'Actividades', 'route'    => 'actividades',
                    'elementos' => [
                            ['nombre' => 'Formación Empresarial', 'route'    => 'actividades'],
                            ['nombre' => 'Comercialización', 'route'    => 'actividades'],
                    ]
                ],
                [
                    'nombre'   => 'Noticias', 'route'    => 'noticias',
                    'elementos' => [],
                ],
                [ 
                    'nombre'   => 'Contactos', 'route'    => 'contactos',
                    'elementos' => [],
                ]
            ];

            $collection = Collection::make($menu);

            $view->with('menu', $collection);

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
