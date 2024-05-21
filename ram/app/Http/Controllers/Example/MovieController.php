<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('example.movies.index', ['movies' => $movies]);
    }

    public function create()
    {
        return view('example.movies.create');
    }

    public function store()
    {
        $movie = new Movie;
        $movie->title = request()->input('title');
        $movie->description = request()->input('description');
        $movie->released_date = request()->input('released_date');
        $movie->image = request()->input('image');
        $movie->genre_id = request()->input('genre_id');
        $movie->save();

        return redirect('/example/movies');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('example.movies.edit', compact('movie'));
    }

    public function update($id)
    {
        $movie = Movie::find($id);
        $movie->title = request()->input('title');
        $movie->description = request()->input('description');
        $movie->released_date = request()->input('released_date');
        $movie->image = request()->input('image');
        $movie->genre_id = request()->input('genre_id');
        $movie->save();

        return redirect('/example/movies');
    }
}
