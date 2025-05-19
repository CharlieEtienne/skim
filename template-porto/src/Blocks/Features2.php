<?php

namespace Ijpatricio\SkimTemplatePorto\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Features2 implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('features2')
            ->label('Features 2')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Features 2',
            ])
            ->schema([
                TextInput::make('title'),
                TextInput::make('subtitle'),

                Repeater::make('features')
                    ->collapsible()
                    ->itemLabel(fn (array $state) => $state['year'] ?? 'Feature')
                    ->schema([
                        TextInput::make('year')
                            ->live(onBlur: true),
                        TextInput::make('description'),
                        TextInput::make('link_text'),
                        TextInput::make('link_target')
                            ->url(),
                        Checkbox::make('open_in_new_tab')
                            ->default(false)
                            ->label('Open in new tab'),
                    ]),
            ]);
    }
}
