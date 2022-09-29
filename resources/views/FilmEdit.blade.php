@extends('layout.app')

@section('title', 'FilmEdit')

@section('contain')


    <div class="d-flex flex-wrap justify-content-center">

        @isset($Movies)
            @foreach ($Movies as $movie)
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$movie['title']}}</h5>
                    <p class="card-text">{{$movie['original_title']}}</p>
                    <p class="card-text">{{$movie['nationality']}}</p>
                    <p class="card-text">{{$movie['date']}}</p>
                    <span>{{$movie['vote']}}</span>
                    </div>
                </div>
            @endforeach
        @endisset
        
        @empty($Movies)
            <h1>DB Vuoto</h1>
        @endempty



    </div>
    
@endsection