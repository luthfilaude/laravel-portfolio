<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Card
                Forms\Components\Card::make()
                    ->schema([
                        // Image
                        Forms\Components\FileUpload::make('image')
                        ->label('image')
                        ->rules(['mimes:jpeg,png,jpg,webp'])
                        ->required(),

                        // Grid
                        Forms\Components\Grid::make(2)
                            ->schema([
                        // Title
                        Forms\Components\TextInput::make('title')
                        ->label('Title')
                        ->placeholder('Title')
                        ->required(),

                        // Category
                        Forms\Components\Select::make('category_id')
                        ->label('Category')
                        ->relationship('category','name')
                        ->required(),
                            ]),
                    
                        // Content
                        Forms\Components\RichEditor::make('content')
                        ->label('Content')
                        ->placeholder('Content')
                        ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->circular(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('created_at')->datetime(),
                Tables\Columns\TextColumn::make('updated_at')->datetime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
