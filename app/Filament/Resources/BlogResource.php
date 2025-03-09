<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\NumberColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //blog form
                TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->label('Title')
                ->placeholder('Enter blog title'),
            FileUpload::make('img')
                ->label('Image')
                ->placeholder('Upload image'),
            TextInput::make('category')
                ->required()
                ->maxLength(255)
                ->label('Category')
                ->placeholder('Enter category'),
                Select::make('status')
                ->options([
                    'published' => 'Published',
                    'draft' => 'Draft',
                    'archived' => 'Archived',
                ])
                ->default('draft')
                ->required()
                ->label('Status'),
          
            TextInput::make('views')
                ->numeric()
                ->default(0)
                ->label('Views'),
            TextInput::make('likes')
                ->numeric()
                ->default(0)
                ->label('Likes'),
                RichEditor::make('description')
                ->required()
                ->label('Description')
                ->placeholder('Enter description')->columnSpan('2'),
           
        ]);
          
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')
                ->sortable()
                ->searchable()
                ->label('Title'),
        
            TextColumn::make('category')
                ->sortable()
                ->searchable()
                ->label('Category'),
         
            TextColumn::make('views')
                ->sortable()
                ->label('Views'),
            TextColumn::make('likes')
                ->sortable()
                ->label('Likes'),
            TextColumn::make('status')
                ->sortable()
                ->label('Status'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
