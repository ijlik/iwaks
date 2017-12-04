<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Player extends Model
{
    protected $fillable = ['nama', 'email', 'gender', 'birthDate', 'country', 'avatar'];

    public function scopeGetPlayerLogin($query){
        return $query->where('nama','=',Auth::user()->name)->where('email','=',Auth::user()->email);
    }
}
