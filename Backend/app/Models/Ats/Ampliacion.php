<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;

class Ampliacion extends Model {

    protected $table = 'at_ampliaciones';
    public $errores;
    protected $fillable = array(
        'fecha',
        'tiempo_ampliacion',
        'periodo',
        'razonamiento',
        'at_id',
        'solicitante'
    );

    protected $periodo = ['day', 'week', 'month'];
    


    public function fechaRecibo($fecha){
        // 'return '
        $fecha = Carbon::parse($fecha);
        switch ($this->attributes['periodo']) {
            case 'Dias':
                $fecha = $fecha->addDays($this->attributes['tiempo_ampliacion']);
                break;
            case 'Semanas':
                $fecha = $fecha->addWeek($this->attributes['tiempo_ampliacion']);
                break;
            case 'Meses':
                $fecha = $fecha->addMonth($this->attributes['tiempo_ampliacion']);
                break;
        }
        return $fecha->format('Y/m/d');
    }

    public function at()
    {
        return $this->belongsTo('App\Models\Ats\At','at_id');
    }

}