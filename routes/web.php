<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\LavaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');


/*
Route::get('/offers', function () {
    $offers = [
        ["name" => "Mario", "skill" => 75, "id" => "1"],
        ["name" => "Luigi", "skill" => 45, "id" => "2"],
    ];

    return view('offers.index', ["greeting" => "hi", "offers" => $offers]);
});

Route::get('/offers', [LavaController::class, 'index']);

Route::get('/offers/create', function () {
    return view('offers.create');
});

//the word create is the ID wildcard
Route::get('/offers/{id}', function ($id) {
    // fetch record with id
    return view('offers.show', ["id" => $id]);
});

*/


