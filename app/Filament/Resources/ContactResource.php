<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('read');
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-mail'),
                Tables\Columns\TextColumn::make('message')
                    ->label('Message'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone'),
                Tables\Columns\IconColumn::make('read')
                    ->label('is Read')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\Filter::make('Reading')
                    ->query(fn (Builder $query): Builder => $query->where('read', true)),
                Tables\Filters\Filter::make('Not Read')
                    ->query(fn (Builder $query): Builder => $query->where('read', false)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('Reading')
                    ->action(fn (Contact $record) => $record->update(['read' => true]))
            ])
            ->bulkActions([]);
    }

    public static function getNavigationBadge(): string
    {
        return static::getModel()::where('read', false)->count();
    }


    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make()
                    ->schema([
                        Infolists\Components\Group::make([
                            Infolists\Components\TextEntry::make('name'),
                            Infolists\Components\TextEntry::make('email'),
                            Infolists\Components\TextEntry::make('message'),
                            Infolists\Components\TextEntry::make('phone'),
                        ]),
                    ])->columnSpan(2),
            ]);
    }





    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}
