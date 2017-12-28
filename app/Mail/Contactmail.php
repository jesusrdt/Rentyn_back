<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;

<<<<<<< HEAD
    public $que,$cuando,$cuando2,$donde,$correo, $nombre, $telefono;
    public function __construct($input)
    {

        foreach ($input as $key => $value) {
                $this->que = $input['search'];
                $this->cuando = $input['rangeA'];
                $this->cuando2 = $input['rangeB'];
                $this->donde = $input['dir'];
                $this->nombre = $input['txtName'];
                $this->telefono = $input['txtTlf'];
                $this->correo = $input['txtEmail'];     

      }
        
        
=======
  

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
>>>>>>> PedroLeal
    }

  
    public function build()
    {
        $de=(env('MAIL_FROM_ADDRESS'));
<<<<<<< HEAD
        return $this->view('v1.contact.enviomail')
            ->from($de)
            ->subject('Solicitud ');
=======
        //->with('que',$this->que, 'cuando',$this->cuando)
        return $this->view('v1.contact.enviomail')
            ->from($de)
            ->subject('prueba correo');
>>>>>>> PedroLeal
    }
}
