<?php

namespace App\Http\Controllers;

use App\AnalisisIkan;
use App\AnalisisFood;
use App\Player;
use Illuminate\Http\Request;

use App\Iwak;
use App\Makanan;
use App\Air;
use App\Ekosistem;
use App\EkosistemIkan;
use App\AnalisisAir;
use App\EkosistemFood;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function clearEkosistem(Request $request){

        $ikan = EkosistemIkan::where('ekosistem_id','=',$request->ekosistem_id)->get();
        $pakan = EkosistemFood::where('ekosistem_id','=',$request->ekosistem_id)->get();
        foreach ($ikan as $item){
            EkosistemIkan::destroy($item->id);
        }
        foreach ($pakan as $item){
            EkosistemFood::destroy($item->id);
        }
        return redirect()->back();
    }
    public function index()
    {

        $ikan = Iwak::all();
        $food = Makanan::all();
        $water = Air::all();
        $player = Player::getPlayerLogin()->first();
        $ecoikan = array();
        $pesanAnalisisAir = array();
        $pesanAnalisisIkan = array();
        $pesanAnalisisPakan = array();
        $dftIkan = array();
        $now = Carbon::now();
        if ($player != null) {
            $eco = Ekosistem::getEkosistem($player->id)->first();
            if ($eco === null) {
                $eco = null;
            } else {
                // Analisis Ikan=====================================================================================
                $ecoikan = EkosistemIkan::getIkan($eco->id);
                $namaIkan = EkosistemIkan::getNamaIkan($eco->id);

//                dd(AnalisisIkan::getHasil(4, 5)->first());
                if ($ecoikan->count() == 0){
                    $ecoikan = null;
                } else {
                    foreach ($ecoikan as $key){
                        $analisisikan = Iwak::find($key->ikan_id);
                        $pesanAnalisisAir [] = AnalisisAir::getHasil($eco->water_id, $analisisikan->habitat);
                    }

                    foreach ($namaIkan as $ini){
                        if(Air::where('nama','=',Iwak::find($ini->ikan_id)->habitat)->first()->id == $eco->water_id){
                           $dftIkan[] = $ini->ikan_id;
                        }
                    }
//                    dd(AnalisisFood::getHasil("Omnivora",1)->first());

                    if(count($dftIkan) > 1){
                        for ($i = 0; $i < count($dftIkan); $i++){
                            for($j = $i+1; $j < count($dftIkan); $j++){
//                            dd($namaIkan[$i]->ikan_id);
                                if(AnalisisIkan::getHasil($dftIkan[$i], $dftIkan[$j])->first() == null){
                                    $pesanAnalisisIkan [] = AnalisisIkan::getHasilBalik($dftIkan[$i], $dftIkan[$j])->first()->keterangan;
                                } else {
                                    $pesanAnalisisIkan [] = AnalisisIkan::getHasil($dftIkan[$i], $dftIkan[$j])->first()->keterangan;
                                }
                            }
                        }
                    } else {
                        $pesanAnalisisIkan = null;
                    }
                }

                // Analisis Pakan=====================================================================================
                $ecopakan = EkosistemFood::getPakan($eco->id)->first();

                if ($ecopakan !== null){
                    if($ecopakan->waktuhabis > $now){
                        $pakan = Makanan::find($ecopakan->makanan_id)->jenis;
                        $gambarpakan = Makanan::find($ecopakan->makanan_id)->gambar;
                        if(count($dftIkan) > 0){
                            for($i = 0; $i < count($dftIkan); $i++){
                                $pesanAnalisisPakan [] = AnalisisFood::getHasil(Iwak::find($dftIkan[$i])->jenis, Makanan::find($ecopakan->makanan_id)->id)->hasil;
                            }
                        } else {
                            $pesanAnalisisPakan = null;
                        }
                    } else {
                        $pakan = "Makanan Habis";
                        $gambarpakan = null;
                    }
                } else {
                    $pakan = "Belum ada";
                    $gambarpakan = null;
                }


            }
        } else {
            $eco = null;
            $ecoikan = null;
            $pesanAnalisisIkan=null;
        }
//        dd($pesanAnalisisPakan);

        return view('home', compact('pakan','ikan','food', 'water', 'eco', 'ecoikan', 'pesanAnalisisAir','pesanAnalisisIkan','pesanAnalisisPakan','gambarpakan','dftIkan'));
    }
    public function tambahIkan(Request $request){
        $jml = EkosistemIkan::where('ekosistem_id','=',$request->ekosistem_id)->get();

        if(count($jml) < 10){
            EkosistemIkan::create([
                'ekosistem_id' => $request->ekosistem_id,
                'ikan_id' => $request->ikan_id
            ]);
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors("error");
        }
    }
    public function buangIkan(Request $request){
        $ikan = EkosistemIkan::where('ikan_id','=',$request->ikan_id)->first();
        EkosistemIkan::destroy($ikan->id);
        return redirect()->back();

    }

    public function gantiAir(Request $request){
        $eco = Ekosistem::find($request->ekosistem);
        $eco->update([
            'water_id' => $request->water_id
        ]);
        return redirect()->back();
    }
    public function tambahPakan(Request $request){

        $player = Player::getPlayerLogin()->first();
        $eco = Ekosistem::getEkosistem($player->id)->first();
        $ecopakan = EkosistemFood::getPakan($eco->id)->first();
        $now = Carbon::now();
        $waktuhabis = Carbon::now()->addMinute('20')->toDateTimeString();

        if($ecopakan !== null){
            if($ecopakan->waktuhabis > $now){
                return redirect()->back()->withErrors("error");
            } else {
                EkosistemFood::create([
                    'ekosistem_id' => $request->ekosistem_id,
                    'makanan_id' => $request->makanan_id,
                    'waktuhabis' => $waktuhabis
                ]);
                return redirect()->back();
            }
        } else {
            EkosistemFood::create([
                'ekosistem_id' => $request->ekosistem_id,
                'makanan_id' => $request->makanan_id,
                'waktuhabis' => $waktuhabis
            ]);
            return redirect()->back();
        }

    }
    public function tambahEkosistem(Request $request){

        $player_id = Player::where('email','=',Auth::user()->email)->first()->id;

        Ekosistem::create([
            'nama' => $request->nama,
            'player_id' => $player_id,
            'frame_id' => '1',
            'water_id' => $request->water_id
        ]);
        return redirect()->back();
    }
}
