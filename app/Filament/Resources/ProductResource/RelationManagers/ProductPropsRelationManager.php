<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\MultiSelect;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class ProductPropsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'productProps';

    protected static ?string $recordTitleAttribute = 'key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')->label('# Size Or Color')->required(),
                MultiSelect::make('value')
                    ->label('value')
                    ->options([
                        'S' => 'S',
                        'M' => 'M',
                        'XL' => 'Xl',
                        'Red' => 'Red',
                        'White' => 'White',
                        'Black' => 'Black',
                        'Blue' => 'BLue',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('value'),
                // ...
            ])
            ->filters([
                //
            ]);
    }
}
