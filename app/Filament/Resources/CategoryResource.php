<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxValue(60)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->unique(ignoreRecord: true)
                            ]),

                        Forms\Components\MarkdownEditor::make('description')
                            ->disableToolbarButtons([
                                'attachFiles'
                            ])
                            ->required()
                    ]),
                Forms\Components\Section::make('Image')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('category')
                            ->disk('images')
                            ->image()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
                Forms\Components\Section::make('SEO')
                    ->schema([
                        Forms\Components\Textarea::make('seo_description')
                            ->maxLength(160),

                        Forms\Components\TagsInput::make('seo_keywords')
                            ->separator(','),
                    ])
                    ->description('SEO: search engine optimize')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
                    ->label('Image')
                    ->collection('category'),

                Tables\Columns\TextColumn::make('Name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('Description')
                    ->label('Description')
                    ->searchable()
                    ->sortable()
                    ->words(8),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCategories::route('/'),
        ];
    }
}
