<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suport extends Model
{
    protected $fillable = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function Administrator(){
        return $this->belongsTo("\APP\Administrator");
    }

    public function Incidents(){
        return $this->hasMany("\APP\Incident");
    }
}
