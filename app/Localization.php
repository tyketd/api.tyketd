<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    protected $fillable=["contry","city","region","ipAddress","longitude","latitude"];


    public function message()
    {
        return $this->belongsTo('App\Message');
    }
}
