<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{

    public function mail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        Mail::send('emails.send', ['name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $message], function ($message)
        {

            $message->from('nonreplydeveloper@gmail.com', 'NonReplayDeveloper');

            $message->to('manuxscorpiuz12@gmail.com');

        });

        return redirect('/');
    }

}
