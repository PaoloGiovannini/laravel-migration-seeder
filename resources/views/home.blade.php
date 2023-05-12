@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')

    <div>

        <ul>
            @foreach ($trains as $train)
                <li class="p-3">
                    {{ $train->id }} - {{ $train->azienda }} - stazione di partenza: {{ $train->stazione_partenza }} -
                    stazione di arrivo - {{ $train->stazione_arrivo }} - orario partenza: {{ $train->orario_partenza }} -
                    orario arrivo: {{ $train->orario_arrivo }} - cancellato: @if ($train->cancellato == 0) No @else Si @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
