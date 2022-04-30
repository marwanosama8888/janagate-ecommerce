<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Closure;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Support\Str;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {

        return $form
            ->schema(static::getFormSchema(Forms\Components\Card::class))
            ->columns([
                'lg' => 3,
                'lg' => null,
            ]);
    }
    public static function getFormSchema(string $layout = Forms\Components\Grid::class): array
    {
        return [
            Forms\Components\Group::make()
                ->schema([


                    $layout::make()
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('attachments')
                                ->multiple(),

                        ]),
                    $layout::make()
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->reactive()
                                ->afterStateUpdated(function (Closure $set, $state) {
                                    $set('slug', Str::slug($state));
                                }),
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Textarea::make('description')
                                ->required()
                                ->maxLength(65535)
                                ->columnSpan([
                                    'sm' => 2
                                ])
                        ])->columns([
                            'lg' => 2,
                        ]),
                    $layout::make()
                        ->schema([

                            Forms\Components\TextInput::make('vendor_id'),
                            Forms\Components\Toggle::make('active')
                                ->required(),
                            Forms\Components\TextInput::make('price')
                                ->required()
                        ]),
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Product Details'),
                            MarkdownEditor  ::make('info')
                                ->columnSpan([
                                    'lg' => 3
                                ]),
                            // Forms\Components\TextInput::make('size')
                            //     ->required(),
                            // Forms\Components\TextInput::make('color')
                            //     ->required(),
                            // Forms\Components\Textarea::make('info'),
                            Forms\Components\TextInput::make('material')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('weight')
                                ->required(),
                            Forms\Components\TextInput::make('widthHeight')
                                ->required()
                                ->maxLength(255),



                        ])->columns([
                            'lg' => 3
                        ])


                ])
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vendor_id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\BooleanColumn::make('active'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('size'),
                Tables\Columns\TextColumn::make('color'),
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
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\SubcategoriesRelationManager::class,
            RelationManagers\ProductPropsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
