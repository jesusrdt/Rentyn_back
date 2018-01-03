<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Mail\LandingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('web.landing');
});

Route::post('/send/form/landing', function(Request $request) {

    $validator = Validator::make($request->all(), [
        'what'  => 'required',
        'where' => 'required',
        'when'  => 'required',
        'name'  => 'required',
        'phone' => 'required|max:9',
        'email' => 'required|email',
    ]);

    if ($validator->fails()) {
        return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
    }

    Mail::to('info@rentyn.com')->send(new LandingMail($request->all()));
        
    notify()->flash('Solicitud enviada', 'success', [
        'text' => 'En pocos minutos, sera contactado para darle solución para su solicitud',
    ]);

    return redirect('/');
});

