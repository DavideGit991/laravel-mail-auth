<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDefault;

use Illuminate\Http\Request;

class AuthMailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('pages.mail.edit-mail');
    }

    public function send(Request $req)
    {

        $data = $req->validate([
            'testo-mail'=>'required|string|min:3'
        ]);

        Mail::to(Auth::user()->email)
            ->send(new EmailDefault($data));

        return redirect()->route('home');
    }
}
