<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class EmpresaEmpresario extends Model {

    protected $table = 'empresa_empresarios';
    protected $fillable = [
        'empresario_id',
        'empresa_id',
        'tipo'
    ];


    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresas\Empresa','empresa_id');
    }

    public function empresario()
    {
        return $this->belongsTo('App\Models\Empresas\Empresario','empresario_id');
    }

}
