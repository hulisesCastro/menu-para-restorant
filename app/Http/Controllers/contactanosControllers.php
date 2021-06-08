<?php

namespace App\Http\Controllers;
use App\Mail\contactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\storecontacto;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class contactanosControllers extends Controller
{
    public function index(){

        return view('contactanos.index');
    }

public function store(storecontacto $request){
    $correo  = new  contactanosMailable($request->all());

    Mail::to('hugo_castro@gmail.com')->send($correo);

    return redirect()->route('contactanos.index')->with('info', 'mensaje enviado');
}

}
