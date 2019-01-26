<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $table = 'testimonios';
    protected $fillable = [
        'empresa_id',
        'descripcion'
    ];

    protected $appends = ['propietario', 'logo'];

    public function getPropietarioAttribute(){
        return $this->empresa()->first()->nombre;
    }

    public function getLogoAttribute(){
        return $this->empresa()->first()->logo;
    }

    public function empresa(){
        return $this->belongsTo('App\Models\Empresas\Empresa', 'empresa_id');
    }

}
