<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index(){
        return view('index');
    }

    public function post_mail(Request $request){

        // Mail::send(new Testmail($request));
        Mail::to('test@example.com')
    ->send(new TestMail($request));

        $request->session()->regenerateToken();

        return response(
            [
                'csrf_token' => $request->session()->token(),
            ],
        );
    }
}
