<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceAccount extends Model
{
    protected $fillable=["tyketdAccountNumber","blockedAmount"];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }


    public function user()
    {
        return $this->hasOne('App\User');
    }
}
