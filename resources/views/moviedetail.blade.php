@extends('layout')
@section('judul', 'Detail Page')

@section('body')
    <div class="container">
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $movies->photo }}" class="card-img" alt="{{ $movies->photo }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $movies->title }}</h5>
                    @for($i = 0; $i < $movies->rating; $i++)
                        <img class="m-1" style="width: 25px; height: 25px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Star_icon_stylized.svg/512px-Star_icon_stylized.svg.png">
                    @endfor
                    @if($movies->rating < 5)
                    @for($i = 0; $i < 5-$movies->rating; $i++)
                        <img class="m-1" style="width: 25px; height: 25px" src="https://upload.wikimedia.org/wikipedia/commons/4/49/Star_empty.svg">
                    @endfor
                    @endif
                    <p class="card-text">{{ $movies->description }}</p>
                    <h5 class="card-title">Genre: <a href="/movielist/{{$movies->genre_id}}">{{ $movies->genre->name }}</a></h5>
                    <h5 class="card-title">Episodes</h5>

                    <table class="table">
                        <thead class="card-body thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Episode Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($episodes as $episode)
                            @if($episode->movie_id == $movies->id)
                                <tr>
                                    <th>{{ $episode->episode }}</th>
                                    <th>{{ $episode->title }}</th>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                    {{ $episodes->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection
