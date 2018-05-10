<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable=["isCredit","amount","bankAccountNumber"];

    public function inssuranceAccount()
    {
        return $this->hasOne('App\InssuranceAccount');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }


}
