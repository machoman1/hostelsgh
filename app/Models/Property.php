<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_name',
        'property_type',
        'city',
        'number_of_rooms',
        'number_of_rooms_available',
        'date_available',
        'amount_per_month',
        'property_status',
        'initial_deposit',
        'land_lord',
        'Address',
        'is_sheard',
        'image',
    ];
}
