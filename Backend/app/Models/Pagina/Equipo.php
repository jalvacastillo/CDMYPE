<?php

namespace App\Models\Pagina;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';
    protected $fillable = [
        'nombre',
        'tipo',
        'categoria',
        'cargo',
        'titulo',
        'descripcion',
        'url_facebook',
        'url_twitter',
        'url_linkedin',
        'avatar',
        'web',
        'usuario_id'
    ];

    protected $appends = ['correo'];

    public function getCorreoAttribute(){
        return $this->usuario()->first()->email;
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'usuario_id');
    }

}
