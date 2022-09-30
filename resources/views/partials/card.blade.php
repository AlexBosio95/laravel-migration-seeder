@if ($train['deleted'] == 0)
                
    <li class="list-group-item">

        <div class="row mb-4">

            <div class="col-6">
                <h4>{{$train['company']}}</h4>
            </div>

            <div class="col-6 d-flex justify-content-end flex-wrap">
                <div>
                    <span>Departure Date:</span>
                    <h5>{{$train['date']}}</h5>
                </div>
            </div>

            <div class="col-12">
                <span>Departure - Arrival</span>
                <h5>{{$train['departure_station'] . ' - ' . $train['arrival_station']}}</h5>
                <span>{{$train['departure_time'] . ' - ' . $train['arrival_time']}}</span>
            </div>

            <div class="col-6 d-flex align-items-end">
                <span>N° Carriages: {{$train['number_carriages']}}</span>
            </div>

            <div class="col-6">
                    <span>Code:</span>
                    <h5>{{$train['train_code']}}</h5>
            </div>

            <div class="col-6">Status:</div>
            <div class="col-6">
                @if ($train['in_time'] == 1)
                    <h5 class="time">IN TIME</h5>
                @else
                    <h5 class="late">LATE</h5>
                @endif
            </div>
        </div>
    </li>
                
@endif