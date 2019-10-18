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
        'public',
        'categoria',
        'estado',
        'costo',
        'ingreso',
        'especialidad_id',
        'cupo',
        'fecha_inicio',
        'fecha_fin',
        'hora_inicio',
        'hora_fin'
    ];

    protected $dates = ['inicio', 'fin'];

    protected $appends = ['total_aplicaciones', 'especialidad'];


    public function getPublicAttribute($value){
            return $value == 1 ? true : false;
    }

    public function getEspecialidadAttribute()
    {
        return $this->especialidad()->pluck('nombre')->first();
    }

    public function especialidad()
    {
        return $this->belongsTo('App\Models\Subespecialidad', 'especialidad_id');
    }

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
