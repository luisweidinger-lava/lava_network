<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\LavaController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentication (guests only route if not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');

});


//Make / smart
/*Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('offers.index')
        : view('welcome');
})->name('home');
*/

// Logout (Auth only routes)
    /* 11:11 !!!Route::post('/logout', [LoginController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
    */



//require __DIR__.'/auth.php';






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


