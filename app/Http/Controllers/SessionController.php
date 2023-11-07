<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login()
    {
        return view('session.login');
    }

    public function createAccount()
    {
        return view('session.signUp');
    }
}
