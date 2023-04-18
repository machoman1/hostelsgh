<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact',
        'property_address',
        'reported_before',
        'repair_location',
        'details_of_repair',
        'created_by',
        
    ];
}
