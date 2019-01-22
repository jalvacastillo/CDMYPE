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
        'img',
        'categoria',
        'tipo',
        'asesor_id',
        'views',
        'activo'
    ];

    protected $appends = ['asesor', 'avatar'];

    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }

    public function getAvatarAttribute(){
        return $this->asesor()->pluck('avatar')->first();
    }

    public function asesor(){
        return $this->belongsTo('App\User', 'asesor_id');
    }
}
