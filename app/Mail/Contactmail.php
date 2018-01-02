<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;

  

  public $que,$cuando,$donde,$correo, $nombre, $telefono;
    public function __construct($que,$cuando,$donde,$nombre, $telefono, $correo
  )
    {
        $this->que=$que;
        $this->cuando=$cuando;
        $this->donde=$donde;
        $this->nombre=$nombre;
        $this->telefono=$telefono;
        $this->correo=$correo;
    }

  
    public function build()
    {
        $de=(env('MAIL_FROM_ADDRESS'));
        //->with('que',$this->que, 'cuando',$this->cuando)
        return $this->view('v1.contact.enviomail')
            ->from($de)
            ->subject('prueba correo');
    }
}
