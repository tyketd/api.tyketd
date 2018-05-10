<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected  $fillable = ["name","size","extension"];

    public function Announce(){
        return $this->belongsTo("\APP\Announce");
    }
}
