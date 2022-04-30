<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendingProductResource\Pages;
use App\Filament\Resources\PendingProductResource\RelationManagers;
use App\Models\PendingProduct;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\LinkAction;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\ButtonAction;
use Filament\Tables\Actions\IconButtonAction;
use Illuminate\Database\Eloquent\Collection;

class PendingProductResource extends Resource
{
    protected static ?string $model = PendingProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';
    public function accept()
    {
        dd('noo');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vendor_id'),
                Forms\Components\TextInput::make('product_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sub_category')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\Textarea::make('info'),
                Forms\Components\TextInput::make('material')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight')
                    ->required(),
                Forms\Components\TextInput::make('widthHeight')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vendor_id'),
                Tables\Columns\TextColumn::make('product_title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('sub_category'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\BooleanColumn::make('active'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('info'),
                Tables\Columns\TextColumn::make('material'),
                Tables\Columns\TextColumn::make('weight'),
                Tables\Columns\TextColumn::make('widthHeight'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
            ])
            // Add the actions after the default action/s (after Edit or View)
            ->pushActions([
                LinkAction::make('accept')
                ->url(fn (PendingProduct $record): string => url('vendor/accept', $record->id))->color('success')
                    ->icon('heroicon-o-check'),
                LinkAction::make('Refuse')
                    ->url(fn (PendingProduct $record): string => url('vendor/refuse', $record->id))->color('danger')
                    ->icon('heroicon-o-exclamation')
                    ->requiresConfirmation()

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
            'index' => Pages\ListPendingProducts::route('/'),
            'create' => Pages\CreatePendingProduct::route('/create'),
            'edit' => Pages\EditPendingProduct::route('/{record}/edit'),
        ];
    }
}
