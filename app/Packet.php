<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    protected $fillable = ["id","name","deliveryTimeInterval","costEstimation",
                           "receiverDescription","container","width","height",
                            "length","weight","price","priceInterval","expeditionPlace"
                          ];

    public function annonce()
    {
        return $this->belongsTo(Announce::class, 'id');
    }
    public function packets(){
        return $this->hasMany("\APP\Packet");
    }
}
