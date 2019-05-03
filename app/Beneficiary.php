<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [

            'name',
            'surname',
            'dni',
            'birthday',
            'adress',
            'phone',
            'email'
    ];
}
