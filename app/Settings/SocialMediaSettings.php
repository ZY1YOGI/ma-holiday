<?php


namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SocialMediaSettings extends Settings
{
    public string|null $facebook_name, $facebook_url;

    public string|null $instagram_name, $instagram_url;

    public string|null $tiktok_name, $tiktok_url;

    public string|null $twitter_name, $twitter_url;

    public string|null $gmail_name, $gmail_url;

    public string|null $whatsapp_phone_1, $whatsapp_phone_2;

    public static function group(): string
    {
        return 'social_media';
    }
}
