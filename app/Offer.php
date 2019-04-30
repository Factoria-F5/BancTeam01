<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [

        'title',
            'description',
            'location',
            'agreementType',
            'quantity',
            'limitDate',
            'beneficiary',
            'companyOffer'
    ];
}
