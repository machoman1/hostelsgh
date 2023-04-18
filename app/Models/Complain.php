<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact',
        'complain',
        'tenancy_status',
        'university',
        'property_address', 
        'landlord_name',
        'tenency_type',
        'created_by',
        'proof',
        'status',
    ];
}
