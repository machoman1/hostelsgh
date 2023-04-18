<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landloard_registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'surename',
        'email',
        'city',
        'title',
        'house_name',
        'house_number',
        'street',
        'company',
        'district',
        'contact_name',
        'town',
        'contact_number',
        'website',
    ];
}
