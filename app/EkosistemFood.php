<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EkosistemFood extends Model
{
    protected $fillable = ['ekosistem_id','makanan_id','waktuhabis'];

    public function scopeGetPakan($query, $id){
        return $query->where('ekosistem_id', '=', $id)->orderBy('id','desc');
    }
}
