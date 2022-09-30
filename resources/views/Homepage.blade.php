@extends('layout.app')

@section('title', 'TodayTikets')

@section('titlesection', 'TodayTikets')

@section('contain')

        <a class="all text-center" href="{{route('AllTikets')}}">View All</a>


        <ul class="list-group mt-4">
            @foreach ($TrainsToday as $key => $train)

            @include('partials.card')

            @endforeach
        </ul>

    
@endsection