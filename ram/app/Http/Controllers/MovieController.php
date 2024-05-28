<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('backoffice.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('backoffice.movies.create');
    }
}
