<?php

namespace Ijpatricio\Skim\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Ijpatricio\Skim\Models\SkimPage;

class SkimPageResource extends Resource
{
    protected static ?string $model = SkimPage::class;

    public static ?string $parentResource = SkimWebsiteResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug'),
                Builder::make('content')
                    ->columnSpanFull()
                    ->blockPickerColumns()
                    ->blockPreviews()
                    ->blocks([
                        Builder\Block::make('hero1')
                            ->label('Hero A')
                            ->preview('skim-porto::mason.hero1')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title'),
                            ]),
                        Builder\Block::make('hero2')
                            ->label('Hero B')
                            ->preview('skim-porto::mason.hero1')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title'),
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(fn ($record) => SkimWebsiteResource::getUrl('page.edit', [
                        'parent' => $record->skim_website_id,
                        'record' => $record,
                    ])),
            ])
            ->bulkActions([
                //
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
            // We're using the parent resource to manage the routing of the Pages resource
//            'index' => \Ijpatricio\Skim\Filament\Resources\PageResource\Pages\ListPages::route('/'),
//            'create' => \Ijpatricio\Skim\Filament\Resources\PageResource\Pages\CreatePage::route('/create'),
//            'edit' => \Ijpatricio\Skim\Filament\Resources\PageResource\Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
