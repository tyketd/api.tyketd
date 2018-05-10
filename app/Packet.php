<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Announce
{
    protected $fillable = ["name","deliveryTimeInterval","costEstimation",
                           "receiverDescription","container","width","height",
                            "length","weight","price","priceInterval","expeditionPlace"
                          ];

    public function Packets(){
        return $this->hasMany("\APP\Packet");
    }
}
