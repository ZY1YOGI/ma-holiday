<?php


namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string|null $default_theme;


    public static function group(): string
    {
        return 'general';
    }
}
