<?php

namespace Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource;

class ListSkimWebsites extends ListRecords
{
    protected static string $resource = SkimWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
