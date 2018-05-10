<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected  $fillable = ["from","to","description"];

    public function Administrator(){
        return $this->belongsTo("\APP\Administrator");
    }

    public function Photos(){
        return $this->hasMany("\APP\Photo");
    }

    public function Codes(){
        return $this->hasMany("\APP\Code");
    }

    public function Localization(){
        return $this->hasOne("\APP\Localization");
    }
}
