<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingPagesResource\Pages;
use App\Filament\Resources\LandingPagesResource\RelationManagers;
use App\Models\LandingPages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class LandingPagesResource extends Resource
{
    protected static ?string $model = LandingPages::class;

    protected static ?string $navigationIcon = 'heroicon-o-cursor-click';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('platform_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('platform_slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('campain_url')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('platform_name'),
            Tables\Columns\TextColumn::make('platform_slug'),
            Tables\Columns\TextColumn::make('campain_url'),
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
            'index' => Pages\ListLandingPages::route('/'),
            'create' => Pages\CreateLandingPages::route('/create'),
            'edit' => Pages\EditLandingPages::route('/{record}/edit'),
        ];
    }
}
