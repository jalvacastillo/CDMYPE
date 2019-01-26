<?php

namespace App\Models\Actividades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{
    use SoftDeletes;
    protected $table = 'actividades';
    protected $fillable = [
        'nombre',
        'descripcion',
        'contenido',
        'tipo',
        'categoria',
        'estado',
        'especialidad',
    ];

    protected $appends = ['total_aplicaciones'];

    public function getTotalAplicacionesAttribute(){
        return $this->aplicaciones()->count();
    }

    public function asesores(){
        return $this->hasMany('App\Models\Proyectos\Asesor');
    }
    
    public function aplicaciones(){
        return $this->hasMany('App\Models\Proyectos\Aplicacion');
    }


}
