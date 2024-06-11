<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('backoffice.movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        dd($movie->image->src);
    }

    public function create()
    {
        return view('backoffice.movies.create');
    }

    public function store()
    {

        // request()->file('image')->getSize();
        // request()->file('image')->getClientOriginalExtension();
        // request()->file('image')->store();
        // request()->file('image')->store('movies', 'local');
        // request()->file('image')->storeAs('movies/perrito.jpg');

        // Subir imagen y Recuperar el src
        $size = request()->file('image')->getSize();
        $extension = request()->file('image')->getClientOriginalExtension();
        $src = request()->file('image')->store('movies');

        // Crear un registro en la base con ese src
        $image = new Image;
        $image->size = $size;
        $image->extension = $extension;
        $image->src = $src;
        $image->save();

        // Creo la movie y le paso el id de la imagen
        $movie = new Movie;
        $movie->title = request()->input('title');
        $movie->description = request()->input('description');
        $movie->released_date = request()->input('released_date');
        $movie->genre_id = request()->input('genre_id');
        $movie->image_id = $image->id;
        $movie->save();

        return redirect('backoffice/movies');
    }
}
