<?php

namespace App\Models\Salidas;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model {

    protected $fillable = [
        'fecha',
        'hora_salida',
        'hora_regreso',
        'lugar',
        'justificacion',
        'objetivo',
        'encargado_id',
        'estado',
        'observacion'
    ];
    protected $appends = ['encargado'];

    public function getEncargadoAttribute(){
        return $this->encargado()->pluck('nombre')->first();
    }

    public function encargado()
    {
        return $this->belongsTo('App\Models\Pagina\Equipo', 'encargado_id');
    }

    public function asesores(){
        return $this->hasMany('App\Models\Salidas\Asesor', 'salida_id');
    }
}

