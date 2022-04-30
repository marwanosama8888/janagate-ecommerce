<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SCategoryResource\Pages;
use App\Models\Category;
use App\Models\SCategory;
use Closure;
use Str;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;


class SCategoryResource extends Resource
{
    protected static ?string $model = SCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                ->label('Category')
                ->options(Category::all()->pluck('name', 'id'))
                ->searchable()
                    ->required(),
                TextInput::make('name')
                    ->reactive()
                    ->afterStateUpdated(function (Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
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
            'index' => Pages\ListSCategories::route('/'),
            'create' => Pages\CreateSCategory::route('/create'),
            'edit' => Pages\EditSCategory::route('/{record}/edit'),
        ];
    }
}
