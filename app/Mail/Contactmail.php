<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;

    public $que,$cuando,$cuando2,$donde,$correo, $nombre, $telefono;
    public function __construct($input)
    {

        foreach ($input as $key => $value) {
                $this->que = $input['que'];
                $this->cuando = $input['cuando'];
                $this->cuando2 = $input['cuando2'];
                $this->donde = $input['donde'];
                $this->nombre = $input['nombre'];
                $this->telefono = $input['telefono'];
                $this->correo = $input['correo'];      

      }
        
        
    }

  
    public function build()
    {
        $de=(env('MAIL_FROM_ADDRESS'));
        return $this->view('v1.contact.enviomail')
            ->from($de)
            ->subject('Solicitud ');
    }
}
