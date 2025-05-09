<?php

namespace Ijpatricio\Skim\Filament\Resources\PageResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;

class ListPages extends ListRecords
{
    protected static string $resource = SkimPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
