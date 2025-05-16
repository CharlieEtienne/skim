<?php

namespace Ijpatricio\Skim\Http\Controllers;

use Ijpatricio\Skim\Actions\RenderPage;
use Ijpatricio\Skim\Models\SkimPage;
use Illuminate\Http\Request;

class SkimPageController
{
    public function __invoke(Request $request, RenderPage $renderPage)
    {
        $page = SkimPage::query()
            ->get()
            ->first(function (SkimPage $page) use ($request) {
                $currentPageRoute = \Route::get($page->route);

                return $currentPageRoute->matches($request);
            });

        ray($page->content);

        if (filled($page)) {
            return $renderPage($page);
        }

        return abort(404);
    }
}
