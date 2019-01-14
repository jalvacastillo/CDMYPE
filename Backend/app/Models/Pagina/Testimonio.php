<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonio extends Model
{
    use SoftDeletes;
    protected $table = 'testimonios';
    protected $fillable = [
        'cliente_id',
        'descripcion',
        'asesor_id',
        'cdmype_id'
    ];

    protected $appends = ['asesor', 'propietario', 'logo'];

    public function getPropietarioAttribute(){
        $d = $this->cliente()->first();
        return $d->empresario;
    }

    public function getLogoAttribute(){
        return $this->cliente()->pluck('logo')->first();
    }
    
    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }

    public function cliente(){
        return $this->belongsTo('App\Models\Empresas\Empresa', 'cliente_id');
    }

    public function asesor(){
        return $this->belongsTo('App\User', 'asesor_id');
    }
}
