<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
