<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContacto;

class ContactoController extends Controller
{
    use ValidatesRequests;

    public function store(){

        $mensaje = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'Asunto' => 'required',
            'mensaje' => 'required|min:10'

        ]);

        Mail::to('farmaciapoaki@gmail.com')->send(new formularioContacto($mensaje));


        return view('contactar');


    }

}
