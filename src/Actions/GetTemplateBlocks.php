<?php

namespace Ijpatricio\Skim\Actions;

use Ijpatricio\Skim\Contracts\HasBlock;
use Ijpatricio\Skim\Skim;
use Illuminate\Support\Collection;
use Illuminate\Support\Composer;
use ReflectionClass;
use function Pest\Laravel\json;

class GetTemplateBlocks
{
    public function __construct(
        protected Skim $skim,
    ){}

    public function __invoke(string $template): Collection
    {
        $currentTemplatePath = $this->skim
            ->getTemplates()
            ->first(fn($value, $key) => $key === $template);

        $composer = require base_path('vendor/autoload.php');

        return collect($composer->getClassMap())
            // Filter to have Template Classes only
            ->filter(function ($path, $class) use ($currentTemplatePath) {
                $path = realpath($path);
                $currentTemplatePath = realpath($currentTemplatePath);
                return str($path)->startsWith($currentTemplatePath);
            })
            ->keys()
            // Filter to have only classes that implement HasBlock
            ->filter(function ($class) {
                $reflection = new ReflectionClass($class);
                return $reflection->implementsInterface(HasBlock::class);
            })
            // Map to get the block
            ->map(fn($class) => $class::getBlock());
    }
}
