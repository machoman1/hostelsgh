<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeStayContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
    ];
}
