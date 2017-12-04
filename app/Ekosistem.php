<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekosistem extends Model
{
    protected $fillable = ['nama','player_id','frame_id','water_id'];

    public function scopeGetEkosistem($query, $player){
        return $query->where('player_id', '=', $player);
    }
}
