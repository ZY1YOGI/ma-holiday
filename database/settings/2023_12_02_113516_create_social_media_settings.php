<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('social_media.facebook_name');
        $this->migrator->add('social_media.facebook_url');

        $this->migrator->add('social_media.instagram_name');
        $this->migrator->add('social_media.instagram_url');

        $this->migrator->add('social_media.tiktok_name');
        $this->migrator->add('social_media.tiktok_url');

        $this->migrator->add('social_media.twitter_name');
        $this->migrator->add('social_media.twitter_url');

        $this->migrator->add('social_media.gmail_name');
        $this->migrator->add('social_media.gmail_url');

        $this->migrator->add('social_media.whatsapp_phone_1');
        $this->migrator->add('social_media.whatsapp_phone_2');
    }
};
