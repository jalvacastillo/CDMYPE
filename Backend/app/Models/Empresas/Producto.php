<?php

namespace App\Models\Empresas;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $table = 'empresa_productos';
    protected $fillable = [
        'empresa_id',
        'nombre',
        'img',
        'precio',
        'descripcion'
    ];


    public function cliente()
    {
        return $this->belongsTo('App\Models\Empresas\Empresa','empresa_id');
    }




}
