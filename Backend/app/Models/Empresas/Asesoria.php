<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model {

    protected $table = 'empresa_asesorias';
    protected $fillable = [
        'accion_id',
        'descripcion',
        'fecha'
    ];

    public function accion()
    {
        return $this->belongsTo('App\Models\Empresas\Accion','accion_id');
    }




}
