<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class QueryController extends Controller
{
    public function index()
    {
        return view('example.queries.index');
    }

    public function whereEq()
    {
        $movies = Movie::where('genre_id', 3)->get();

        return view('example.queries.results', compact('movies'));
    }

    public function whereGt()
    {
        $movies = Movie::where('released_date', '>=', '2015-01-01')->get();

        return view('example.queries.results', compact('movies'));
    }

    public function whereAnd()
    {
        $movies = Movie::where('released_date', '>=', '2015-01-01')->where('genre_id', 2)->get();

        return view('example.queries.results', compact('movies'));
    }

    public function whereOr()
    {
        $movies = Movie::where('released_date', '>=', '2015-01-01')->orWhere('genre_id', 2)->get();

        return view('example.queries.results', compact('movies'));
    }

    public function whereIn()
    {
        $movies = Movie::whereIn('genre_id', [1, 2, 5])->get();

        return view('example.queries.results', compact('movies'));
    }

    public function whereLike()
    {
        $movies = Movie::where('title', 'like', '%ut%')->get();

        return view('example.queries.results', compact('movies'));
    }

    public function orderBy()
    {
        $movies = Movie::orderBy('released_date', 'desc')->get();

        return view('example.queries.results', compact('movies'));
    }

    public function filter()
    {
        $query = Movie::query();

        if (request()->has('genre_id')) {
            $query->where('genre_id', request()->input('genre_id'));
        }

        $movies = $query->get();

        return view('example.queries.results', compact('movies'));
    }

    public function filter2()
    {
        $query = Movie::query();

        if (request()->has('genre_id')) {
            $query->where('genre_id', request()->input('genre_id'));
        }

        if (request()->has('released_date')) {
            $query->where('released_date', '>=', request()->input('released_date'));
        }

        if (request()->has('search')) {
            $query->where('title', 'like', '%' . request()->input('search') . '%');
        }

        $movies = $query->get();

        return view('example.queries.results', compact('movies'));
    }
}
