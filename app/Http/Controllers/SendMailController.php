<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        Mail::send('emails.send', ['name' => $name, 'email' => $email, 'phone' => $phone, 'mensaje' => $message], function ($m)
        {
            $m->from('nonreplydeveloper@gmail.com', 'Learning Center & Institute');
            $m->to('manuel.ricardo.samudio@gmail.com')->subject('Contacto Web');

        });

        return redirect('/');
    }
}
