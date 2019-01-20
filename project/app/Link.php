<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'titre',
        'url',
        'description',
        'session',
        'annee'
    ];
}
