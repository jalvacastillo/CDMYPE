<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model {

    use SoftDeletes;
    protected $table = 'cliente_productos';
    protected $fillable = [
        'cliente_id',
        'nombre',
        'precio',
        'descripcion'
    ];


    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente\Cliente','cliente_id');
    }




}
