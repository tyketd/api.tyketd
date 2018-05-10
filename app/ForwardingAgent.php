<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForwardingAgent extends Model
{
    protected $fillable = ["passportNumber","passportPicture","bankAccountNumber"];
}
