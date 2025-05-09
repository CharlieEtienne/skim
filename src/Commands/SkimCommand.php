<?php

namespace Ijpatricio\Skim\Commands;

use Illuminate\Console\Command;

class SkimCommand extends Command
{
    public $signature = 'skim';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
