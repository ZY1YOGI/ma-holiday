<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Trip;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        return [
            Stat::make('TRIPS', Trip::count()),

            Stat::make('USERS', User::count()),

            Stat::make('All IMAGES', Media::count()),

            Stat::make('IMAGES IN GALLERY', Media::count()),

            Stat::make('msg in contact us', Contact::where('read', false)->count()),
        ];
    }
}
