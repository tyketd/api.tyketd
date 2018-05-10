<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{

    public function ForwardingAgents(){
        return $this->hasMany("\APP\ForwardingAgent");
    }

    public function Supports(){
        return $this->hasMany("\APP\Support");
    }

    public function Announces(){
        return $this->hasMany("\APP\Announce");
    }


}
