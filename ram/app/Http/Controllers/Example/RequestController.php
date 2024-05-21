<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function form()
    {
        return view('example.request.form');
    }

    public function all()
    {
        dd(request()->all()); // array asociativo
    }

    public function input()
    {
        dd(request()->input('released_date')); // string
    }

    public function only()
    {
        dd(request()->only('title', 'released_date', 'description')); // array asociativo
    }

    public function except()
    {
        dd(request()->except('_token', 'submit')); // array asociativo
    }
}
