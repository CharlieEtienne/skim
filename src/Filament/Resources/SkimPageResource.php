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
use Ijpatricio\Skim\Actions\GetTemplateBlocks;
use Ijpatricio\Skim\Models\SkimPage;
use Ijpatricio\Skim\Models\SkimWebsite;

class SkimPageResource extends Resource
{
    protected static ?string $model = SkimPage::class;

    public static ?string $parentResource = SkimWebsiteResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema(function ($livewire) {

                /** @var SkimWebsite $record */
                $website = $livewire->parentRecord;

                $getTemplateBlocks = app(GetTemplateBlocks::class);

                $blocksArray = $getTemplateBlocks($website->template)->toArray();

                return [
                    TextInput::make('name'),
                    TextInput::make('slug'),
                    TextInput::make('route'),
                    Builder::make('content')
                        ->columnSpanFull()
                        ->blockPickerColumns()
//                        ->blockPreviews()
                        ->blocks($blocksArray)
                ];
            });
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
