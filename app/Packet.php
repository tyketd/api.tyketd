<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    protected $fillable = ["name","deliveryTimeInterval","costEstimation",
                           "receiverDescription","container","width","height",
                            "length","weight","price","priceInterval","expeditionPlace"
                          ];
}
