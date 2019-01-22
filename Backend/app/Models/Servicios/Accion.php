<?php

namespace App\Models\Servicios;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table = 'servicio_acciones';
    protected $fillable = [
        'nombre',
        'descripcion',
        'servicio_id'
    ];

    public function indicadores(){
        return $this->hasMany('App\Models\Servicios\Indicador');
    }

    public function servicio(){
        return $this->belongsTo('App\Models\Servicios\Servicio', 'servicio_id');
    }

}