<?php

namespace App\Models\Caps;

use Illuminate\Database\Eloquent\Model;

class Consultor extends Model {

    protected $table = 'cap_consultores';
    protected $fillable = [
        'cap_id',
        'consultor_id',
        'fecha_oferta',
        'fecha_seleccion',
        'estado',
        'doc_oferta',
        'evaluacion'
    ];
    
    protected $appends = ['consultor', 'tema', 'especialidad'];
        
    public function getConsultorAttribute(){
        return $this->consultor()->pluck('nombre')->first();
    }

    public function getTemaAttribute(){
        return $this->cap()->pluck('tema')->first();
    }

    public function getEspecialidadAttribute(){
        return $this->cap()->first()->especialidad;
    }
  
    public function capContratos() 
    {
        return $this->hasmany('App\Models\Caps\Contrato','capconsultor_id');
    }


    public function cap() 
    {
        return $this->belongsTo('App\Models\Caps\Cap','cap_id');
    }

    public function consultor() 
    {
        return $this->belongsTo('App\Models\Consultores\Consultor');
    }

}