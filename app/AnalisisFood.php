<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AnalisisFood extends Model
{
    public function scopeGetHasil($query, $ikan, $ekosistem){
        return $query->where('jenis_ikan','=',$ikan)->where('ekosistem_food','=',$ekosistem)->first();
    }
}
