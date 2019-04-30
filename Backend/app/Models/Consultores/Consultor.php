<?php

namespace App\Models\Consultores;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultor extends Model {

    use SoftDeletes;
    protected $table = 'consultores';
    public $errores;
    protected $fillable = [
        'nombre',
        'nit',
        'dui',
        'correo',
        'tipo',
        'iva',
        'sexo',
        'telefono',
        'celular',
        'empresa',
        'direccion',
        'municipio',
        'departamento',
        'usuario_id'
    ];

    protected $appends = ['avatar','especialidad', 'evaluacion'];
    
    
    public function getEvaluacionAttribute(){
        $notas = $this->notas()->get();
        
        if ($notas->count() > 0)
            $nota =  $notas->sum('evaluacion') / $notas->count();
        else
            $nota = null;
        
        return $nota;
    }

    public function getAtAttribute(){
        return $this->caps()->where('seleccionado', true)->count();
    }

    public function getCapAttribute(){
        return $this->caps()->where('seleccionado', true)->count();
    }

    public function getEspecialidadAttribute(){
        
        $especialidad = $this->especialidades()->first();

        if ($especialidad) {
            return $especialidad->especialidad;
        } else {
            return null;
        }
        
    }

    /* Relaciones */

        public function getAvatarAttribute(){
            return $this->usuario()->pluck('avatar')->first();
        }

        public function caps() 
        {
            return $this->hasMany('App\Models\Caps\Consultor', 'consultor_id');
        }

        public function ats() 
        {
            return $this->hasMany('App\Models\Ats\Consultor', 'consultor_id');
        }

        public function notas() 
        {
            return $this->hasMany('App\Models\Consultores\Nota', 'consultor_id');
        }

        public function especialidades() 
        {
            return $this->hasMany('App\Models\Consultores\Especialidad', 'consultor_id');
        }

        public function usuario(){
            return $this->belongsTo('App\User', 'usuario_id');
        }

}