<?php

namespace Ijpatricio\Skim\Filament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Facades\Skim;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource\Pages;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource\RelationManagers;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Ijpatricio\Skim\Models\SkimWebsite;

class SkimWebsiteResource extends Resource
{
    protected static ?string $model = SkimWebsite::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Select::make('template')
                    ->options(Skim::getTemplatesForSelectField()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('template'),
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
            'index' => SkimWebsiteResource\Pages\ListSkimWebsites::route('/'),
            'create' => SkimWebsiteResource\Pages\CreateSkimWebsite::route('/create'),
            'edit' => SkimWebsiteResource\Pages\EditSkimWebsite::route('/{record}/edit'),
        ];
    }
}
