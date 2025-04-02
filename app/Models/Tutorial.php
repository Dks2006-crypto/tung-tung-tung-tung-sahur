<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = 'tutorials';

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'is_new' => 'boolean',
        'is_popular' => 'boolean',
        'images' => 'array',
        'stages' => 'array',
        'key_keywords' => 'array',
    ];
}
