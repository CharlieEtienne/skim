<?php

namespace Ijpatricio\Skim\Actions;

use Ijpatricio\Skim\Models\SkimPage;

class RenderPage
{
    public function __invoke(SkimPage $page)
    {
        $page->load('skimWebsite');

        $layout = $page->skimWebsite->template . "::layouts.app";

        return view('skim::render.page')
            ->with([
                'layout' => $layout,
                'content' => $page->content,
                'template' => $page->skimWebsite->template,
            ]);
    }
}
