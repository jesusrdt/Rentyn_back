<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Mail\Contactmail;

class ContactController extends Controller
{
    public function index()
    {

    }

    
    public function create()
    {
        //
    }

   /* public function store(Request $request)//Jesus Villasmil
    {
        $input = $request->all();
        $this->validate(request(), [
            'search' => 'required|min:2|max:75',
            'rangeA' => 'required',
            'rangeB' => 'required',
            'dir' => 'required',
            'txtName'  => 'required',
            'txtTlf' => 'required|numeric',
            'txtEmail' => 'required|email|max:255'
        ]);
        $destino=(env('MAIL_FROM_ADDRESS'));
        Mail::to($destino)->send(new Contactmail($input));
        return Redirect::to('/')->with('message', 'Gracias');
    }*/
    public function store(ContactFormRequest $request)
    {
        $input = $request->all();
        $destino=(env('MAIL_FROM_ADDRESS'));
        Mail::to($destino)->send(new Contactmail($input));
        return response()->json([$response], 200);
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
