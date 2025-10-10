<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\City;
use App\Models\Tag;
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
        $offers = Offer::with('city', 'user','tags')->get();
        //$offers = Offer::all();
        //just to show if 20 offers are being generated
        //echo "DEBUG: Found " . count($offers) . " offers";
        // Send the offers to the view
        return view('offers.index', compact('offers'));
    }

    public function show(Offer $offer): View
    {
        //$offer = Offer::with('city', 'user')->findOrFail($offer);
        // davor war zweites offer mit $id erklärt
        $offer->load(['city', 'user','tags']);
        return view('offers.show', compact('offer'));
    }

    public function create(): View
    {
        $tags = Tag::orderBy('name')->get();
        return view('offers.create', compact('tags'));
    }

    public function store(Request $request)
    {
        //Validate incoming test data before stored
        $data = $request->validate([
            'title'          => ['required','string','max:255'],
            'body'           => ['nullable','string'],
            'rent'           => ['nullable','numeric'],
            'size'           => ['nullable','numeric'],
            'available_from' => ['nullable','date'],
            'available_to'   => ['nullable','date','after_or_equal:available_from'],
            'price'          => ['nullable','numeric'],
            'city_id'        => ['required','exists:cities,id'],
            // tags come as array of tag IDs
            'tags'           => ['array'],
            'tags.*'         => ['integer','exists:tags,id'],
            ]);

        $data['user_id'] = auth()->id();

        $offer = \App\Models\Offer::create($data);

        $offer->tags()->sync($request->input('tags', []));

        return redirect()->route('offers.show', $offer->id)
            ->with('success', 'Offer created.');
    }

    //Add tags manually for testing purposes
    public function run(): void
    {
        // Create tags if not existing
        $tags = collect(['Pet friendly', 'Renovated', 'Terrace'])
            ->map(fn ($name) => Tag::firstOrCreate(['name' => $name]));

        // Create offers
        Offer::factory(10)->create()->each(function ($offer) use ($tags) {
            // Attach 1–2 random tags to each offer
            $offer->tags()->attach(
                $tags->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }





}
