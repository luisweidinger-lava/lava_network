<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\LavaController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');


require __DIR__.'/auth.php';

// Show login form (guests only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

// Logout (must be logged in)
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

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


