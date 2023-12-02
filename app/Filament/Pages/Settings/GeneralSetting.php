<?php

namespace App\Filament\Pages\Settings;

use App\Settings\GeneralSettings;

use Filament\Forms\Form;
use Filament\Forms;
use Filament\Pages\SettingsPage;

class GeneralSetting extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('app_name')
                            ->label('App Name')
                            ->required(),

                        Forms\Components\Select::make('default_theme')
                            ->label('Default Theme')
                            ->options([
                                'dark' => 'Dark Theme',
                                'light' => 'Light Theme',
                            ])
                            ->required(),

                    ])->columns(2)
            ]);
    }
}
