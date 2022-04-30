<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class SubcategoriesRelationManager extends BelongsToManyRelationManager
{
    protected static string $relationship = 'subcategories';

    protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $inverseRelationship = 'products';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema    ([
                static::getAttachFormRecordSelect(),

                Forms\Components\TextInput::make('name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                           Tables\Columns\TextColumn::make('name'),

            ])
            ->filters([
                //
            ]);
    }
}
