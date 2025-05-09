<?php

namespace Ijpatricio\Skim\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use Awcodes\Mason\Mason;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Ijpatricio\Skim\Models\SkimPage;

class SkimPageResource extends Resource
{
    protected static ?string $model = SkimPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug'),
                Mason::make('content')
                    ->label('Content')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => \Ijpatricio\Skim\Filament\Resources\PageResource\Pages\ListPages::route('/'),
            'create' => \Ijpatricio\Skim\Filament\Resources\PageResource\Pages\CreatePage::route('/create'),
            'edit' => \Ijpatricio\Skim\Filament\Resources\PageResource\Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
