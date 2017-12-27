<?php


namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use Exception;
use Session;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactmail;

class ContactController extends Controller
{
    public function index()
    {


       return View('v1.contact.contactform');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        
        $this->validate(request(), [
            'que' => 'required|min:2|max:75',
            'cuando' => 'required',
            'cuando2' => 'required',
            'donde' => 'required',
            'nombre'  => 'required',
            'telefono' => 'required|numeric',
            'correo' => 'required|email|max:255'
        ]);


        $destino=(env('MAIL_FROM_ADDRESS'));
        Mail::to($destino)->send(new Contactmail($input));
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
