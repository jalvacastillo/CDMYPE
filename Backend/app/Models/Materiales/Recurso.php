<?php

namespace App\Models\Materiales;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model {

    protected $table = 'material_recursos';
    protected $fillable = [
        'nombre',
        'archivo',
        'material_id'
    ];

    public function material(){
        return $this->belongsTo('App\Models\Materiales\Material', 'material_id');
    }
}

