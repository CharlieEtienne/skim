<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;

class Team implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('team')
           ->label('Team')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Team',
            ])
            ->schema([
                TextInput::make('title'),
                TextInput::make('subtitle'),

                Repeater::make('team_members')
                    ->collapsible()
                    ->itemLabel(fn (array $state) => $state['name'] ?? 'Team member')
                    ->label('Team members')
                    ->schema([
                        FileUpload::make('avatar')
                            ->image()
                            ->columnSpanFull()
                            ->avatar()
                            ->label('Avatar'),
                        TextInput::make('name')
                            ->live(onBlur: true)
                            ->label('Team member name'),
                        TextInput::make('title')
                            ->label('Team member title'),
                    ])
                    ->columns(2),
            ]);
    }
}
