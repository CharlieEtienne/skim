<?php

namespace Ijpatricio\Skim\Mason;

use Filament\Forms\Components\TextInput;

class Hero1
{
    public static function make()
    {
        return Brick::make('hero1')
            ->label('Hero1')
            ->modalHeading('Hero1 Settings')
            ->icon('heroicon-o-cube-transparent')
            ->slideOver()
            ->fillForm(fn (array $arguments): array => [
                //
            ])
            ->form([
                TextInput::make('title'),
            ]);
    }
}
