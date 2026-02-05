<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'name',
        'icon_class',
        'proficiency',
        'category',
    ];

    protected $casts = [
        'proficiency' => 'integer',
    ];

    /**
     * Scope a query to only include skills of a given language.
     * Usage: Skill::language('en')->get();
     */
    public function scopeLanguage($query, string $lang)
    {
        return $query->where('lang', $lang);
    }
}