<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForwardingAgent extends Model
{
    protected $fillable = ["passportNumber","passportPicture","bankAccountNumber"];

    public function  Path(){
        return $this->belongsTo("\App\Path");
    }
}
