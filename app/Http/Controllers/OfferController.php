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
        // Debug: Check if user is authenticated
        /*dump('Is authenticated: ', auth()->check());
        dump('Current user: ', auth()->user());
        dump('All offers: ', Offer::all());
        */
        // Get all offers with related city and user info
        $offers = Offer::with('city', 'user')->get();
        //$offers = Offer::all();
        //just to show if 20 offers are being generated
        echo "DEBUG: Found " . count($offers) . " offers";
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
