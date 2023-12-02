<?php


namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SocialMediaSettings extends Settings
{
    public string $facebook_name, $facebook_url;

    public string $instagram_name, $instagram_url;

    public string $tiktok_name, $tiktok_url;

    public string $twitter_name, $twitter_url;

    public string $gmail_name, $gmail_url;

    public string $whatsapp_phone_1, $whatsapp_phone_2;

    public static function group(): string
    {
        return 'social_media';
    }
}
