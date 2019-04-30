<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

    protected $table = 'empresa_notas';
    protected $fillable = array(
        'empresa_id',
        'descripcion',
        'evaluacion',
    );


    public function empresa() 
    {
        return $this->belongsTo('App\Models\Empresas\Empresa');
    }
}