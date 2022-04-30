<?php

namespace App\Filament\Widgets;

use App\Models\PendingProduct;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class NewProductRequest extends BaseWidget
{
    protected static ?int $sort = 2;
    protected static ?string $pollingInterval = null;
    protected int | string | array $columnSpan = 1;
    protected function getCards(): array
    {
        $num = PendingProduct::count();
        return [
            Card::make('New Products Requests', $num)->url('admin/pending-products')->color('success'),
        ];
    }
}
