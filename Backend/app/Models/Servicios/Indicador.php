<?php

namespace App\Models\Servicios;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    protected $table = 'servicio_accion_indicadores';
    protected $fillable = [
        'accion_id',
        'indicador'
    ];

    public function accion(){
        return $this->belongsTo('App\Models\Servicios\Accion', 'accion_id');
    }

}