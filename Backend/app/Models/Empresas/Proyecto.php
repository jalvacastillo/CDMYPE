<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model {

    protected $table = 'empresa_proyectos';
    protected $fillable = array(
        'nombre',
        'descripcion',
        'asesor_id',
        'empresa_id',
    );
    
    public function empresa(){
        return $this->belongsTo('App\Models\Empresas\Empresa', 'empresa_id');
    }
    
    public function asesor(){
        return $this->belongsTo('App\User', 'asesor_id');
    }

    public function acciones(){
        return $this->hasMany('App\Models\Empresas\Accion', 'proyecto_id');
    }


}