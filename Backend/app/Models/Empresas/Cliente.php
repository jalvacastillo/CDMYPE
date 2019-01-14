<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model {

    use SoftDeletes;
    protected $table = 'clientes';
    protected $fillable = [
        'empresario_id',
        'empresa_id',
        'tipo',
        'procedencia',
        'logo',
        'catalogo',
        'url_facebook',
        'url_web'
    ];

    protected $appends = ['empresa', 'empresario', 'sector', 'municipio', 'tamano'];


    public function getEmpresaAttribute(){
        return $this->empresa()->pluck('nombre')->first();
    }

    public function getSectorAttribute(){
        return $this->empresa()->pluck('sector')->first();
    }

    public function getMunicipioAttribute(){
        return $this->empresa()->pluck('municipio')->first();
    }

    public function getTamanoAttribute(){
        return $this->empresa()->pluck('tamano')->first();
    }

    public function getEmpresarioAttribute(){
        return $this->empresario()->pluck('nombre')->first();
    }


    public function productos()
    {
        return $this->hasMany('App\Models\Cliente\Producto','cliente_id');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Models\Cliente\Empresa','empresa_id');
    }

    public function empresario()
    {
        return $this->belongsTo('App\Models\Cliente\Empresario','empresario_id');
    }

    public function indicadores()
    {
        return $this->hasMany('App\Models\Cliente\Indicador');
    }

    public function ats()
    {
        return $this->hasMany('App\Models\At\Termino', 'cliente_id');
    }


}
