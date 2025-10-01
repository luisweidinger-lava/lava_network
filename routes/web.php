<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lava', function () {
    $lavas = [
        ["name" => "mario","skill" => 75, "id" => "1"],
        ["name" => "luigi","skill" => 45, "id" => "2"],
    ];
return view('lavas.index',["greeting" => "hello", "lavas" => $lavas]);
});

Route::get('/lava/{id}', function ($id) {
    // fetch record with id
    return view('lavas.show',["id" => $id]);
});