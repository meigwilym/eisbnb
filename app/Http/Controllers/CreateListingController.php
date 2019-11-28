<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveListingImagesRequest;
use App\Http\Requests\SaveListingPaymentRequest;
use App\Http\Requests\SaveListingRequest;
use App\Listing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CreateListingController extends Controller
{
    public function details()
    {
        return Inertia::render('CreateListings/Details');
    }

    public function saveDetails(SaveListingRequest $saveListingRequest)
    {
        $listing = Listing::create($saveListingRequest->validated());
        return redirect()->route('listings.images');
    }

    public function images(Listing $listing)
    {
        return Inertia::render('CreateListings/Images', compact('listing'));
    }

    public function saveImages(SaveListingImagesRequest $saveListingImagesRequest)
    {
        return redirect()->route('listings.payment');
    }

    public function payment(Listing $listing)
    {
        return Inertia::render('CreateListings/Payment', compact('listing'));
    }

    public function savePayment(SaveListingPaymentRequest $saveListingPaymentRequest)
    {
        return redirect()->route('listings.show');
    }
}
