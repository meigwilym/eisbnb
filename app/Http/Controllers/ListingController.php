<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\SaveBookingRequest;
use App\Listing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ListingController extends Controller
{
    /**
     * All Listings
     *
     * @return void
     */
    public function index()
    {
        $listings = Listing::orderBy('advert_level_id', 'DESC')->get();

        return Inertia::render('Listings/Index', compact('listings'));
    }

    /**
     * Show a specific Listing
     *
     * @param Listing $listing
     * @return void
     */
    public function show(Listing $listing)
    {
        return Inertia::render('Listings/Show', compact('listing'));
    }

    public function saveBooking(SaveBookingRequest $saveBookingRequest, Listing $listing)
    {
        Booking::create($saveBookingRequest->validated());
        // send email to owner
        // send email acknowledgment to customer
        return redirect()->route('listing.show', $listing)
            ->withSuccess('Diolch! Byddwn yn pasio\'r neges ymlaen i\'r perchennog');
    }
}
