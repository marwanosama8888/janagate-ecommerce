<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('order_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('bank_transaction_id')
                    ->required()
                    ->maxLength(255),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'shipped' => 'Shipped',
                        'delieverd' => 'Delieverd',
                        'new' => 'New',
                    ]),
                Forms\Components\TextInput::make('grand_total')
                    ->required(),
                Forms\Components\TextInput::make('item_count')
                    ->required(),
                Forms\Components\Toggle::make('payment_status')
                    ->required(),
                Forms\Components\TextInput::make('payment_method')
                    ->maxLength(255),
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('notes')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number'),
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('bank_transaction_id'),
                BadgeColumn::make('status')
                    ->colors([
                        'primary'=>'new',
                        'danger' => 'pending',
                        'warning' => 'shipped',
                        'success' => 'delieverd',
                    ]),
                Tables\Columns\TextColumn::make('grand_total'),
                Tables\Columns\TextColumn::make('item_count'),
                Tables\Columns\BooleanColumn::make('payment_status'),
                Tables\Columns\TextColumn::make('payment_method'),
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('notes'),
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
            RelationManagers\ItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
