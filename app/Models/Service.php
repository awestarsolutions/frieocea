<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'icon',
        'description',
        'benefits',
        'use_cases',
    ];

    protected $casts = [
        'benefits' => 'array',
        'use_cases' => 'array',
    ];
}
