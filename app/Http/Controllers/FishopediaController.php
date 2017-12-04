<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

use App\Iwak;
use App\Makanan;
use App\Air;
use App\Ekosistem;
use App\EkosistemIkan;
use Illuminate\Support\Facades\Auth;

class FishopediaController
{

    public function index(){
        $karni = Iwak::isKarnivora();
        $omni = Iwak::isOmnivora();
        $herbi = Iwak::isHerbivora();

        return view('fishopedia', [
            'karni' => $karni,
            'omni' => $omni,
            'herbi' => $herbi
        ]);
    }
    public function detail($id){
        $ikan = Iwak::find($id);

        return view('detail', [
            'ikan' => $ikan
        ]);
    }
}