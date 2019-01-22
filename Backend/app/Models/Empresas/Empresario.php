<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresario extends Model {

    use SoftDeletes;
    protected $table = 'empresarios';
    protected $fillable = array(
        'nombre',
        'nit',
        'dui',
        'edad',
        'sexo',
        'correo',
        'telefono',
        'celular',
        'direccion',
        'municipio',
        'departamento'
    );
    

        public function empresas() 
        {
            return $this->hasMany('App\Models\Empresas\Empresa','empresario_id');
        }

        public function asistencias() 
        {
            return $this->hasMany('App\Models\Asistencia','empresario_id');
        }

        public function eventos(){
            return $this->hasMany('App\Models\EventoEmpresarios', 'empresario_id');
        }

    
}