<?php


namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $app_name;
    public string $default_theme;



    public static function group(): string
    {
        return 'general';
    }
}
