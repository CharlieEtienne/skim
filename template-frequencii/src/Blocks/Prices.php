<?php

namespace Ijpatricio\SkimTemplateFrequencii\Blocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Ijpatricio\Skim\Contracts\HasBlock;
use Ijpatricio\SkimPorto\Forms\IconSelectorOptions;

class Prices implements HasBlock
{
    public static function getBlock(): Block
    {
        return Block::make('prices')
           ->label('Prices')
            ->preview('skim::filament.forms.block-preview')
            ->viewData([
                'block_name' => 'Prices',
            ])
            ->schema([
                TextInput::make('title'),
                TextInput::make('subtitle'),
                Toggle::make('frequency')->label('Monthly/Annual prices')
                    ->helperText('If inactive, the prices will display the monthly prices'),
                TextInput::make('monthly_label')->label('Monthly selector label')->placeholder('Monthly'),
                TextInput::make('annually_label')->label('Annually selector label')->placeholder('Annually'),

                Repeater::make('plans')
                    ->collapsible()
                    ->itemLabel(fn (array $state) => $state['name'] ?? 'Plan')
                    ->label('Plans')
                    ->schema([
                        TextInput::make('name')->label('Plan name'),
                        TextInput::make('monthly_price')->label('Plan monthly price')->placeholder('$0'),
                        TextInput::make('annual_price')->label('Plan annual price')->placeholder('$0'),
                        TextInput::make('monthly_description')->label('Monthly Plan description')->placeholder('per month'),
                        TextInput::make('annual_description')->label('Annual Plan description')->placeholder('per year'),
                        TextInput::make('button_text')->placeholder('Get Started'),
                        TextInput::make('button_link')->placeholder('#'),
                        Toggle::make('featured'),
                        TextInput::make('featured_badge')->placeholder('Most Popular'),
                        TextInput::make('features_heading')->placeholder('What’s included'),

                        Repeater::make('features')
                            ->label('Features')
                            ->simple(
                                TextInput::make('feature')
                            ),
                    ]),

            ]);
    }
}
