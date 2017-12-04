<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class AnalisisIkan extends Model
{
    public function scopeGetHasil($query, $i1, $i2){
        return $query->where('ikan_1','=',$i1)->where('ikan_2','=',$i2);
    }
    public function scopeGetHasilBalik($query, $i1, $i2){
        return $query->where('ikan_1','=',$i2)->where('ikan_2','=',$i1);
    }
}
