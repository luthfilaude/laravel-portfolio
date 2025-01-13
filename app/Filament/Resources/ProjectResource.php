<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Card
                Forms\Components\Card::make()
                    ->schema([
                        // Image
                        Forms\Components\FileUpload::make('project_image')
                        ->label('image')
                        ->rules(['mimes:jpeg,png,jpg,webp'])
                        ->required(),

                        // Grid
                        Forms\Components\Grid::make(2)
                            ->schema([
                        // Title
                        Forms\Components\TextInput::make('name_project')
                        ->label('Name_project')
                        ->placeholder('Name_project')
                        ->required(),

                        // Category
                        Forms\Components\Select::make('programming_language')
                        ->label('Programming_language')
                        ->relationship('category','name')
                        ->required(),
                            ]),
                    
                        // Content
                        Forms\Components\RichEditor::make('description')
                        ->label('Description')
                        ->placeholder('Description')
                        ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('project_image')->circular(),
                Tables\Columns\TextColumn::make('name_project')->searchable(),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('created_at')->datetime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
