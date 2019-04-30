<?php

namespace App\Models\Caps;

use Illuminate\Database\Eloquent\Model;

class Cap extends Model {

    protected $table = 'caps';
    protected $fillable = [
        'encabezado',
        'tema',
        'categoria',
        'descripcion',
        'obj_general',
        'obj_especifico',
        'productos',
        'lugar',
        'fecha_limite',
        'fecha_ini',
        'fecha_fin',
        'nota',
        'estado',
        'especialidad_id',
        'usuario_id',
        'informe'
    ];

    protected $appends = ['especialidad', 'asesor'];
        

    public function getEspecialidadAttribute(){
        return $this->especialidad()->pluck('nombre')->first();
    }

    public function getAsesorAttribute(){
        return $this->asesor()->pluck('name')->first();
    }

    public function asesor()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }

    public function especialidad()
    {
        return $this->belongsTo('App\Models\Subespecialidad');
    }

    public function ofertantes()
    {
        return $this->hasMany('App\Models\Caps\Consultor','cap_id')->where('doc_oferta', "!=", "");
    }

    public function consultor()
    {

        return $this->hasOne('App\Models\Caps\Consultor','cap_id')->where('seleccionado', true);
    }

    public function contrato(){
        return $this->hasOne('App\Models\Caps\Contrato', 'cap_id');
    }

    public function asistencia(){
        return $this->hasOne('App\Models\Caps\Asistencia', 'cap_id');
    }

    public function envios(){
        return $this->hasMany('App\Models\Caps\CapacitacionEnvios', 'capacitacion_id');
    }


}
