<?php

namespace App\Models\Caps;

use Illuminate\Database\Eloquent\Model;

class Consultor extends Model {

    protected $table = 'cap_consultores';
    protected $fillable = [
        'cap_id',
        'consultor_id',
        'seleccionado',
        'fecha_oferta',
        'fecha_seleccion',
        'doc_oferta',
    ];
    
    protected $appends = ['nombre', 'tema', 'especialidad'];
        
    public function getNombreAttribute(){
        return $this->consultor()->pluck('nombre')->first();
    }

    public function getTemaAttribute(){
        return $this->cap()->pluck('tema')->first();
    }

    public function getEspecialidadAttribute(){
        return $this->consultor()->first()->especialidad;
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