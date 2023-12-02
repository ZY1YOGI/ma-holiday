<?php

namespace App\Filament\Pages\Settings;

use App\Settings\SocialMediaSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class SocialMediaSetting extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected ?string $subheading = 'Add names and links to social media platforms';
    protected static ?string $navigationGroup = 'Settings';
    protected static string $settings = SocialMediaSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make("Facebook")
                    ->schema([
                        Forms\Components\TextInput::make('facebook_name')
                            ->label('Facebook Name Page')
                            ->prefixIcon('bi-facebook')
                            ->required(),

                        Forms\Components\TextInput::make('facebook_url')
                            ->label('Facebook URL Page')
                            ->prefix('https://')
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->url()
                            ->required(),

                    ])->columns(2),

                Forms\Components\Section::make("Instagram")
                    ->schema([
                        Forms\Components\TextInput::make('instagram_name')
                            ->label('Instagram Name Page')
                            ->prefixIcon('bi-instagram')
                            ->required(),

                        Forms\Components\TextInput::make('instagram_url')
                            ->label('Instagram URL Page')
                            ->prefix('https://')
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->url()
                            ->required(),

                    ])->columns(2),

                Forms\Components\Section::make("Tiktok")
                    ->schema([
                        Forms\Components\TextInput::make('tiktok_name')
                            ->label('Tiktok Name Page')
                            ->prefixIcon('bi-tiktok')
                            ->required(),

                        Forms\Components\TextInput::make('tiktok_url')
                            ->label('Tiktok URL Page')
                            ->prefix('https://')
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->url()
                            ->required(),

                    ])->columns(2),

                Forms\Components\Section::make("Twitter")
                    ->schema([
                        Forms\Components\TextInput::make('twitter_name')
                            ->label('Twitter Name Page')
                            ->prefixIcon('bi-twitter')
                            ->required(),

                        Forms\Components\TextInput::make('twitter_url')
                            ->label('Twitter URL Page')
                            ->prefix('https://')
                            ->suffixIcon('heroicon-m-globe-alt')
                            ->url()
                            ->required(),

                    ])->columns(2),

                Forms\Components\Section::make("E-mail")
                    ->schema([
                        Forms\Components\TextInput::make('gmail_name')
                            ->label('E-mail Name')
                            ->prefixIcon('heroicon-o-envelope')
                            ->required(),

                        Forms\Components\TextInput::make('gmail_url')
                            ->label('E-mail URL')
                            ->prefix('E-mai')
                            ->email()
                            ->required(),

                    ])->columns(2),

                Forms\Components\Section::make("WhatsApp")
                    ->schema([
                        Forms\Components\TextInput::make('whatsapp_phone_1')
                            ->label('WhatsApp Phone 1')
                            ->prefixIcon('bi-whatsapp')
                            ->tel()
                            ->telRegex('/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/')
                            ->required(),

                        Forms\Components\TextInput::make('whatsapp_phone_2')
                            ->label('WhatsApp Phone 2')
                            ->prefixIcon('bi-whatsapp')
                            ->tel()
                            ->telRegex('/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/')
                            ->required(),

                    ])->columns(2)
            ]);
    }
}
