<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Auth extends Controller
{
    public function loginPage()
    {
        return view('auth.loginPage');
    }
}
