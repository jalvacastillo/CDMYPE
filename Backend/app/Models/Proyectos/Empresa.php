<?php

namespace App\Models\Proyectos;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'proyecto_empresas';
    protected $fillable = [
        'empresa_id',
        'proyecto_id'
    ];

    protected $appends = ['nombre', 'sector', 'logo'];

    public function getNombreAttribute(){
        return $this->empresa()->pluck('nombre')->first();
    }

    public function getLogoAttribute(){
        return $this->empresa()->pluck('logo')->first();
    }

    public function getSectorAttribute(){
        return $this->empresa()->pluck('sector')->first();
    }

    public function empresa(){
        return $this->belongsTo('App\Models\Empresas\Empresa', 'empresa_id');
    }

}