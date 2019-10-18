<?php

namespace App\Models\Vinculaciones;

use Illuminate\Database\Eloquent\Model;

class Vinculacion extends Model {

    protected $table = 'vinculacion';
    protected $fillable = [
        'tema',
        'descripcion',
        'empresa_id',
        'asesor_id',
        'institucion',
        'tipo',
        'img',
        'fecha',
        'monto'
    ];
    
    public function empresa(){
        return $this->belongsTo('App\Models\Empresas\Empresa', 'empresa_id');
    }
    public function equipo(){
        return $this->belongsTo('App\Models\Pagina\Equipo', 'asesor_id');
    }

}