@extends('layout')
@section('judul', 'Homepage')

@section('body')
    <div class="container">
        @foreach($genres as $genre)

        <h1>{{ $genre->name }}</h1>
    <div class="d-flex flex-wrap">
    @foreach ($movies as $movie)
        @if($movie->genre_id == $genre->id)
        <div class="card m-2" style="width: 14rem;">
            <img class="card-img-top imgHeight" src="{{ $movie->photo }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">{{ $movie->title }}</h5>
            </div>
            <a href="/movie/{{$movie->id}}" class="btn btn-primary btn-lg btn-block">LIHAT FILM</a>
        </div>
            @endif
    @endforeach

    </div>
    @endforeach
    @endsection
