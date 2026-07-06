<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPageSetting extends Model
{
    protected $fillable = [
        'hero_eyebrow', 'hero_title_line1', 'hero_title_line2_gold', 'hero_paragraphs', 
        'hero_image', 'foundation_eyebrow', 'foundation_title', 'foundation_cards',
        'leadership_title', 'leadership_eyebrow', 'leadership_description'
    ];

    protected $casts = [
        'hero_paragraphs' => 'array',
        'foundation_cards' => 'array',
    ];
}