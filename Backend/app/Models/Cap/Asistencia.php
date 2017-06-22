<?php

namespace App\Models\Cap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asistencia extends Model {

    use SoftDeletes;    
    protected $table = 'cap_asistencias';
    public $errores;
    protected $fillable = [
        'termino_id',
        'cliente_id',
        'invitado',
        'asistencia'
    ];
    
        
    /* RELACIÓN */

        public function empresario() 
        {
            return $this->belongsTo('App\Models\Cliente\Empresario','empresario_id');
        }

        public function captermino() 
        {
            return $this->belongsTo('App\Models\Cap\Termino','captermino_id');
        }

}