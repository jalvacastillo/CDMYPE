<?php

namespace App\Models\Diagnosticos;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $table = 'diagnostico_valores';
    protected $fillable = [
        'nombre',
        'pregunta_id'
    ];

    public function pregunta(){
        return $this->belongsTo('App\Models\Diagnosticos\Pregunta', 'pregunta_id');
    }

}