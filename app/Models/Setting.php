<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',
        'key',
        'value',
    ];

    /**
     * Helper to get a value by key and language.
     * Usage: Setting::getValue('bio', 'fa');
     */
    public static function getValue(string $key, string $lang = 'en'): ?string
    {
        $setting = self::where('key', $key)
                       ->where('lang', $lang)
                       ->first();

        return $setting ? $setting->value : null;
    }
}