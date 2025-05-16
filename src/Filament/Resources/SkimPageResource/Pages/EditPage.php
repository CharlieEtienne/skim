<?php

namespace Ijpatricio\Skim\Filament\Resources\SkimPageResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Ijpatricio\Skim\Concerns\HasParentResource;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;
use Ijpatricio\Skim\Models\SkimPage;

class EditPage extends EditRecord
{
    use HasParentResource;

    protected static string $resource = SkimPageResource::class;

    protected ?string $pageNamePrefix = 'page';

    protected ?string $relationshipKey = 'parent_id';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('preview')
                ->outlined()
                ->url(fn(SkimPage $record) => $record->route)
                ->openUrlInNewTab(),
//            Actions\DeleteAction::make(),
        ];
    }
}
