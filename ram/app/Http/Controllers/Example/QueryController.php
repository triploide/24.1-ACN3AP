<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class QueryController extends Controller
{
    public function whereComplejo()
    {
        // // Preparar
        // $query = Movie::where('genre_id', '=', 7); // columna, operador, valor

        // // Ejecutar
        // // get, first
        // $query->get();

        $movies = Movie::where('released_date', '>=', '2010-01-01')->get();

        // foreach ($movies as $movie) {
        //     echo 'Genre Id: ' . $movie->genre_id . '<br>';
        // }

        return view('example.movies.index', compact('movies'));
    }

    public function whereSimple()
    {
        $movies = Movie::where('genre_id', 7)->get();

        return view('example.movies.index', compact('movies'));
    }

    public function whereAnd()
    {
        $movies = Movie::where('genre_id', 7)->where('is_visible', 1)->get();

        return view('example.movies.index', compact('movies'));
    }

    public function whereOr()
    {
        $movies = Movie::where('genre_id', 7)
            ->orWhere('genre_id', 3)
            ->get()
        ;

        return view('example.movies.index', compact('movies'));
    }

    public function whereIn()
    {
        $movies = Movie::whereIn('genre_id', [1,3,7,10])->get();

        return view('example.movies.index', compact('movies'));
    }

    public function whereLike()
    {
        $movies = Movie::where('title', 'like', 'ipsum%')->get();

        return view('example.movies.index', compact('movies'));
    }

    public function orderBy()
    {
        $movie = Movie::orderBy('released_date', 'desc')->first();

        dd($movie->toArray());
    }

    public function filter()
    {
        if (request()->has('title') && request()->has('genre_id')) {
            $title = request()->input('title');
            $genre_id = request()->input('genre_id');
            $movies = Movie::where('title', 'like', "%$title%")
                ->where('genre_id', $genre_id)
                ->get()
            ;
        } else {
            $movies = Movie::all();
        }

        return view('example.movies.index', compact('movies'));
    }

    public function filter2()
    {
        // $movie = Movie::find(1);
        // $movie->delete();

        $query = Movie::query();

        if (request()->has('title')) {
            $query->where('title', 'like', '%'.request()->input('title').'%');
        }

        if (request()->has('released_date')) {
            $query->where('released_date', '>', request()->input('released_date'));
        }

        if (request()->has('genre_id')) {
            $query->where('genre_id', request()->input('genre_id'));
        }

        $movies = $query->get();

        return view('example.movies.index', compact('movies'));
    }
}
