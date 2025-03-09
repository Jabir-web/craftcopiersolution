<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MachineResource\Pages;
use App\Filament\Resources\MachineResource\RelationManagers;
use App\Models\Machine;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MachineResource extends Resource
{
    protected static ?string $model = Machine::class;

    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->label('Image')
                ->placeholder('Upload image')->columnSpan('2'),
                TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->label('Machine Name')
                ->placeholder('Enter machine name'),
            Select::make('product_id')
                ->label('Product')
                ->options(Product::all()->pluck('name', 'id'))
                ->searchable()
                ->required(),
         
          
            TextInput::make('brochure_link')
                ->label('Brochure Link')
                ->placeholder('Enter brochure link'),
            TextInput::make('driver_link')
                ->label('Driver Link')
                ->placeholder('Enter driver link'),
                Textarea::make('short_description')
                ->required()
                ->label('Short Description')
                ->placeholder('Enter short description')->columnSpan('2'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->sortable()
                ->searchable()
                ->label('Machine Name'),
            TextColumn::make('product.name')
                ->sortable()
                ->searchable()
                ->label('Product'),
    
           
            TextColumn::make('created_at')
                ->sortable()
                ->dateTime('F j, Y, g:i a')
                ->label('Created At'),
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
            'index' => Pages\ListMachines::route('/'),
            'create' => Pages\CreateMachine::route('/create'),
            'edit' => Pages\EditMachine::route('/{record}/edit'),
        ];
    }
}
