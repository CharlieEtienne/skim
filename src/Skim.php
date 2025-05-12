<?php

namespace Ijpatricio\Skim;

use Illuminate\Support\Collection;

class Skim {

    protected Collection $templates;

    public function __construct()
    {
        $this->templates = collect();
    }

    public function register($templateDir, $templateName)
    {
        $this->templates->put($templateName, $templateDir);
    }

    public function getTemplatesForSelectField(): Collection
    {
        return $this->templates->mapWithKeys(fn ($path, $key) => [$key => $key]);
    }
}
