@extends('layouts.master')
{{-- @foreach ($trains as $train)
    {{  }}
@endforeach --}}
@section('content')
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col"># Treno</th>
                <th scope="col">Company</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col"># Carrozze</th>
                <th scope="col">Ritardo</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr class="{{ $train['cancelled'] ? 'table-danger' : (!$train['on_time'] ? 'table-warning' : '') }}">
                    <th scope="row">{{ $train['train_code'] }}</th>
                    <td>{{ $train['company'] }}</td>
                    <td>{{ $train['departure_station'] }}</td>
                    <td>{{ $train['arrival_station'] }}</td>
                    <td>{{ $train['departure_time'] }}</td>
                    <td>{{ $train['arrival_time'] }}</td>
                    <td>{{ $train['carriages'] }}</td>
                    <td>{{ $train['on_time'] ? '' : 'Si' }}</td>
                    <td>{{ $train['cancelled'] ? 'Si' : ' ' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
