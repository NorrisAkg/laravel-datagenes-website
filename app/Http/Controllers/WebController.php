<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function __construct()
    {

    }

    public function sendMessage(Request $request)
    {
        // dd($request->get('lastname'));
        Mail::to('datagenesafrica@gmail.com')->send(new ContactMail(
            firstname: $request->firstname,
            lastname: $request->lastname,
            email: $request->email,
            telephone: $request->telephone,
            object: $request->subject,
            message: $request->message,
        ));

        return redirect()->route('contact')->with('success','');
    }
}
