<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=["content","create","image"];

    public function localization(){
        return $this->hasOne('App\Localization');
    }
}
