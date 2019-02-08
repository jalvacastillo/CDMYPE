<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AplicacionActividad extends Mailable
{
    use Queueable, SerializesModels;

    public $aplicacion;
    public $actividad;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($aplicacion)
    {
        $this->aplicacion = $aplicacion;
        $this->actividad = $aplicacion->actividad;
        $this->usuario = $aplicacion->usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.aplicacion-actividad');
    }
}
