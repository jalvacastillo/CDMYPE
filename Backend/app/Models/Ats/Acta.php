<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;

class Acta extends Model {

    protected $table = 'at_actas';
    public $errores;
    protected $fillable = [
        'at_id',
        'fecha',
        'tipo'
    ];


    public function termino() 
    {
        return $this->belongsTo('App\Models\Termino','termino_id');
    }
        
}