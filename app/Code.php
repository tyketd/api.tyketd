<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected  $fillable=["number", "type","belong"];

    public function Anounce(){
        return $this->belongsTo('App\Anounce');
    }
}
