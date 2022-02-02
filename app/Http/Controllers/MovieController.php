<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller{
    public function index(){
        $movies = Movie::all();
        $genres = Genre::all();
        return view('homepage', ['movies' => $movies, 'genres' => $genres]);
    }

    public function movielist($id){
        $movies = Movie::all();
        $genres = Genre::find($id);
        return view('movielist', ['movies' => $movies, 'genres' => $genres]);
    }

    public function details($id){
        $movies = Movie::find($id);
        $genres = Genre::find($id);
        $episodes = Episode::where('movie_id', $id)->paginate(3);
        return view('moviedetail', ['movies' => $movies, 'genres' => $genres, 'episodes' => $episodes]);
    }
}
