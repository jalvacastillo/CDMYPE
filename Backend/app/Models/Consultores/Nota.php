<?php

namespace App\Models\Consultores;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

    protected $table = 'consultor_notas';
    protected $fillable = array(
        'consultor_id',
        'descripcion',
        'evaluacion',
    );


    public function consultor() 
    {
        return $this->belongsTo('App\Models\Consultores\Consultor');
    }
}