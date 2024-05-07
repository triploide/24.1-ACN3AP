<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class ModelController extends Controller
{
    public function ejemplo()
    {
        // dd(Movie::all());

        $movies = Movie::all();


        foreach ($movies as $movie) {
            echo $movie->title . ' - ' . $movie->since() . '<br>';
        }

        return 'ok';

        return Movie::all(); // Select * from snake_case(plural(class_name()))
    }
}
