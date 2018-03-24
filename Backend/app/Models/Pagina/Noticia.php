<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use SoftDeletes;
    protected $table = 'noticias';
    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'contenido',
        'recurso',
        'tipo',
        'categoria',
        'asesor_id',
        'cdmype_id'
    ];

    protected $appends = ['asesor'];

    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }

    public function asesor(){
        return $this->belongsTo('App\User', 'asesor_id');
    }
}
