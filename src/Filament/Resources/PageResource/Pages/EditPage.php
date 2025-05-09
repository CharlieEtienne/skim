<?php

namespace Ijpatricio\Skim\Filament\Resources\PageResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;

class EditPage extends EditRecord
{
    protected static string $resource = SkimPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
