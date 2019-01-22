<?php

namespace App\Models\Alumnos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use SoftDeletes;
    protected $table = 'alumnos';
    protected $fillable = [
        'nombre',
        'carrera',
        'correo',
        'direccion',
        'descripcion',
        'municipio',
        'telefono',
        'url_facebook',
        'url_twitter',
        'url_linkedin',
        'web',
        'usuario_id'
    ];

    protected $appends = ['avatar'];

    public function getAvatarAttribute(){
        return $this->usuario()->pluck('avatar')->first();
    }

    public function usuario(){
        return $this->belongsTo('App\User', 'usuario_id');
    }

}
