<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected  $fillable=["value"];

    public function forwardindArgent(){
        return $this->belongsTo('App\ForwardindArgent');
    }

    public function transmitter(){
        return $this->belongsTo('App\Transmitter');
    }
}
