<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresario extends Model {

    use SoftDeletes;
    protected $table = 'empresarios';
    protected $fillable = array(
        'nombre',
        'dui',
        'nit',
        'sexo',
        'edad',
        'telefono',
        'celular',
        'direccion',
        'municipio',
        'departamento',
        'correo',
        'usuario_id'
    );

    public $appends = ['empresa'];
    
    public function getEmpresaAttribute(){
        return $this->empresas()->first() ? $this->empresas()->first()->empresa->nombre : null;
    }

    public function empresas() 
    {
        return $this->hasMany('App\Models\Empresas\EmpresaEmpresario','empresario_id');
    }

    public function asistencias() 
    {
        return $this->hasMany('App\Models\Asistencia','empresario_id');
    }

    public function eventos(){
        return $this->hasMany('App\Models\EventoEmpresarios', 'empresario_id');
    }

    
}