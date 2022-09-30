@extends('layout.app')

@section('title', 'TiketsAllDays')

@section('titlesection', 'All Tikets')

@section('contain')

        <a class="all text-center" href="{{route('Home')}}">View Only today</a>


        <ul class="list-group mt-4">
            @foreach ($Trains as $key => $train)

            @include('partials.card')
            
            @endforeach
        </ul>


    
@endsection