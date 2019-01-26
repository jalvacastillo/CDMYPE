<?php

namespace App\Models\Diagnosticos;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = 'diagnostico_subcategorias';
    protected $fillable = [
        'nombre',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo('App\Models\Diagnosticos\Categoria', 'categoria_id');
    }

    public function preguntas(){
        return $this->hasMany('App\Models\Diagnosticos\Pregunta', 'subcategoria_id');
    }

}