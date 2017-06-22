<?php

namespace App\Models\At;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;

class Acta extends Model {

    use SoftDeletes;

    protected $table = 'at_actas';
    public $errores;
    protected $fillable = [
        'termino_id',
        'fecha',
        'tipo'
    ];


    /* Relaciones */

        public function termino() 
        {
            return $this->belongsTo('App\Models\Termino','termino_id');
        }
        
}