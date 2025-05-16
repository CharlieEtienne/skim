<?php

namespace Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource;
use Illuminate\Database\Eloquent\Model;

class ViewWebsite extends ViewRecord
{
    protected static string $resource = SkimWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('manage-pages')
                ->url(fn($record) => SkimWebsiteResource::getUrl('page.index', [
                    'parent' => $record,
                ])),
            Actions\EditAction::make()
                ->outlined()
                ->url(fn($record) => SkimWebsiteResource::getUrl('edit', [
                    'record' => $record,
                ])),
        ];
    }
}
