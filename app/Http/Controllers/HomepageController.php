<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $featuredListings = [];
        return Inertia::render('Home/Index', compact('featuredListings'));
    }
}
