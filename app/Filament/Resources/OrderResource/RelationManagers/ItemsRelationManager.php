<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class ItemsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'items';

    protected static ?string $recordTitleAttribute = 'product_title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_title'),
                Tables\Columns\TextColumn::make('prop'),
                Tables\Columns\TextColumn::make('quantity'),

            ])
            ->filters([
                //
            ]);
    }
}
