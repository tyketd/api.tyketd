<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suport extends User
{
    public function Administrator(){
        return $this->belongsTo("\APP\Administrator");
    }

    public function Incidents(){
        return $this->hasMany("\APP\Incident");
    }
}
