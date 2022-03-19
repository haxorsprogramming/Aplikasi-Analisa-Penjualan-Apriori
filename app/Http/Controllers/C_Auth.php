<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class C_Auth extends Controller
{
    public function loginPage()
    {
        return view('auth.loginPage');
    }
    public function loginProses(Request $request)
    {
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
