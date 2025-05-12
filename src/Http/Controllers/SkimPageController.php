<?php

namespace Ijpatricio\Skim\Http\Controllers;

use Ijpatricio\Skim\Models\SkimPage;
use Illuminate\Http\Request;

class SkimPageController
{
    public function __invoke(Request $request)
    {
        $page = SkimPage::query()
            ->where('slug', $request->getRequestUri())
            ->first();

        if (blank($page)) {
            return abort(404);
        }

        return 'Hello World';
    }
}
