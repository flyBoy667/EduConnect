<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showProfile()
    {
        return view('profile', ['user' => Auth::user()]);
    }
}
