<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'institutionB_id','institutionH_id', 'mother_id', 'laborcompletion', 
        'toolsbirth', 'genre_id', 'keeper_id', 'score', 'name',
        'lastname', 'civilregistration', 'diagnostics', 'assessment',
        'oxigendays', 'treatmentdays', 'supplies','state_id'
    ];
}