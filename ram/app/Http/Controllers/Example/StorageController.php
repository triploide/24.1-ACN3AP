<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class StorageController extends Controller
{
    public function form($id)
    {
        $movie = Movie::find($id);

        return view('example.storage.form', compact('movie'));
    }

    public function upload($id)
    {
        // dd(
        //     request()->file('image')->getSize(),
        //     request()->file('image')->getClientOriginalExtension(),
        //     request()->file('image')->extension(),
        //     request()->file('image')->getClientOriginalName(),
        //     request()->file('image')->getBasename(),
        // );

        // request()->file('image')->store('movies');

        $movie = Movie::find($id);

        $name = \Str::of($movie->title)
            ->slug()
            ->append('.')
            ->append($id)
            ->append('.')
            ->append(request()->file('image')->extension())
            ->__toString()
        ;

        // $path = request()->file('image')->store('movies');
        $path = request()->file('image')->storeAs('movies', $name);

        $movie->image = $path;
        $movie->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        return view('example.storage.show', compact('movie'));
    }
}
