<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\View\View;


class OfferController extends Controller
{
    //Adding "View" for specification
    public function index(): View
    {
        // Get all offers with related city and user info
        $offers = Offer::with('city', 'user')->get();
        // Send the offers to the view
        return view('offers.index', compact('offers'));
    }

    public function show($id): View
    {
        $offer = Offer::with('city', 'user')->findOrFail($id);
        return view('offers.show', compact('offer'));

    }

    public function create(): View
    {
        return view('offers.create');
    }
}
