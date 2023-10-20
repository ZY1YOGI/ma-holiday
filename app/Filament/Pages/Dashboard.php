<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\StatsOverviewWidget;
class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected static ?string $slug = '/';


    protected  static function getWidgets(): array
    {
        return [
            StatsOverviewWidget::class,
        ];
    }
}
