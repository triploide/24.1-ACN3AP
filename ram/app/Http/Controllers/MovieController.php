<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Tag;

class MovieController extends Controller
{
    public function index()
    {
        $query = Movie::query();

        if ($search = request()->input('search')) {
            // $query->where('title', 'like', "%$search%")->orWhere('id', $search);

            $query->whereHas('genre', function ($query) use ($search) {
                $query->where('value', 'like', "%$search%"); // acá el value es una columna de genre
            });

            $query->orWhereHas('tags', function ($query) use ($search) {
                $query->where('value', 'like', "%$search%"); // acá el value es una columna de tags
            });

            $query->orWhere('title', 'like', "%$search%");
        }

        $movies = $query->get();
        

        return view('backoffice.movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        
        return view('backoffice.movies.show', compact('movie'));
    }

    public function create()
    {
        $genres = Genre::all();
        $tags = Tag::all();

        return view('backoffice.movies.create', compact('genres', 'tags'));
    }

    public function checkout()
    {
        $movies = Movie::whereIn('id', session('cart'))->get();

        return view('backoffice.movies.index', compact('movies'));
    }

    public function add($id)
    {
        if (session()->has('cart')) {
            $ids = session('cart');
            $ids[] = $id;
            session(['cart' => $ids]);
        } else {
            session(['cart' => [$id]]);
        }

        return redirect('backoffice/movies');
    }

    public function remove($id)
    {
        $ids = session('cart');

        $ids = array_filter($ids, function ($current_id) use ($id) {
            return $current_id != $id;
        });

        session(['cart' => $ids]);

        return redirect('backoffice/movies');
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

        $movie->tags()->sync(request()->input('tags')); // Sincroniza!!

        return redirect('backoffice/movies');
    }
}
