<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EkosistemIkan extends Model
{
    protected $fillable = ['ekosistem_id' , 'ikan_id'];

    public function scopeGetIkan($query, $id){
        return $query->where('ekosistem_id', '=', $id)->get();
    }

    public function scopeGetNamaIkan($query,$id){
        return $query->where('ekosistem_id', '=', $id)->groupBy('ikan_id')->get();
    }
}
