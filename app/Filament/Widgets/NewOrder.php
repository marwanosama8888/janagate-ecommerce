<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class NewOrder extends BaseWidget
{
    protected static ?int $sort = 2;
    protected static ?string $pollingInterval = null;
    protected int | string | array $columnSpan = 1;
    protected function getCards(): array
    {
        $num = Order::count();
        return [
            Card::make('Orders Counter', $num)->url('admin/orders')->color('success'),
        ];
    }

}
