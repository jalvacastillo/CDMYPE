<?php

namespace App\Models\Diagnosticos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'diagnostico_categorias';
    protected $fillable = [
        'nombre',
        'diagnostico_id'
    ];

    public function subcategorias(){
        return $this->hasMany('App\Models\Diagnosticos\Subcategoria');
    }

}