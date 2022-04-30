<?php

namespace App\Filament\Resources\PendingProductsResource\Pages;

use App\Filament\Resources\PendingProductsResource;
use Filament\Resources\Pages\ListRecords;

class ListPendingProducts extends ListRecords
{
    protected static string $resource = PendingProductsResource::class;
}
