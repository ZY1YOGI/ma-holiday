<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.app_name', 'TechViolin');
        $this->migrator->add('general.default_theme', 'light');
    }
};
