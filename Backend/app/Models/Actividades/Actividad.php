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
        'img',
        'descripcion',
        'contenido',
        'tipo',
        'categoria',
        'estado',
        'especialidad',
        'cupo',
        'inicio',
        'fin'
    ];

    protected $dates = ['inicio', 'fin'];

    protected $appends = ['total_aplicaciones'];

    public function getTotalAplicacionesAttribute(){
        return $this->aplicaciones()->count();
    }

    public function asesores(){
        return $this->hasMany('App\Models\Actividades\Asesor');
    }
    
    public function aplicaciones(){
        return $this->hasMany('App\Models\Actividades\Aplicacion');
    }


}
