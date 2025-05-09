<?php

namespace Ijpatricio\Skim\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'skim::filament.pages.dashboard';
}
