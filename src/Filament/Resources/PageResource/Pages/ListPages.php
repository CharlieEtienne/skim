<?php

namespace Ijpatricio\Skim\Filament\Resources\PageResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Ijpatricio\Skim\Concerns\HasParentResource;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource;

class ListPages extends ListRecords
{
    use HasParentResource;

    protected static string $resource = SkimPageResource::class;

    protected string $pageNamePrefix = 'page';

    protected ?string $relationshipKey = 'skim_website_id';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->url(fn() => SkimWebsiteResource::getUrl('page.create', [
                    'parent' => $this->parentRecord,
                ])),
        ];
    }
}
