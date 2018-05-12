<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected  $fillable =["id","dateOfDeparture","dateOfArrival","planeTicket"];

    public function annonce()
    {
        return $this->belongsTo(Announce::class, 'id');
    }

    public  function ForwardingAgents(){
        return $this->hasMany("\APP\ForwardingAgent");
    }

    public function Transmitter(){
        return $this->belongsTo("\APP\Transmitter");
    }
}
