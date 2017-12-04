<?php

namespace App\Http\Controllers;

use App\User;
use App\Player;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        $player = Player::where('email','=',Auth::user()->email)->first();
//        dd($player);
        if($player->avatar == NULL){
          $avatar = "storage/".Auth::user()->avatar;
        } else {
          $avatar = $player->avatar;
        }
        return view('profile', [
            'player' => $player,
            'avatar' => $avatar
        ]);
    }

    public function update(Request $request){

        $player = Player::where('email','=',Auth::user()->email)->first();
        $user = User::find(Auth::user()->id);
        if ($request->nama != ''){
            $player->nama = $request->nama;
            $user->name = $request->nama;
        }
        if ($request->password != '') {
            $user->password = bcrypt($request->password);
        }
        if ($request->file('avatar') != '') {
            $fileName= uniqid().'.'.$request->file('avatar')->getClientOriginalExtension();
            $path = $request->avatar->storeAs('users', $fileName);
            $player->avatar = "storage/".$path;
            $user->avatar = "storage/".$path;
        }

        $player->save();
        $user->save();

        return redirect()->back();
    }

}