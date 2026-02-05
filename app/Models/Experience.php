<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'common_id', // UUID linking translations
        'lang',
        'company',
        'role',
        'description',
        'start_date',
        'end_date',
        'is_current',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
    ];

    /**
     * Scope a query to only include experiences of a given language.
     */
    public function scopeLanguage($query, string $lang)
    {
        return $query->where('lang', $lang);
    }

    /**
     * Sort by most recent start date.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('start_date', 'desc');
    }
}