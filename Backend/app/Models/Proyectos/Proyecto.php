<?php

namespace App\Models\Proyectos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use SoftDeletes;
    protected $table = 'proyectos';
    protected $dates = ['finalizacion'];
    protected $fillable = [
        'nombre',
        'img',
        'descripcion',
        'contenido',
        'tipo',
        'categoria',
        'estado',
        'especialidad',
        'finalizacion',
        'duracion'
    ];

    protected $appends = ['total_aplicaciones'];

    public function getTotalAplicacionesAttribute(){
        return $this->aplicaciones()->count();
    }

    public function asesores(){
        return $this->hasMany('App\Models\Proyectos\Asesor');
    }

    public function empresas(){
        return $this->hasMany('App\Models\Proyectos\Empresa');
    }
    
    public function aplicaciones(){
        return $this->hasMany('App\Models\Proyectos\Aplicacion');
    }


}
