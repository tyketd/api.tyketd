<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceAccount extends Model
{
    protected $fillable=["tyketdAccountNumber","blockedAmount"];
}
