<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmitter extends Model
{
    protected  $fillable = ["id","isEnterprise","website","secretId","apiKey","service"];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function Notes(){
        return $this->hasMany("\APP\Note");
    }
}
