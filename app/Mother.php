<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $fillable = [
        'name', 'lastname', 'age', 'scholarship_id', 'civilstate_id', 
        'anesthesiatype_id', 'steroids', 'finalizarionlabor'
    ];
}
