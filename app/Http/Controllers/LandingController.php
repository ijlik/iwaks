<?php

namespace App\Http\Controllers;

use App\Ekosistem;

class LandingController extends Controller
{
    public function index(){
        $hasil = Ekosistem::all();
        //dd($hasil);
        return view('homepage',compact('hasil'));
    }
}