<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CapTdrConsultores extends Mailable
{
    use Queueable, SerializesModels;

    public $tdr;
    public $consultor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tdr, $consultor)
    {
        $this->tdr = $tdr;
        $this->consultor = $consultor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("TDR - CDMYPE Ilobasco")->view('mails.cap-tdr');
    }
}
