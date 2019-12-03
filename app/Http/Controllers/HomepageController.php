<?php

namespace App\Http\Controllers;

use App\Listing;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $featuredListings = Listing::where('advert_level_id', 3)->get();
        return Inertia::render('Home/Index', compact('featuredListings'));
    }
}
