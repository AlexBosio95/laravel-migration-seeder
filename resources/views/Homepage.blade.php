@extends('layout.app')

@section('title', 'Homepage')

@section('contain')

    <h1>List</h1>

    <ul class="list-group">
        @foreach ($Trains as $key => $train)
            <li class="list-group-item">
                <h5>{{$train['company']}}</h5>
                <span>{{$train['departure_station'] . ' - ' . $train['arrival_station']}}</span>
                <h5>{{$train['departure_time']}}</h5>
                <h5>{{$train['arrival_time']}}</h5>
                <h5>{{$train['train_code']}}</h5>
                <h5>{{$train['number_carriages']}}</h5>
            </li>
        @endforeach
    </ul>

    
@endsection