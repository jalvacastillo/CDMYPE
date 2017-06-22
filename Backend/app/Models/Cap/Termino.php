<?php

namespace App\Models\Cap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Termino extends Model {

    use SoftDeletes;
    protected $table = 'cap_terminos';
    protected $fillable = [
        'encabezado',
        'tema',
        'categoria',
        'descripcion',
        'obj_general',
        'obj_especifico',
        'productos',
        'lugar',
        'fecha',
        'fecha_lim',
        'hora_ini',
        'hora_fin',
        'nota',
        'estado',
        'especialidad_id',
        'usuario_id',
        'informe'
    ];

    protected $appends = ['especialidad', 'asesor', 'consultor'];
        

    public function getEspecialidadAttribute(){
        return $this->especialidad()->pluck('nombre')->first();
    }

    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }

    public function getConsultorAttribute(){
        $consultor = $this->consultor()->first();
        if ($consultor) {
            return $consultor->consultor;
        }
    }

        public function asesor()
        {
            return $this->belongsTo('App\User');
        }

        public function especialidad()
        {
            return $this->belongsTo('App\Models\Especialidad');
        }

        public function consultor()
        {

            return $this->hasOne('App\Models\Cap\Consultor','termino_id')->where('estado', '=', 'Seleccionado');
        }

        public function contrato(){
            return $this->hasOne('App\Models\Cap\Contrato', 'termino_id');
        }

        public function asistencia(){
            return $this->hasOne('App\Models\Cap\Asistencia', 'termino_id');
        }

        public function envios(){
            return $this->hasMany('App\Models\Cap\CapacitacionEnvios', 'capacitacion_id');
        }


}
