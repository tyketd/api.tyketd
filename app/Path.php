<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected  $fillable =["dateOfDeparture","dateOfArrival","planeTicket"];

    public  function ForwardingAgents(){
        return $this->hasMany("\APP\ForwardingAgent");
    }
}
