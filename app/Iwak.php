<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iwak extends Model
{

    public function scopeIsKarnivora($query){
        return $query->where('Jenis','=', 'Karnivora')->get();
    }
    public function scopeIsHerbivora($query){
        return $query->where('Jenis','=', 'Herbivora')->get();
    }
    public function scopeIsOmnivora($query){
        return $query->where('Jenis','=', 'Omnivora')->get();
    }
}
