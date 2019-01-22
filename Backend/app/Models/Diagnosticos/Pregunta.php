<?php

namespace App\Models\Diagnosticos;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'diagnostico_preguntas';
    protected $fillable = [
        'pregunta',
        'subcategoria_id',
        'diagnostico_id'
    ];

    protected $appends = ['categoria', 'subcategoria'];


    public function getCategoriaAttribute()
    {
        return $this->subcategoria()->first()->categoria()->pluck('nombre')->first();
    }

    public function getSubcategoriaAttribute()
    {
        return $this->subcategoria()->pluck('nombre')->first();
    }

    public function diagnostico(){
        return $this->belongsTo('App\Models\Diagnosticos\Diagnostico', 'diagnostico_id');
    }

    public function valores(){
        return $this->hasMany('App\Models\Diagnosticos\Valor');
    }

    public function subcategoria(){
        return $this->belongsTo('App\Models\Diagnosticos\SubCategoria','subcategoria_id');
    }

}