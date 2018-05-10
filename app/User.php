<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
        ["email","password","lastName","firstName","phoneNumber",
            "createAt","registrationNumber","nationalRegisterNumber","identityCartePicture",
            "birthDate","gender","address","profile","emailConfirmed","phoneNumberConfirmed","isOnline"
        ];


    public function Incidents(){
        return $this->hasMany("\APP\Incident");
    }

    public function Transactions(){
        return $this->hasMany("\APP\Transaction");
    }

    public function InsuranceAccount(){
        return $this->hasOne("\APP\InsuranceAccount");
    }

    public function Localization(){
        return $this->hasOne("\APP\Localization");
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
