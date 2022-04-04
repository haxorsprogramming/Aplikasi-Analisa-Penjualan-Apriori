<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Dashboard extends Controller
{
    public function dashboard()
    {
        return view('main.dashboard');
    }
    public function berandaPage()
    {
        $dr = ['status' => 'sukses'];
        return view('main.berandaPage');
    }

    public function infoAplikasi()
    {
        return view('main.infoAplikasi');
    }

    function setAwal()
    {
        $dataAwal = array();
        $dr = ['respon' => $dataAwal];
        return \Response::json($dr);
    }
}
