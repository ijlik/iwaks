<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalisisAir extends Model
{
    public function scopeGetHasil($query, $ekosistemair, $habitatikan){
        return $query->where('idAir','=', $ekosistemair)->where('habitat_ikan','=',$habitatikan)->first()->hasil;
    }
}
