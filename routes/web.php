<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lavas', function () {
    $lavas = [
        ["name" => "Mario", "skill" => 75, "id" => "1"],
        ["name" => "Luigi", "skill" => 45, "id" => "2"],
    ];

    return view('lavas.index', ["greeting" => "hi", "lavas" => $lavas]);
});

Route::get('/Lava/{id}', function ($id) {
    // fetch record with id
    return view('lavas.show', ["id" => $id]);
});

Route::get('/hello', function () {
    return "Hello from my site!";
});