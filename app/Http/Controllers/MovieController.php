<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $genres = Genre:all();
        return view('index', 'movies' => $movies);
    }
}
