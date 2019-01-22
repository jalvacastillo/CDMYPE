<?php

namespace App\Models\Consultores;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialidad extends Model {

    use SoftDeletes;
    protected $table = 'consultor_especialidades';
    protected $fillable = array(
        'consultor_id',
        'especialidad_id'
    );

     protected $appends = ['consultor', 'especialidad'];
    
        public function getConsultorAttribute(){
            return $this->consultor()->pluck('nombre')->first();
        }

        public function getEspecialidadAttribute(){
            return $this->especialidad()->pluck('nombre')->first();
        }

        public function consultor() 
        {
            return $this->belongsTo('App\Models\Consultores\Consultor');
        }


        public function especialidad()
        {
            return $this->belongsTo('App\Models\Especialidad');
        }
}