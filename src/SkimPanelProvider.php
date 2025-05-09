<?php

namespace Ijpatricio\Skim;

use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Ijpatricio\Skim\Filament\Pages\Dashboard;

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
                // ...
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
