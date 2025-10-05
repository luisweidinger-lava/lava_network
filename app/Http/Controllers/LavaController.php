<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LavaController extends Controller
{
    public function index() {
        $lavas = [
            ["name" => "Mario", "skill" => 75, "id" => "1"],
            ["name" => "Luigi", "skill" => 45, "id" => "2"],
        ];

        return view('lavas.index', ['lavas' => $lavas]);
    }
}

