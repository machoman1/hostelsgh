<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_name',
        'room_name',
        'city',
        'date_available',
        'amount_per_month',
        'initial_deposit',
        'room_status',
        'landlord',
        'room_img_1',
        'room_img_2',
        'room_img_3',
        'room_img_4',
        'room_img_5',
        'room_prop_1',
        'room_prop_2',
        'room_prop_3',
        'room_prop_4',
        'room_prop_5',
    ];
}
