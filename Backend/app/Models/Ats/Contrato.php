<?php

namespace App\Models\Ats;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model {
    
    protected $table = 'at_contratos';
    protected $fillable = [
        'at_id',
        'duracion',
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

	/* RELACIÓN */

        public function terminos()
        {
            return $this->belongsTo('App\Models\At\Termino','attermino_id');
        }
        public function ampliacion(){
            return $this->hasOne('App\Models\At\Ampliacion', 'attermino_id');
        }


}
