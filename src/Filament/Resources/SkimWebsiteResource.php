<?php

namespace Ijpatricio\Skim\Filament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Facades\Skim;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource\Pages\CreatePage;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource\Pages\EditPage;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource\Pages\ListPages;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource\Pages\ViewWebsite;
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
                Tables\Actions\Action::make('manage-pages')
                    ->url(fn($record) => SkimWebsiteResource::getUrl('page.index', [
                        'parent' => $record,
                    ]))
            ])
            ->recordUrl(
                fn ($record) => SkimWebsiteResource::getUrl('view', ['record' => $record])
            )
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
            'view' => SkimWebsiteResource\Pages\ViewWebsite::route('/{record}'),
            'edit' => SkimWebsiteResource\Pages\EditSkimWebsite::route('/{record}/edit'),

            // Nested resource: SkimPageResource
            'page.index' => ListPages::route('/{parent}/pages'),
            'page.create' => CreatePage::route('{parent}/pages/create'),
            'page.edit' => EditPage::route('{parent}/pages/{record}/edit'),
        ];
    }
}
