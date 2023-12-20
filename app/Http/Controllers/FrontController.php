<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\AutoMail;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function post_mail(Request $request)
    {

        Mail::send(new ContactMail($request));
        Mail::send(new AutoMail($request));


        $request->session()->regenerateToken();

        return response(
            [
                'csrf_token' => $request->session()->token(),
            ],
        );
    }
}
