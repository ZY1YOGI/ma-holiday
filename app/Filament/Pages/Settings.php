<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\PagesOverviewWidget;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';
    protected static ?int $navigationSort = 10;




    public function getWidgets(): array
    {
        return [
            PagesOverviewWidget::class,
        ];
    }
}
