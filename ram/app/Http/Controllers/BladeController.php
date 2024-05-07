<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class BladeController extends Controller
{
    public function directivas()
    {
        $movies = Movie::all();

        // $movies = [];

        return view('blade.directivas', ['peliculas' => $movies]);
    }
}
