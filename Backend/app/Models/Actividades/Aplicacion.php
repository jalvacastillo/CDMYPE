<?php

namespace App\Models\Actividades;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aplicacion extends Model
{
    protected $table = 'actividad_aplicaciones';
    protected $fillable = [
        'actividad_id',
        'nombre',
        'sexo',
        'empresa',
        'correo',
        'telefono',
        'municipio',
        'departamento',
        'estado',
        'nota', 
    ];

    protected $appends = ['fecha', 'hora'];


    function getFechaAttribute()
    {
         return Carbon::parse($this->created_at)->format('m/d/Y');
    }

    function getHoraAttribute()
    {
         return Carbon::parse($this->created_at)->format('h:i:s a');
    }

    public function actividad(){
        return $this->belongsTo('App\Models\Actividades\Actividad', 'actividad_id');
    }

}