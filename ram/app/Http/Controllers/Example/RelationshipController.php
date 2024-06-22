<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Image;
use App\Models\Movie;

class RelationshipController extends Controller
{
    public function index()
    {
        return view('example.relationships.index');
    }

    public function belongsTo()
    {
        $movie = Movie::find(2);

        // dd($movie->genre()); // Cuando uso la relación como método, obtengo la instancia de la relación (BelongsTo, HasOne, HasMany, BelongsToMany)
        // dd($movie->genre); // Cuando uso la relación como propiedad, obtengo o bien una instancia de un modelo o bien una collection de instancias de modelo

        // Las relaciones BelongsTo y HasOne devueleven una intancia de un Model
        // Las relaciones HasMany y BelongsToMany devueleven una collection de instancias de un Model

        dd($movie->genre->value);
    }

    public function hasOne()
    {
        $image = Image::find(1);

        dd($image->movie->title);
    }

    public function hasMany()
    {
        $genre = Genre::find(2);

        foreach ($genre->movies as $movie) {
            echo $movie->title . '<br>';
        }
    }
    public function belongsToMany()
    {
        $movie = Movie::find(1);

        foreach ($movie->tags as $tag) {
            echo $tag->value . '<br>';
        }
    }
}
