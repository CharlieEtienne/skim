<?php

namespace Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource;

class EditSkimWebsite extends EditRecord
{
    protected static string $resource = SkimWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
