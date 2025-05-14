<?php

namespace Ijpatricio\Skim\Filament\Resources\PageResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Ijpatricio\Skim\Concerns\HasParentResource;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;

class EditPage extends EditRecord
{
    use HasParentResource;

    protected static string $resource = SkimPageResource::class;

    protected ?string $pageNamePrefix = 'page';

    protected ?string $relationshipKey = 'parent_id';

    protected function getHeaderActions(): array
    {
        return [
//            Actions\DeleteAction::make(),
        ];
    }
}
