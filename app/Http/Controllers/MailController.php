<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class MailController extends Controller
{
    public function sendEmail(){

        $details=[
            'title' => 'Informacion del contacto',
            'body' => 'Aqui se despleja informacion recolectada por el usuario'
        ];

        Mail::to("farmaciapoaki@gmail.com")->send(new ContactanosMailable($details));
        return "Correo Electronico ENVIADO";
    }
}
