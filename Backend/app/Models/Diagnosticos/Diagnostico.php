<?php

namespace App\Models\Diagnosticos;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';
    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion'
    ];

    public function preguntas(){
        return $this->hasMany('App\Models\Diagnosticos\Pregunta');
    }

}