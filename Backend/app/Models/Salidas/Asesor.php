<?php

namespace App\Models\Salidas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asesor extends Model {

    /* Atributos */
    use SoftDeletes;
    protected $table = 'salida_asesores';

    protected $fillable = [
        'salida_id', 'asesor_id'
    ];
    
    protected $appends = ['asesor'];
    

    /* Relaciones */

        public function getAsesorAttribute(){
            return $this->asesor()->pluck('name')->first();
        }

        public function asesor(){
            return $this->belongsTo('App\User', 'asesor_id');
        }
}