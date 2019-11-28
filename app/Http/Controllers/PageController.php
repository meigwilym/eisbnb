<?php

namespace App\Http\Controllers;

use App\Page;
use Inertia\Inertia;

class PageController extends Controller
{
    public function show(Page $page)
    {
        return Inertia::render('Page/Show', compact('page'));
    }
}
