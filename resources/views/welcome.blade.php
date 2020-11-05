@extends('layout')

@section('title', 'BeeFlix HomePage')

@section('body')
    <div class="container d-flex flex-wrap">
        @foreach($genres as $genre)
            <h1>{{$genre->name}}</h1>
        @foreach($movies as $movie)
    @if($movie->genre_id != $genre->id)
    @continue
    @endif
    <div class="card" style="width: 15rem;">
    <img src="{{$movie->photo}}" class="card-img-top" alt="{{$movie->name}}">
    <div class="card-body">
        <span class="badge badge-pill badge-primary">{{$movie->genre->name}}</span>
        <h5 class="card-title">{{$movie->title}}</h5>
    </div>
    </div>
    @endforeach
    @endforeach
    </div>
@endsection
