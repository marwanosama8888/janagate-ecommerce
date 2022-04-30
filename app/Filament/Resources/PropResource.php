<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropResource\Pages;
use App\Filament\Resources\PropResource\RelationManagers;
use App\Models\Prop;
use Filament\Forms;
use Filament\Forms\Components\MultiSelect;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PropResource extends Resource
{
    protected static ?string $model = Prop::class;

    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('product_id')
                ->required(),
            Forms\Components\TextInput::make('key')
                ->required()
                ->maxLength(255),
                MultiSelect::make('value')
                ->label('value')
                ->options([
                    'tailwind' => 'TailwindCSS',
                    'alpine' => 'Alpine.js',
                    'laravel' => 'Laravel',
                    'livewire' => 'Laravel Livewire',
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('product_id'),
            Tables\Columns\TextColumn::make('key'),
            Tables\Columns\TextColumn::make('value'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime(),
        ])
        ->filters([
            //
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProps::route('/'),
            'create' => Pages\CreateProp::route('/create'),
            'edit' => Pages\EditProp::route('/{record}/edit'),
        ];
    }
}
