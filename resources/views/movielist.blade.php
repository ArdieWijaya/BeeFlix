@extends('layout')
@section('judul', 'Category')

@section('body')
    <div class="container">


            <h1>{{ $genres->name }}</h1>
            <div class="d-flex flex-wrap">
                @foreach ($movies as $movie)
                    @if($movie->genre_id == $genres->id)
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
@endsection

