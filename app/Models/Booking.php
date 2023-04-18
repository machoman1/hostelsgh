<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact',
        'initial_deposit',
        'property_name',
        'move_in_date',
        'move_out_date',
        'rooms_required',
        'landlord',
    ];
}
