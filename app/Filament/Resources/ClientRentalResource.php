<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientRentalResource\Pages;
use App\Filament\Resources\ClientRentalResource\RelationManagers;
use App\Models\ClientRental;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientRentalResource extends Resource
{
    protected static ?string $model = ClientRental::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('client_company_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('city_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('contact_number')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('requirements')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListClientRentals::route('/'),
            'create' => Pages\CreateClientRental::route('/create'),
            'edit' => Pages\EditClientRental::route('/{record}/edit'),
        ];
    }
}
