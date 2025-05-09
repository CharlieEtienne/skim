<?php

namespace Ijpatricio\Skim;

use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Ijpatricio\Skim\Filament\Pages\Dashboard;
use Ijpatricio\Skim\Filament\Resources\SkimPageResource;
use Ijpatricio\Skim\Models\SkimPage;

class SkimPanelProvider extends PanelProvider
{

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('skim')
            ->path('skim')
            ->colors([
                'primary' => Color::Teal,
            ])
            ->resources([
                SkimPageResource::class,
            ])
            ->pages([
                Dashboard::class,
            ])
            ->widgets([
                // ...
            ])
            ->middleware([
                // ...
            ])
            ->authMiddleware([
                // ...
            ]);
    }
}
