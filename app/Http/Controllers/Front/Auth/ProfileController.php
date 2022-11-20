<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function logout()
    {
    }
}
