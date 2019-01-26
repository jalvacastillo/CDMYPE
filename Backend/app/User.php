<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo_registro',
        'tipo',
        'avatar',
        'activo'
    ];

    protected $appends = ['detalle'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getDetalleAttribute(){
        if ($this->tipo == 'Consultor') {
            return $this->consultor()->first();
        }
        if ($this->tipo == 'Estudiante') {
            return $this->alumno()->first();
        }
        if ($this->tipo == 'Empresario') {
            return $this->empresario()->first();
        }
        return null;
    }

    public function alumno(){
        return $this->hasMany('App\Models\Alumnos\Alumno', 'usuario_id');
    }

    public function consultor(){
        return $this->hasMany('App\Models\Consultores\Consultor', 'usuario_id');
    }

    public function empresario(){
        return $this->hasMany('App\Models\Empresas\Empresario', 'usuario_id');
    }

    public function aplicaciones(){
        return $this->hasMany('App\Models\Proyectos\Aplicacion', 'usuario_id')->with('proyecto');
    }

    
}
