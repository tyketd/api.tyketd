<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected  $fillable=["context", "createAt","image"];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function support()
    {
        return $this->hasOne('App\Support');
    }
}
