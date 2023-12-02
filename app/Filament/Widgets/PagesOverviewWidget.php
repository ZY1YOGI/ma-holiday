<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PagesOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
