<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_book_registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'surename',
        'email',
        'institution_type',
        'title',
        'address',
        'organization',
        'street',
        'company_name',
        'district',
        'contact_name',
        'town',
        'phone',
    ];
}