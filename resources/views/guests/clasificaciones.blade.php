@extends('layouts.landing')
@section('title', 'Clasificaciones')

@section('content')
    @component('guests._components.table')
        @slot('title')
            {{ 'Clasificaciones' }}
        @endslot
        @slot('header')
            <th>POS</th>
            <th>Equipo</th>
            <th>P J</th>
            <th>P G</th>
            <th>P E</th>
            <th>P P</th>
            <th>G F</th>
            <th>G C</th>
            <th>S G</th>
            <th>PTS</th>
        @endslot
        @slot('detail')
            @foreach ($datos as $index => $dato)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $dato->nombre }}</td>
                    <td>{{ $dato->pj }}</td> <!-- Partidos Jugados -->
                    <td>{{ $dato->pg }}</td> <!-- Partidos Ganados -->
                    <td>{{ $dato->pe }}</td> <!-- Partidos Empatados -->
                    <td>{{ $dato->pp }}</td> <!-- Partidos Perdidos -->
                    <td>{{ $dato->gf }}</td> <!-- Goles a favor -->
                    <td>{{ $dato->ge }}</td> <!-- Goles en contra -->
                    <td>{{ $dato->sg }}</td> <!-- Saldo de goles (S G) -->
                    <td>{{ $dato->pto }}</td> <!-- Puntos (PTS) -->
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection

