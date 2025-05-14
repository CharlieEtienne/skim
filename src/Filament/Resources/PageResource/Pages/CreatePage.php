<?php

namespace Ijpatricio\Skim\Filament\Resources\PageResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Ijpatricio\Skim\Concerns\HasParentResource;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;
use Ijpatricio\Skim\Filament\Resources\SkimWebsiteResource;

class CreatePage extends CreateRecord
{
    use HasParentResource;

    protected static string $resource = SkimPageResource::class;

    protected string $pageNamePrefix = 'page';

    protected ?string $relationshipKey = 'skim_website_id';

    protected function getRedirectUrl(): string
    {
        return SkimWebsiteResource::getUrl('page.edit', [
            'parent' => $this->parentRecord,
            'record' => $this->getRecord(),
        ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['skim_website_id'] = $this->parentRecord->id;

        return $data;
    }
}
