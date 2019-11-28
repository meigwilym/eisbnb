<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function list()
    {
        $listings = Listing::paginate();

        return response()->json(['data' => $listings]);
    }
}
