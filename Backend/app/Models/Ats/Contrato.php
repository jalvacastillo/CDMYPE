<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {
    
    protected $table = 'at_contratos';
    protected $fillable = [
        'at_id',
        'duracion',
        'tipo_duracion',
        'inicio',
        'fin',
        'pago',
        'aporte',
        'lugar_firma'
    ];


        public function getPagoCdmypeAttribute(){
            if($this->aporte)
                return ($this->pago * ($this->aporte) / 100);
            return $this->pago;
        }

        public function getPagoEmpresarioAttribute(){
            return $this->pago - $this->getPagoCdmypeAttribute();
        }

        public function getVencidaAttribute(){
            $hoy = strtotime(date("d-m-Y", time()));
            $vencimiento = strtotime( $this->attributes['fecha_final']);
            return ($hoy > $vencimiento);
        }


    public function at()
    {
        return $this->belongsTo('App\Models\Ats\At','at_id');
    }
    public function ampliacion(){
        return $this->hasOne('App\Models\Ats\Ampliacion', 'at_id');
    }


}
