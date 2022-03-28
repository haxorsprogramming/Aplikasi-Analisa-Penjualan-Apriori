<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class C_Apriori extends Controller
{
    public function setupPerhitunganApriori()
    {
        return view('main.apriori.setup');
    }

    public function prosesAnalisaApriori(Request $request)
    {
        // 'support': support,
        //     'confidence': confidence,
        //     'nama' : nama
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

}
