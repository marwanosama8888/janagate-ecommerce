<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OrdersStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Google Tracking', '192.1k'),
            Card::make('New Ordrs rate', '21%')
            ->description('32k increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Card::make('Average time on view page', '3:12'),
        ];
    }
}
