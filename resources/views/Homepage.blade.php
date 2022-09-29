@extends('layout.app')

@section('title', 'Homepage')

@section('contain')

    <div class="container">

        <h4 class="text-center">List Train Today</h4>
    
        <ul class="list-group">
            @foreach ($TrainsToday as $key => $train)
                <li class="list-group-item">
                    <h4>{{$train['company']}}</h4>
                    <span>{{$train['departure_station'] . ' - ' . $train['arrival_station']}}</span>
                    <div class="time">
                        <span>{{$train['departure_time'] . ' - ' . $train['arrival_time']}}</span>
                    </div>
                    <h5>{{$train['train_code']}}</h5>
                    <h5>{{$train['date']}}</h5>
                    <h5>{{$train['number_carriages']}}</h5>
                </li>
            @endforeach
        </ul>

    </div>


    
@endsection