<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected  $fillable = ["email","lastName","firstName","phoneNumber","password",
                            "createAt","registrationNumber","nationalRegisterNumber","identityCartePicture",
                            "birthDate","gender","address","profile","emailConfirmed","phoneNumberConfirmed","isOnline"];
}
