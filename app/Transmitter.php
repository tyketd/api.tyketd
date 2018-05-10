<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmitter extends Model
{
    protected  $fillable = ["isEnterprise","website","secretId","apiKey","service"];

    public function Notes(){
        return $this->hasMany("\APP\Note");
    }
}
