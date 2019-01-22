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
        'nit', 'dui',
        'correo', 'tipo',
        'iva', 'sexo',
        'telefono', 'celular',
        'empresa', 'direccion',
        'municipio', 'departamento', 'usuario_id'
    ];

    protected $appends = ['avatar','especialidad'];
    
    
        public function getAtAttribute(){
            return $this->atConsultores()->where('estado','Seleccionado')->count();
        }

        public function getEspecialidadAttribute(){
            
            $especialidad = $this->especialidades()->first();

            if ($especialidad) {
                return $especialidad->especialidad;
            } else {
                return null;
            }
            
        }

        public function getCapAttribute(){
            return $this->capConsultores()->where('estado','Seleccionado')->count();
        }

        public function getPasoAttribute(){

            if($this->cap > 0 || $this->at > 0)
                return 3;
            elseif($this->especialidades != '[]')
                return 2;

            return 2;

        }

    /* Relaciones */

        public function getAvatarAttribute(){
            return $this->usuario()->pluck('avatar')->first();
        }

        public function capConsultores() 
        {
            return $this->hasMany('App\Models\Cap\Consultor', 'consultor_id');
        }

        public function ats() 
        {
            return $this->hasMany('App\Models\At\Consultor', 'consultor_id');
        }

        public function especialidades() 
        {
            return $this->hasMany('App\Models\Consultores\Especialidad', 'consultor_id');
        }

        public function usuario(){
            return $this->belongsTo('App\User', 'usuario_id');
        }

}