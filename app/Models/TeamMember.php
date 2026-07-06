<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = ['slug', 'name', 'title', 'sort_order', 'bio_sections'];

    protected $casts = [
        'bio_sections' => 'array',
    ];
}