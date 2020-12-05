<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keeper extends Model
{
    protected $fillable = [
        'name', 'lastname', 'cellphone'
    ];
}
