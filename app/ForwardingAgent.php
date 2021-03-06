<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForwardingAgent extends Model
{
    protected $fillable = ["id","passportNumber","passportPicture","bankAccountNumber"];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function  Path(){
        return $this->belongsTo("\App\Path");
    }

    public function Administrator(){
        return $this->belongsTo("\APP\Administrator");
    }

    public function Notes(){
        return $this->hasMany("\APP\Note");
    }
}
