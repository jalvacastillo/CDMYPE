<?php

namespace App\Models\Salidas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salida extends Model {

    use SoftDeletes;
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
        return $this->user()->pluck('name')->first();
    }


     public function user()
     {
        return $this->belongsTo('App\User', 'encargado_id');
     }

     public function asesores(){
        return $this->hasMany('App\Models\Salidas\Asesor');
     }
}

