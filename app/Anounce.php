<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anounce extends Model
{
    protected  $fillable = ["from","to","description"];
}
