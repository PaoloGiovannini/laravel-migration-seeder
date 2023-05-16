@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')

    <div>

        <ul>
            @foreach ($trains as $train)
                <li class="p-3">
                    {{ $train->id }} - {{ $train->company }} - stazione di partenza: {{ $train->departure_station }} -
                    stazione di arrivo - {{ $train->arrival_station }} - orario partenza: {{ $train->departure_time }} -
                    orario arrivo: {{ $train->arrival_time }} - cancellato: @if ($train->cancelled == 0) No @else Si @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
