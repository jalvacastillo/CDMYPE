<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo_registro',
        'tipo',
        'avatar',
        'activo'
    ];

    protected $appends = ['cargo'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getCargoAttribute(){
        return $this->asesor()->first()->cargo;
    }

    public function asesor(){
        return $this->hasOne('App\Models\Pagina\Equipo', 'usuario_id');
    }


    public function aplicaciones(){
        return $this->hasMany('App\Models\Proyectos\Aplicacion', 'usuario_id')->with('proyecto');
    }

    
}
