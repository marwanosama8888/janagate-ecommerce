<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class NewContactMessage extends BaseWidget
{
    protected static ?int $sort = 2;
    protected static ?string $pollingInterval = null;
    protected int | string | array $columnSpan = 1;
    protected function getCards(): array
    {
        $num = Contact::count();
        return [
            Card::make('New Contact Message', $num)->url('admin/contacts')->color('success'),
        ];
    }
}
